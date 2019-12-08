<?php tmpl("header", ["title"=>"Homepage"]); ?>
<app>
<div style="margin-top: 70px;">

    <div class="a2elementscontainer">
        <div class="containerelement_50p" style="color: #434343; text-align: center; padding: 100px 20px;">
            <h1>Dive into something new!</h1>
            <br><br>
            <p>We are a little Team in germany that develops Apps, Websites and other stuff!</p>

            <br><br><br>
            <a class="blue_round_button" href="/about" hrefnrl="">About us</a>

        <div id="homepagetopproducts">
            <div class="homepagetopproduct">
                <a href="https://pastefy.ga"><img src="/assets/images/products/pastefy.png" height="60px" /></a>
            </div>

            <div class="homepagetopproduct">
                <a href="https://github.com/interaapps/ulole-framework"><img src="/assets/images/products/ulole.png" height="60px" /></a>
            </div>

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
        <div class="containerelement_50p hideonphone" style="background: #FFFFFF; color: #105de6; text-align: center; padding: 88px;">
            <img src="/assets/images/undraw_team_spirit_hrr4.svg" style="width: 400px; max-width: 100%;" />
        </div>
    </div>

</div>

<div style="background: #105de6; color:#FFFFFF; text-align: center; padding: 16px 0px;">
<a style="font-size: 22px">InteraApps - Dive into something new!</a>
</div>

<div class="lightsection withBackgroundImage0x2">

    <div class="a2elementscontainer">
        <div class="containerelement_30p" style="text-align: center; padding: 88px 60px;">
            <img src="/assets/images/undraw_code_review_l1q9.svg" style="width: 400px; max-width: 100%;" />
        </div>
        <div class="containerelement_70p" style="padding: 100px 5px;">
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
    </div>

</div>

<div class="darksection">
    <h1>Who we are</h1>
    <p>We are a little team in germany that is developing just for fun!
    </p>
</div>

<!--
<div class="lightsection withBackgroundImage0x2">
    <h1>Done!</h1>
    More is coming soon!
</div>-->

<div class="a2elementscontainer">
    <div class="containerelement_50p" style="background: #FFFFFF; color: #eb4034; text-align: center; padding: 88px;">
        <h1>Pastefy</h1><br>
        <p>Paste your code to send it to your friends!</p>
    </div>
    <div class="containerelement_50p" style="background: #eb4034; color: #FFFFFF; text-align: center; padding: 100px;">
        <h3>Just paste now!</h3>
        <br><br>
        <a href="https://pastefy.ga" class="round_white_button1">Go on!</a>
    </div>
</div>

<div class="a2elementscontainer">
    <div class="containerelement_50p" style="background: linear-gradient(to right, #105de6 0%,#2290e5 100%); color: #FFFFFF; text-align: center; padding: 100px;">
        <h3>Just short now!</h3>
        <br><br>
        <a href="https://punyshort.ga" class="round_white_button1">Go on!</a>
    </div>
    <div class="containerelement_50p" style="background: #FFFFFF; color: #105de6; text-align: center; padding: 88px;">
        <h1>Punyshort</h1><br>
        <p>Short links and share the shorted one!</p>
    </div>
</div>

<div class="a2elementscontainer">
    <div class="containerelement_50p" style="background: #FFFFFF; color: #333; text-align: center; padding: 88px;">
        <h1>IA on Github</h1><br>
        <p>Just look at our stuff!</p>
    </div>
    <div class="containerelement_50p" style="background: #333; color: #FFFFFF; text-align: center; padding: 100px;">
        <h3>Just check out our code now!</h3>
        <br><br>
        <a href="https://github.com/interaapps" class="round_white_button1">Github</a>
    </div>
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
        padding-top: 100px;
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

    .a2elementscontainer {
        width: 100%;
        display: flex;
    }

    .containerelement_50p,
    .containerelement_30p,
    .containerelement_70p { box-sizing: border-box; }

    .containerelement_50p { width: 50%; }
    .containerelement_30p { width: 30%; }
    .containerelement_70p { width: 70%; }
    

    .round_white_button1,
    .round_white_button1:link,
    .round_white_button1:visited {
        color: #FFFFFF;
        padding: 10px 26px;
        border: 2px #FFFFFF solid;
        border-radius: 906px;
        transition: 0.3s;
        text-decoration: none;
    }

    .round_white_button1:hover {
        color: #eb4034;
        background: #FFFFFF;
    }

    .blue_round_button,
    .blue_round_button:link,
    .blue_round_button:visited {
        background: linear-gradient(to right, #105de6 0%,#2290e5 100%);
        color: #FFFFFF;
        padding: 13px 38px;
        font-size: 19px;
        border-radius: 906px;
        transition: 0.3s;
        text-decoration: none;
        box-shadow: 0px 2px 5px 1px rgba(16,93,230,0.7);
    }

    .blue_round_button:hover{
        box-shadow: 0px 2px 5px 1px rgba(16,93,230,1.7);
    }

    .blue_round_button:focus{
        box-shadow: 0px 2px 5px 0.4px rgba(16,93,230,0.3);
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

        .a2elementscontainer {
            display: block;
        }

        .containerelement_50p,
        .containerelement_70p,
        .containerelement_30p {
            width: 100%;
        }

        .hideonphone {
            display: none;
        }
    }


</style>

</app>
<?php tmpl("footer"); ?>