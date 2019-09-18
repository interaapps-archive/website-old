<?php tmpl("header", ["title"=>$pagetitle]); ?>
<?php
$opts = [
    "http" => [
        "method" => "GET",
        "header" => "User-Agent: request"
    ]
];
$context = stream_context_create($opts);
$link = str_replace("https://github.com/", "", $github);
$repos = json_decode(file_get_contents("https://api.github.com/repos/".$link, false, $context));
$readme = (new \modules\parsedown\Parsedown)->text( base64_decode(json_decode(file_get_contents("https://api.github.com/repos/".$link."/readme", false, $context))->content));
?>
<app>
<script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.13.1/highlight.min.js"></script>
<script>
    $(document).ready(function() {
        hljs.initHighlightingOnLoad();
    });
</script>
<div id="homepagetopsection">
    <div id="homepagetopsectioninner">
        <a id="homepagetopslogan"><?php echo ( $pagetitle ); ?></a>
    </div>
</div>
<br><br><br>
<div class="lightsection">
    <div id="githubpagesection">
        <div id="sidenav">
            <div id="reposowner">
                <img src="<?php echo ($repos->owner->avatar_url); ?>" width="100px">
                <a id="username" class="link_black" href="<?php echo ($repos->owner->html_url); ?>"><?php echo ($repos->owner->login); ?></a>
            </div><br><br>
            <span class="entry">Owner: <a href="<?php echo ($repos->owner->html_url); ?>" class="link_black"><?php echo ($repos->owner->login); ?></a></span><br>
            <span class="entry">GitHub Link: <a href="<?php echo ($repos->html_url); ?>" class="link_black">GitHub</a></span><br>
            <span class="entry">Description: <?php echo ($repos->description); ?></span><br>
        </div>
        <div id="readme">
            <?php echo ($readme); ?>
        </div>
    </div>
</div>
<style>

    #githubpagesection {
        display: flex;
    }

    #readme {
        width: 75%;
    }

    #sidenav .entry {
        font-size: 18px;
        margin-top: 4px;
    }

    #reposowner {
        border: #EEEEEE 3px solid;
        border-radius: 7px;
        box-sizing: border-box;
        padding: 20px 0px;
    }

    #reposowner #username {
        text-align: center;
        font-size: 23px;
        margin-top: 14px;
        width: 100%;
        display: block;
    }

    #reposowner img {
        text-align: center;
        display: block;
        margin: 10px auto;
    }

    #readme h1,
    #readme h2, 
    #readme h3, 
    #readme h4, 
    #readme h5 {
        margin-bottom: 10px;
        margin-top: 10px;
    } 

    #readme pre {
        padding: 16px;
        overflow: auto;
        font-size: 85%;
        background-color: #f6f8fa;
        border-radius: 3px;
    }

    #sidenav {
        width: 25%;
        box-sizing: border-box;
        padding-right: 10px;
    }

    ul li ul li {
        margin-left: 10px;
    }

    @media screen and (max-width: 720px) {
        #githubpagesection {
            display: block;
        }

        #readme {
            width: 100%;
        }

        #sidenav {
            width: 100%;
        }
    }

    #homepagetopsectioninner {
        padding-top: 120px;
        padding-bottom: 100px;
    }

</style>

</app>
<?php tmpl("footer"); ?>