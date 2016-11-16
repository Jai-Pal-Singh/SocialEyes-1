<?php 
session_start ();
if (! isset ( $_SESSION ['user'] )) {
	header ( 'Location: login.php' );
	exit ( 0 );
}
$root = "";
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Settings</title>
<link rel="stylesheet" href="css/normalize.css" />
<link rel="stylesheet" href="css/bootstrap.min.css" />
<link rel="stylesheet" href="css/settings.css" />
<link href="css/jquery-ui.min.css" rel="stylesheet">
</head>
<body>
	<div id="particles-js" style="position: fixed; height: 100%; width: 100%;"></div>
	<?php include "php/topNavBar.php";?>
	
	<div class="col-xs-8 col-xs-offset-1 col-sm-8 col-sm-offset-1 col-md-8 col-md-offset-1 col-lg-8 col-lg-offset-1" id="particles-js" style="height: 1000px;">
		
	</div>
	
	<div
		class="col-xs-2 col-xs-offset-1 col-sm-2 col-sm-offset-1 col-md-2 col-md-offset-1 col-lg-2 col-lg-offset-1">
		<div class="sidebar-nav-fixed pull-right affix">
				<?php include "php/chat.php"; ?>
			</div>
	</div>
	
	<script src="js/jquery.min.js"></script>
	<script src="js/jquery-ui.min.js"></script>
	<script type="text/javascript" src="js/main.js"></script>
	<script type="text/javascript" src="js/status.js"></script>
	<script type="text/javascript">var root="";var off=0;</script>
	<script type="text/javascript" src="js/particles.min.js"></script>
	<script src="js/app.js"></script>
	<script>
         $(function() {
            $( "#live-search-box" ).autocomplete({
               source: "<?php echo $root;?>php/liveSearch.php"
            });
         });
      </script>
</body>
</html>