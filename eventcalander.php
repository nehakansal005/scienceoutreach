<?php include_once('upper.php'); ?>
<?php include_once('functions.php'); ?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<link type="text/css" rel="stylesheet" href="style.css"/>
<script src="jquery.min.js"></script>
</head>
<body>
<div class="container " style="height:600px; width: 1140px; background-color:white; border-radius: 7px; margin-top:15px;" id="calendar_div">
     
	<?php echo getCalender(); ?>

   
</div>
  
<?php include_once('bottom.php'); ?>

</body>
</html>
