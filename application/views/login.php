<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>PNP v2</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="<?=base_url()?>/plugins/bootstrap/bootstrap.css" rel="stylesheet">
    <link href="<?=base_url()?>/plugins/jquery-ui/jquery-ui.min.css" rel="stylesheet">
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Righteous' rel='stylesheet' type='text/css'>
    <link href="<?=base_url()?>/plugins/fancybox/jquery.fancybox.css" rel="stylesheet">
    <link href="<?=base_url()?>/plugins/fullcalendar/fullcalendar.css" rel="stylesheet">
    <link href="<?=base_url()?>/plugins/xcharts/xcharts.min.css" rel="stylesheet">
    <link href="<?=base_url()?>/plugins/select2/select2.css" rel="stylesheet">
    <link href="<?=base_url()?>/plugins/justified-gallery/justifiedGallery.css" rel="stylesheet">
    <link href="<?=base_url()?>/css/style_v2.css" rel="stylesheet">
    <link href="<?=base_url()?>/plugins/chartist/chartist.min.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
        <script src="http://getbootstrap.com/docs-assets/js/html5shiv.js"></script>
        <script src="http://getbootstrap.com/docs-assets/js/respond.min.js"></script>
    <![endif]-->
  </head>
<body>

<div class="container-fluid">
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
  <div id="page-login" class="row">
    <div class="col-xs-12 col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
      <div class="box">
        <div class="box-content">
          <div class="text-center">
            <h3 class="page-header">PNP SMS System Login Page</h3>
          </div>
         <form method="POST" action="<?=site_url()?>/main/verify">

          <div class="form-group">
            <label class="control-label">Username</label>
            <input type="text" class="form-control" name="username" />
          </div>
          <div class="form-group">
            <label class="control-label">Password</label>
            <input type="password" class="form-control" name="password" />
          </div>
          <div class="text-center">
            <button type="submit"  class="btn btn-primary">Sign in</button>
          </div>
    <?php
       if ($error != "") {
 			 	echo " <div class='text-center'>";
        echo "    <p class='bg-danger'>$error</p>";
        echo "  </div>";
      }
   ?>

        
     </form>
        </div>
      </div>
    </div>
  </div>
</div>

<!--End Container-->
</body>
</html>
