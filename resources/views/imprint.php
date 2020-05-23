

<?php tmpl("header", ["title"=>"About us"]); ?>
<app>
<div id="homepagetopsection">
    <div id="homepagetopsectioninner">
        <a id="homepagetopslogan"><?php echo ( ulole\core\classes\Lang::lang("imprint") ); ?></a>
    </div>
</div>
<br><br><br>
<div class="lightsection">
    <h2>Angaben gemäß § 5 TMG:</h2>
    <p>Julian Gojani<br>
    Pinjes, 2<br>
    85360 Ulcinj<br>
    </p><br>
    <h2>Kontakt</h2>
    <p>
    E-Mail: julianfun123@yahoo.com<br>
    </p>
    <br><br>

    Der InteraApps Sitz liegt in Deutschland. Das Impressum liegt im Ausland. (Darüber kann man auch Kontakt aufnehmen.). Uns wäre es am liebsten, dass Sie uns über die angegebe EMail kontaktieren.
</div>
<style>

    #homepagetopsectioninner {
        padding-top: 120px;
        padding-bottom: 100px;
    }

</style>

</app>
<?php tmpl("footer"); ?>