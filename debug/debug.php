<!DOCTYPE html>
<html>
<head>
<title>Test</title>
<link rel="stylesheet"  href="../css/themes/default/" />
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.js" type="text/javascript"></script>
<script src="../js" type="text/javascript"></script>
</head>

<body>
<div data-title="Test Dialog" id="salesWorkbenchDialog" data-add-back-btn="true" data-dom-cache="true">
<div data-role="content">
<div class="waitlistcontainer">
<h3>Wait List Detail</h3>
<?php echo date("F j, Y, g:i a s");  ?>
<form>
<input type="text">
<button id="saveWaiting" data-inline="true">Save</button>
<a href="#" data-role="button" data-rel="back" data-inline="true">Cancel</a>
</form>
</div>
</div>
</div>
</body>
</html>
