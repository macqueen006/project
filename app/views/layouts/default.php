<?php
use Core\Session;
use Core\View;
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title><?=View::siteTitle(); ?></title>
    <link rel="stylesheet" href="<?=PROOT;?>css/bootstrap.min.css" media="screen" title="no title" charset="utf-8">
    <!-- This are the links for the akea theme -->
    <link rel=stylesheet href='<?=PROOT;?>plugins/goodlayers-core/plugins/combine/style.css' type=text/css media=all>
    <link rel=stylesheet href='<?=PROOT;?>plugins/goodlayers-core/include/css/page-builder.css' type=text/css media=all>
    <link rel=stylesheet href='<?=PROOT;?>plugins/revslider/public/assets/css/settings.css' type=text/css media=all>
    <link rel=stylesheet href='<?=PROOT;?>plugins/zilla-likes/styles/zilla-likes.css' type=text/css media=all>
    <link rel=stylesheet href='<?=PROOT;?>css/style-core.css' type=text/css media=all>
    <link rel=stylesheet href='<?=PROOT;?>css/akea-style-custom.css' type=text/css media=all>
    
    <link rel=stylesheet href='https://fonts.googleapis.com/css?family=Poppins%3A400%2C500%2C600%2C700%2C800' type=text/css media=all>
    <link rel=stylesheet href='https://fonts.googleapis.com/css?family=Montserrat' type=text/css media=all>
    <link rel=stylesheet href='https://fonts.googleapis.com/css?family=PT+Serif' type=text/css media=all>
    <link rel=stylesheet href='https://fonts.googleapis.com/css?family=Open+Sans' type=text/css media=all>
    <link rel=stylesheet href='https://fonts.googleapis.com/css?family=Poppins%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2Cregular%2Citalic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CMontserrat%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2Cregular%2Citalic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CPT+Serif%3Aregular%2Citalic%2C700%2C700italic%7COpen+Sans%3A300%2C300italic%2Cregular%2Citalic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic&amp;subset=latin%2Clatin-ext%2Cdevanagari%2Ccyrillic-ext%2Cvietnamese%2Ccyrillic%2Cgreek-ext%2Cgreek' type=text/css media=all>
    <link rel="stylesheet" href="<?=PROOT;?>css/custom.css" media="screen" title="no title" charset="utf-8">
    
    <?=View::content('head'); ?>
  </head>
  <body class="home page-template-default page page-id-2039 gdlr-core-body woocommerce-no-js akea-body akea-body-front akea-full  akea-with-sticky-navigation  akea-blockquote-style-1 gdlr-core-link-to-lightbox" data-home-url="<?=PROOT;?>home">
    <?php include 'main_menu.php' ?>
    <!-- <div class="container-fluid" style="min-height:cal(100% - 125px);"> -->
      <?= Session::displayMsg(); ?>
      <?= View::content('body'); ?>
      
    <!-- </div> -->
    
    <script src="<?=PROOT?>js/jQuery-2.2.4.min.js"></script>
    <script src="<?=PROOT?>js/bootstrap.min.js"></script>
    <!-- This are teh akea themes -->
    <script src='<?=PROOT;?>js/jquery/jquery.js'></script>
    <script src='<?=PROOT;?>js/jquery/jquery-migrate.min.js'></script>
    <script>
    var zilla_likes = {
        "ajaxurl": ""
    };
    </script>
    <script src='<?=PROOT;?>plugins/goodlayers-core/plugins/combine/script.js'></script>
    <script src='<?=PROOT;?>plugins/zilla-likes/scripts/zilla-likes.js'></script>
    <script>
    var gdlr_core_pbf = {
        "admin": "",
        "video": {
            "width": "640",
            "height": "360"
        },
        "ajax_url": "#"
    };
    </script>
    <script src='<?=PROOT;?>plugins/goodlayers-core/include/js/page-builder.js'></script>
    <script src='<?=PROOT;?>js/jquery/ui/effect.min.js'></script>
    <script src='<?=PROOT;?>js/script-core.js'></script>
  </body>
</html>
