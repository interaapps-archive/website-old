<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta Data -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta name="theme-color" content="#FFFFFF" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }} | InteraApps.de</title>
    <script>window.document.title = '{{ $title }} | InteraApps.de';</script>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Questrial" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link rel="stylesheet" href="https://indestructibletype.com/fonts/Jost.css" type="text/css" charset="utf-8" />
    
    <link rel="shortcut icon" type="image/png" href="https://interaapps.de/assets/interaapps/icon/icon.png">
    
    <!-- Style -->
    <link rel="stylesheet" href="/assets/css/app.css">

    @if(( !(isset($_GET["viaJS"]) ? $_GET["viaJS"]=="true" : false) ))#
    <!-- Scripts -->
    <script src="/assets/js/app.js"></script>
    @endif
</head>

<loadindicator>
  <div class="load-bar">
    <div class="bar"></div>
    <div class="bar"></div>
    <div class="bar"></div>
  </div>
</loadindicator>
@if(( !(isset($_GET["viaJS"]) ? $_GET["viaJS"]=="true" : false) ))#
<script>
var x;
$(document).ready(function() {
    onClickFunction = function (link, pushUrl=true) {
      $('loadindicator').show();

      Cajax.get(link, {viaJS: "true"}).then((r)=>{
        console.log(link);
        if (link=="/dashboard"){
          onClickFunction(r.responseText);
        } else
          $("app").html(r.responseText);
        setTimeout(() => {
          $('loadindicator').hide();
        }, 10);
        initNoLoader();
      }).catch((r)=>{
        $("app").html("<br><br><h1 style='font-weight:normal'>"+r.status+"</h1><br>Something went wrong :(");
        $('loadindicator').hide();
      }).send();
      if (pushUrl)
        window.history.pushState(link, link, link);
      initNoLoader();
      return false;
    }
    initNoLoader = function() {
      $('[hrefnrl]').each(function(element) {
        x = $(element);
        $(element).attr({"onclick":"return onClickFunction('" +$(element).attr('href')+ "')"});
      });
    }
    initNoLoader();
    $(window).on('popstate', function (event) {
      onClickFunction(window.location.pathname, false);
    });
  });

</script>
@endif
<body>
    @if(( !(isset($_GET["viaJS"]) ? $_GET["viaJS"]=="true" : false) ))#
    
    <a id="logo" closenav hrefnrl="" href="/"><img  width="45px" src="/assets/interaapps/icon/icon3.svg" /></a>
    <a id="menubtn">menu</a>
    <div id="menu">
        <div id="menu_links">
        <a closenav hrefnrl="" href="/">{{ ulole\core\classes\Lang::lang("menu_home") }}</a>
        <a closenav hrefnrl="" href="/about">{{ ulole\core\classes\Lang::lang("menu_about") }}</a>
        <a closenav hrefnrl="" href="https://accounts.interaapps.de">My Account</a>
        </div>
    </div>
    <script>
        $("[closenav]").click(function() {
            closeNav();
        });
    </script>
    @endif
    </canvas>