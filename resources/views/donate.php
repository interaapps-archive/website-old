<?php tmpl("header", ["title"=>"Donate"]); ?>
<app>
<div id="homepagetopsection">
    <div id="homepagetopsectioninner">
        <a id="homepagetopslogan"><?php echo ( ulole\core\classes\Lang::lang("donate") ); ?></a>
    </div>
</div>
<br><br><br>
<div class="lightsection">
    <h2 style="text-align: center; display: block; margin: 0px 0px 80px 0px;">If you want to help us making those projects you could sponsor us a coffee.</h2>

    <div style="margin: auto;">
        <div id="donation-platforms">
            <a href="https://www.patreon.com/interaapps"><img src="/assets/images/donate/patreon.jpg"><span>Patreon</span></a>
            <a href="https://opencollective.com/interaapps"><img src="/assets/images/donate/opencollective.svg"><span>OpenCollective</span></a>
            <a href="https://liberapay.com/InteraApps"><img src="/assets/images/donate/liberapay.svg"><span>LiberaPay</span></a>
        </div>
    </div>

    <h2 style="text-align: center; display: block; margin: 50px 0px 80px 0px;">What do we to with that money?</h2>
    <p style="text-align: center;">
        First aval we will finance our projects. Domains, Server and more.<br>We are also going to upgrade our servers. The rest will be splitt up in the team fairly.
    </p>

    <i id="heart-symbole" class="material-icons">favorite_border</i>
</div>
<style>

    #homepagetopsectioninner {
        padding-top: 120px;
        padding-bottom: 100px;
    }

    #donation-platforms {
        display: flex;
        width: fit-content;
        margin: auto;
    }
    
    #donation-platforms a, 
    #donation-platforms a:visited
    #donation-platforms a:link {
        display: block;
        margin: 0px 30px;
        text-align: center;
        color: #434343;
        text-decoration: none;
        transition: background 0.3s, border-radius 0.3s;
        padding: 10px 20px;
    }

    #donation-platforms a:hover {
        background: #00000011;
        border-radius: 10px;
    }

    #donation-platforms a img {
        display: block;
        width: 100px;
        margin-bottom: 40px;
        border-radius: 100px;
    }

    #heart-symbole {
        display: block;
        font-size: 35px;
        text-align: center;
        color: #FF3232;
        margin-top: 50px;
    }

    @media screen and (max-width: 720px) {
        #donation-platforms {
            display: block;
        }
    }


</style>

</app>
<?php tmpl("footer"); ?>