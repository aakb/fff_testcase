<?php
 $widget = 'fff_widgets.leela/';
 $jquery_url = 'scripts/jquery-1.3.2.min.js';
?>

<!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<!--[if IE]><![endif]-->
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>--- A ---</title>
	<meta name="description" content="">
	<meta name="keywords" content="" />
	<meta name="author" content="">
	<meta name="viewport" content="width=device-width; initial-scale=1.0">
	<link rel="stylesheet" href="css/style.css?v=1">
	<script src="<?php echo $jquery_url; ?>"></script>
  
  <!-- FFF Widget Code - So far does nothing :-) -->
	<script type="text/javascript">

    var fffWidgetConfig = [];
    fffWidgetConfig.push({
      "widget" : "interactive",
      "target" : "#widget1",
      "style"  : "full",
    });

    (function() {
      var fff = document.createElement('script'); fff.type = 'text/javascript'; fff.async = true;
      fff.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + '<?php echo $widget ?>/fff.widget.js';
      var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(fff, s);
    })();
  
  </script>
  
  <style>
    body {
      background: green;
    }
    
    .container {
      width: 100%;
      margin: 0 auto;
    }
    
    #widget1 {
      width: 30%;
      border: 1px solid #fff;
    }
  </style>
</head>
<!-- !Body -->
<body>
	<div class="container">
		<header>
		</header><!-- /header -->
		
		<section class="content">
		
		</section><!-- /main -->
		  <p>Content before widget</p>
		  <div id="widget1"></div>
		  <p>Content after widget</p>
		<footer>
		
		</footer><!-- /footer -->
	</div><!--!/#container -->
	<!-- !Javascript - at the bottom for fast page loading -->

	
</body>
</html>