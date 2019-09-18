<?php tmpl("header", ["title"=>"About us"]); ?>
<app>
<div id="homepagetopsection">
    <div id="homepagetopsectioninner">
        <a id="homepagetopslogan"><?php echo ( ulole\core\classes\Lang::lang("menu_about") ); ?></a>
    </div>
</div>
<br><br><br>
Jaja, hier kommt noch content hinne


<style>

    #homepagetopsectioninner {
        padding-top: 120px;
        padding-bottom: 100px;
    }

</style>

</app>
<?php tmpl("footer"); ?>