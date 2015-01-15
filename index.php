<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
 
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title></title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/jquery-2.1.3" type="text/javascript"></script>
    <script src="js/myScript.js" type="text/javascript"></script>
    <script src="js/jquery.lightbox_me" type="text/javascript"></script>
</head>
<body>

<?php require_once "includes/functions.php";?>

<div class="table table-bordered" id="myModal" tabindex="-1" role="dialog">
    <!-- get title from feed
	<ul class="modal-dialog">
	<a href="/rssfeeder" class="btn btn-default btn-md btn-block"><?php getFeedTitle("https://www.readability.com/rseero/latest/feed");?></a>
	</ul>
    -->
  <div class="modal-dialog">
		<div class="modal-dialog">
			<div class="modal-dialog"><a href="#" title="Image 1"><?php getFeed("https://www.readability.com/rseero/latest/feed");?></a></div>
		</div>   
  </div>
</div>

</body>
</html>