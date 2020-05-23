<?php if( !(isset($_GET["viaJS"]) ? $_GET["viaJS"]=="true" : false) ):?>
    <div id="footer">
        <img class="noSelection" width="40px" src="https://interaapps.de/assets/interaapps/icon/icon3.png" />
        <a hrefnrl="" href="/imprint">Impressum</a><a class="noSelection footerseparator">-</a>
        <a hrefnrl="" href="/dsgvo">Datenschutz</a><a class="noSelection footerseparator">-</a>
        <a hrefnrl="" href="/donate">Donate</a>
        <a class="noSelection" id="copyright">InteraApps <?php echo (date("Y")); ?></a>
    </div>
<?php endif; ?>
</body>
</html>