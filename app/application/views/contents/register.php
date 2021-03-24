<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="icon" type="image/png" href="https://stlproyect.tk/images/IoT.PNG">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="A front-end template that helps you build fast, modern mobile web apps.">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>stLproyect</title>

  <!-- Add to homescreen for Chrome on Android -->
  <meta name="mobile-web-app-capable" content="yes">


  <!-- Add to homescreen for Safari on iOS -->
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black">
  <meta name="apple-mobile-web-app-title" content="Material Design Lite">


  <!-- Tile icon for Win8 (144x144 + tile color) -->
  <meta name="msapplication-TileImage" content="<?php echo base_url('images/touch/ms-touch-icon-144x144-precomposed.png')?>">
  <meta name="msapplication-TileColor" content="#3372DF">

  <!-- SEO: If your mobile URL is different from the desktop URL, add a canonical link to the desktop page https://developers.google.com/webmasters/smartphone-sites/feature-phones -->
  <!--
  <link rel="canonical" href="http://www.example.com/">
-->

<link href='https://fonts.googleapis.com/css?family=Roboto:400,500,300,100,700,900' rel='stylesheet'
type='text/css'>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet')?>">
<!-- inject:css -->
<link rel="stylesheet" href="<?php echo base_url('css/lib/getmdl-select.min.css')?>">
<link rel="stylesheet" href="<?php echo base_url('css/lib/nv.d3.min.css')?>">
<link rel="stylesheet" href="<?php echo base_url('css/application.min.css')?>">
<!-- endinject -->


</head>
<body>

  <div class="mdl-layout mdl-js-layout color--gray is-small-screen login">
    <main class="mdl-layout__content">
      <div class="mdl-card mdl-card__login mdl-shadow--2dp">
        <div class="mdl-card__supporting-text color--dark-gray">

          <form class="" action="<?php echo base_url('register/doregister')?>" method="post">


            <div class="mdl-grid">
              <div class="mdl-cell mdl-cell--12-col mdl-cell--4-col-phone">
                <span class="mdl-card__title-text text-color--smooth-gray">stLproyect</span>
              </div>
              <div class="mdl-cell mdl-cell--12-col mdl-cell--4-col-phone">
                <span class="login-name text-color--white">Registrarse</span>
              </div>
              <div class="mdl-cell mdl-cell--12-col mdl-cell--4-col-phone">
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label full-size">
                  <input class="mdl-textfield__input" type="text" id="name" name="name" value="<?php echo $name ?>">
                  <label class="mdl-textfield__label" for="name">Nombre</label>
                </div>
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label full-size">
                  <input class="mdl-textfield__input" type="text" id="e-mail" name="email" value="<?php echo $email ?>">
                  <label class="mdl-textfield__label" for="e-mail">Email</label>
                </div>
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label full-size">
                  <input class="mdl-textfield__input" type="password" id="password" name="password">
                  <label class="mdl-textfield__label" for="password">Contraseña</label>
                </div>
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label full-size">
                  <input class="mdl-textfield__input" type="password" id="password" name="retype">
                  <label class="mdl-textfield__label" for="password">Reescribe contraseña</label>
                </div>

                <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect checkbox--colored-light-blue checkbox--inline" for="checkbox-1">
                  <input type="checkbox" id="checkbox-1" class="mdl-checkbox__input" checked required>

                </label>
                <span class="login-link">Acepto las condiciones en <a href="#" class="underlined">términos del servicio</a></span>
              </div>
              <div class="mdl-cell mdl-cell--12-col mdl-cell--4-col-phone submit-cell">
                <a href="<?php echo base_url('login')?>" class="login-link">Ya estoy registrado!</a>
                <div class="mdl-layout-spacer"></div>

                  <button type="submit" class="mdl-button mdl-js-button mdl-button--raised color--light-blue">
                    REGISTRARME
                  </button>

              </div>

            </div>
          </form>
          <div class="" style="color:red">
            <?php echo $msg ?>
          </div>
        </div>
      </div>
    </main>
  </div>

  <!-- inject:js -->
  <script src="<?php echo base_url('js/d3.min.js')?>"></script>
  <script src="<?php echo base_url('js/getmdl-select.min.js')?>"></script>
  <script src="<?php echo base_url('js/material.min.js')?>"></script>
  <script src="<?php echo base_url('js/nv.d3.min.js')?>"></script>
  <script src="<?php echo base_url('js/layout/layout.min.js')?>"></script>
  <script src="<?php echo base_url('js/scroll/scroll.min.js')?>"></script>
  <script src="<?php echo base_url('js/widgets/charts/discreteBarChart.min.js')?>"></script>
  <script src="<?php echo base_url('js/widgets/charts/linePlusBarChart.min.js')?>"></script>
  <script src="<?php echo base_url('js/widgets/charts/stackedBarChart.min.js')?>"></script>
  <script src="<?php echo base_url('js/widgets/employer-form/employer-form.min.js')?>"></script>
  <script src="<?php echo base_url('js/widgets/line-chart/line-charts-nvd3.min.js')?>"></script>
  <script src="<?php echo base_url('js/widgets/map/maps.min.js')?>"></script>
  <script src="<?php echo base_url('js/widgets/pie-chart/pie-charts-nvd3.min.js')?>"></script>
  <script src="<?php echo base_url('js/widgets/table/table.min.js')?>"></script>
  <script src="<?php echo base_url('js/widgets/todo/todo.min.js')?>"></script>
  <!-- endinject -->

</body>
</html>
