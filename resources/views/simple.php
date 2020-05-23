<?php tmpl("header", ["title"=>$pagetitle]); ?>
<app>
<div id="homepagetopsection">
    <div id="homepagetopsectioninner">
        <a id="homepagetopslogan"><?php echo ( $pagetitle ); ?></a>
    </div>
</div>
<br><br><br>
<div class="lightsection">
    <?php echo ($contents); ?>
</div>
<style>

    #homepagetopsectioninner {
        padding-top: 120px;
        padding-bottom: 100px;
    }

</style>

</app>
<?php tmpl("footer"); ?>