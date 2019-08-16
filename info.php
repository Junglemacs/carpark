<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php
			include('inc/head.php');
			include('inc/connect.php');
	?>
<style>
.popup {
	position:relative;
	display:inline-block;
	cursor:pointer;
	-webkit-user-select:none;
	-moz-user-select:none;
	-ms-user-select:none;
	user_select:none;
}
.popup .popuptext {
	visibility:hidden;
	width:400px;
	background-color:#555;
	color:#fff;
	text-align:center;
	border-radius:6px;
	padding: 8px 0;
	z-index:1;
	bottom:125%;
	left:50%;
	margin_left: -80px;
}
.popup .popuptext::after {
	content: "";
	position:absolute;
	top:100%;
	left:50%;
	margin-left:-5px;
	border-width:5px;
	border-style:solid;
	border-color#555;
	transparent transparent transparent;
}
.popup .show {
	Visibility: visible;
	-webkit-animation: fadeIn 1s;
	animation: fadeIn 1s;
}
@-webkit-keyframes fadeIn{
	from {opacity:0;}
	to {opacity:1;}
}
@keyframes fadeIn{
	from {opacity:0;}
	to {opacity:1;}
}
</style>
</head>
<body style="text-align:center">
<section id="container">
	<?php
			include('inc/header.php');
						
	?>
<h2>N/B</h2>
<div class="popup" onclick="myFunction()">Click me to toggle the popup!
<span class="popuptext" id="mypopup">A Simple Popup!</span>
</div>
</section>
<script>
function myFunction() {
	var popup = document.getElementById("mypopup");
	popup.classList.toggle("show");
}
</script>
<?php
			include('inc/footer.php');
	?>
</body>
</html>