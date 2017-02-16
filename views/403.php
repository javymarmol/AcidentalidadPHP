<?php
/**
 * Created by PhpStorm.
 * User: hmarm
 * Date: 7/02/2017
 * Time: 10:37 AM
 */

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content=""/>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1"/>
    <meta name="msapplication-tap-highlight" content="no">

    <meta name="mobile-web-app-capable" content="yes">
    <meta name="application-name" content="Milestone">

    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="Milestone">

    <meta name="theme-color" content="#4C7FF0">

    <title>Gestión de Accidentes</title>

    <!-- page stylesheets -->
    <!-- end page stylesheets -->

    <!-- build:css({.tmp,app}) styles/app.min.css -->
    <link rel="stylesheet" href="<?php echo ROOT ?>/css/bootstrap.css"/>
    <link rel="stylesheet" href="<?php echo ROOT ?>/css/pace-theme-minimal.css"/>
    <link rel="stylesheet" href="<?php echo ROOT ?>/css/font-awesome.css"/>
    <link rel="stylesheet" href="<?php echo ROOT ?>/css/animate.css"/>
    <link rel="stylesheet" href="<?php echo ROOT ?>/css/app.css" id="load_styles_before"/>
    <link rel="stylesheet" href="<?php echo ROOT ?>/css/app.skins.css"/>
    <!-- endbuild -->
</head>
<body>

<div class="app error-page no-padding no-footer layout-static">
    <div class="session-panel">
        <div class="session bg-success">
            <div class="session-content text-xs-center">
                <div>
                    <div class="error-number">
                        <strong>403</strong>
                    </div>
                    <div class="m-x-1 m-y-1">
                        <h6 class="text-uppercase">
                            <strong>Opps! Algo ha pasado</strong>
                        </h6>
                        <p>Hay un problema con la pagina que deseas ver.</p>
                    </div>
                    <a href="<?php echo ROOT ?>" class="btn btn-secondary btn-sm b-a-0">
                        Regresa a la pagina de inicio
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    window.paceOptions = {
        document: true,
        eventLag: true,
        restartOnPushState: true,
        restartOnRequestAfter: true,
        ajax: {
            trackMethods: [ 'POST','GET']
        }
    };
</script>

<!-- build:js({.tmp,app}) scripts/app.min.js -->
<script src="<?php echo ROOT ?>/js/jquery.js"></script>
<script src="<?php echo ROOT ?>/js/pace.js"></script>
<script src="<?php echo ROOT ?>/js/tether.js"></script>
<script src="<?php echo ROOT ?>/js/bootstrap.js"></script>
<script src="<?php echo ROOT ?>/js/fastclick.js"></script>
<script src="<?php echo ROOT ?>/js/constants.js"></script>
<script src="<?php echo ROOT ?>/js/main.js"></script>
<!-- endbuild -->

<!-- page scripts -->
<!-- end page scripts -->

<!-- initialize page scripts -->
<!-- end initialize page scripts -->

</body>
</html>

