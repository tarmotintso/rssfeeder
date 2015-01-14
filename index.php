<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title></title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/jquery-2.1.3" type="text/javascript"></script>
    <script src="js/myScript.js" type="text/javascript"></script>

</head>
<body>

<?php require_once "includes/functions.php"; ?>
<div class="table table-bordered">

    <ul class="modal-dialog">
        <a href="/rssfeeder"
           class="btn btn-default btn-md btn-block"><?php getFeedTitle("https://www.readability.com/rseero/latest/feed"); ?></a>
    </ul>
    <!--
    <div class="modal fade" id="basicModal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&amp;times;</button>
                <h4 class="modal-title" id="myModalLabel">Modal title</h4>
                </div>
                <div class="modal-body">
                    <h3>Modal Body</h3>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
      </div>
    </div> -->

    <div class="modal-dialog">
        <?php getFeed("https://www.readability.com/rseero/latest/feed"); ?>
    </div>

</body>
</html>