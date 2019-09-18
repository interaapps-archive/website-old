<?php tmpl("header", ["title"=>"Homepage"]); ?>
<app>
<div id="homepagetopsection">
    <div id="homepagetopsectioninner">
        <a id="homepagetopslogan"><?php echo ( ulole\core\classes\Lang::lang("slogan") ); ?></a>
        <br>
        <div id="homepagetopproducts">
            <div class="homepagetopproduct">
                <a href="https://pastefy.ga"><img src="/assets/images/products/pastefy.png" height="60px" /></a>
            </div>

            <div class="homepagetopproduct">
                <a href="https://github.com/interaapps/ulole-framework"><img src="/assets/images/products/ulole.png" height="60px" /></a>
            </div>

            <!-- <div class="homepagetopproduct">
                <a href="https://sfri.ml"><img src="/assets/images/products/sfri.png" width="80px" /></a>
            </div> -->

            <div class="homepagetopproduct">
                <a href="https://punyshort.ga"><img src="/assets/images/products/punyshort.png" height="60px" /></a>
            </div>

            <div class="homepagetopproduct">
                <a href="https://accounts.interaapps.de"><img style="border-radius: 100%;" src="/assets/images/products/accounts.png" height="60px" /></a>
            </div>

            <div class="homepagetopproduct">
                <a href="#"><img src="/assets/images/products/lehrga.png" height="60px" /></a>
            </div>

        </div>

    </div>
</div>


<div class="lightsection withBackgroundImage0x2">
    <h1>Open Source</h1>
    <p>We love and support open source.<br>
    The idea of sharing code to everyone, getting feedback, help others and be transparent is fantastic!<br>
    So we do mostly support open source and we are contributing to it!<br>
    <br>A small list of our open source projects:
    <li><a class="link_black" href="https://github.com/interaapps/pastefy">Pastefy</a></li>
    <li><a class="link_black" href="https://github.com/interaapps/ulole-framework">Ulole-Framework</a></li>
    <li><a class="link_black" href="https://github.com/interaapps/jdom">JDom (JS Lib)</a></li>
    <li><a class="link_black" href="https://github.com/interaapps/cajax">Cajax (JS Lib)</a></li>
    <li><a class="link_black" href="https://github.com/interaapps/LocalWeather-Android">LocalWeather-Android (Android Lib)</a></li>
    <li><a class="link_black" href="https://github.com/interaapps/FirebaseManager-Android">FirebaseManager-Android (Android Lib)</a></li>
    <br>...
    <br><br>
    <a class="link_black" href="https://github.com/interaapps">Github</a>
    </p>
</div>

<div class="darksection">
    <h1>Who we are</h1>
    <p>We are a little team in germany that is developing just for fun!
    </p>
</div>

<div class="lightsection withBackgroundImage0x2">
    <h1>Done!</h1>
    More is coming soon!
</div>

<script>
    $(document).ready(function() {
        $(".homepagetopproduct").css({
            paddingTop: "0px",
            paddingBottom: "5px"
        });
        setTimeout(() => {
            $(".homepagetopproduct").animate({
            paddingTop: "",
            paddingBottom: ""
        }, 500, function( ) {
            console.log("#");
        });
        }, 400);
    });
</script>

<style>

   

    #homepagetopproducts {
        padding-top: 190px;
        display: flex;
        flex-wrap: wrap;
        text-align: center;
        margin: 0px auto;
        align-items: center;
        justify-content: center;
        max-width: 80%;
    }
    

    .homepagetopproduct {
        margin: 10px 20px;
        padding-top: 5px;
        padding-bottom: 0px;
        transition: 0.16s padding;
    }

    .homepagetopproduct:hover {
        padding-top: 0px;
        padding-bottom: 5px;
    }

    .withBackgroundImage0x2 {
        background-image: url(/assets/images/backgrounds/0x2.svg);
        background-position-x: 0%;
        background-position-y: 0%;
        background-repeat: repeat;
        background-size: auto;
        background-repeat: no-repeat;
        background-position: top;
        background-size: cover;
    }

    @media screen and (max-width: 720px) {
        #homepagetopproducts {
            display: flex;
            flex-wrap: wrap;
            text-align: center;
            margin: 0px auto;
            align-items: center;
            justify-content: center;
            max-width: 90%;
        }
    }


</style>

</app>
<?php tmpl("footer"); ?>