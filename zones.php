<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Parking Zones</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
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

	<?php
			include('inc/head.php');
			include('inc/connect.php');
	?>
</head>
<body>
	<section id="container">
	<?php
			include('inc/header.php');
						
	?>
	
	<section id="content">
	<img src="src/bg.png" style="position:absolute; z-index:-1; margin:0;"/>
	<p class="phead">Parking Lots Status</p>
	<div class="popup" onclick="myFunction()">Click here to get more information on the types of parking!</br></br>
<span class="popuptext" id="mypopup">SHORT-TERM PARKING=>This is a parking type where vehicles can only park for less than 6 hours</br></br>
LONG-TERM PARKING=>This is a parking type where vehicles can park for more than 6 hours</br></br>
N/B: If you exceed the set duration of time, you will be required to pay an additional fee of Ksh 200
</span>
</div>
	<h1 class="phead">SHORT-TERM PARKING</h1>
	<div class="strt">
	<p>CITY HALL STREET</p>
	<table class="gridtable">
<?php $street ="CITY HALL"; ?>
<tr>
	<td <?php 
	$sql="SELECT * FROM zones WHERE street='$street' and plot='PL 001' and status='RESERVED'";
	$result=mysqli_query($conn,$sql);
	$count=mysqli_num_rows($result);
	if($count==1){	
	echo "style=\"background: red;\"";}
	?>>PL 001</td>
	<td <?php 
	$sql="SELECT * FROM zones WHERE street='$street' and plot='PL 010' and status='RESERVED'";
	$result=mysqli_query($conn,$sql);
	$count=mysqli_num_rows($result);
	if($count==1){	
	echo "style=\"background: red;\"";}
	?>>PL 010</td>
</tr>
<tr>
	<td
	<?php 
	$sql="SELECT * FROM zones WHERE street='$street' and plot='PL 002' and status='RESERVED'";
	$result=mysqli_query($conn,$sql);
	$count=mysqli_num_rows($result);
	if($count==1){	
	echo "style=\"background: red;\"";}
	?>>PL 002</td><td <?php 
	$sql="SELECT * FROM zones WHERE street='$street' and plot='PL 011' and status='RESERVED'";
	$result=mysqli_query($conn,$sql);
	$count=mysqli_num_rows($result);
	if($count==1){	
	echo "style=\"background: red;\"";}
	?>>PL 011</td>
</tr>
<tr>
	<td <?php 
	$sql="SELECT * FROM zones WHERE street='$street' and plot='PL 003' and status='RESERVED'";
	$result=mysqli_query($conn,$sql);
	$count=mysqli_num_rows($result);
	if($count==1){	
	echo "style=\"background: red;\"";}
	?>>PL 003</td><td <?php 
	$sql="SELECT * FROM zones WHERE street='$street' and plot='PL 012' and status='RESERVED'";
	$result=mysqli_query($conn,$sql);
	$count=mysqli_num_rows($result);
	if($count==1){	
	echo "style=\"background: red;\"";}
	?>>PL 012</td>
</tr>
<tr>
	<td <?php 
	$sql="SELECT * FROM zones WHERE street='$street' and plot='PL 004' and status='RESERVED'";
	$result=mysqli_query($conn,$sql);
	$count=mysqli_num_rows($result);
	if($count==1){	
	echo "style=\"background: red;\"";}
	?>>PL 004</td><td <?php 
	$sql="SELECT * FROM zones WHERE street='$street' and plot='PL 013' and status='RESERVED'";
	$result=mysqli_query($conn,$sql);
	$count=mysqli_num_rows($result);
	if($count==1){	
	echo "style=\"background: red;\"";}
	?>>PL 013</td>
</tr>
<tr>
	<td
	<?php 
	$sql="SELECT * FROM zones WHERE street='$street' and plot='PL 005' and status='RESERVED'";
	$result=mysqli_query($conn,$sql);
	$count=mysqli_num_rows($result);
	if($count==1){	
	echo "style=\"background: red;\"";}
	?>>PL 005</td><td <?php 
	$sql="SELECT * FROM zones WHERE street='$street' and plot='PL 014' and status='RESERVED'";
	$result=mysqli_query($conn,$sql);
	$count=mysqli_num_rows($result);
	if($count==1){	
	echo "style=\"background: red;\"";}
	?>>PL 014</td>
</tr>
<tr>
	<td <?php 
	$sql="SELECT * FROM zones WHERE street='$street' and plot='PL 006' and status='RESERVED'";
	$result=mysqli_query($conn,$sql);
	$count=mysqli_num_rows($result);
	if($count==1){	
	echo "style=\"background: red;\"";}
	?>>PL 006</td><td <?php 
	$sql="SELECT * FROM zones WHERE street='$street' and plot='PL 015' and status='RESERVED'";
	$result=mysqli_query($conn,$sql);
	$count=mysqli_num_rows($result);
	if($count==1){	
	echo "style=\"background: red;\"";}
	?>>PL 015</td>
</tr>
<tr>
	<td
	<?php 
	$sql="SELECT * FROM zones WHERE street='$street' and plot='PL 007' and status='RESERVED'";
	$result=mysqli_query($conn,$sql);
	$count=mysqli_num_rows($result);
	if($count==1){	
	echo "style=\"background: red;\"";}
	?>>PL 007</td
	<?php 
	$sql="SELECT * FROM zones WHERE street='$street' and plot='PL 016' and status='RESERVED'";
	$result=mysqli_query($conn,$sql);
	$count=mysqli_num_rows($result);
	if($count==1){	
	echo "style=\"background: red;\"";}
	?>><td>PL 016</td>
</tr>
<tr>
	<td <?php 
	$sql="SELECT * FROM zones WHERE street='$street' and plot='PL 008' and status='RESERVED'";
	$result=mysqli_query($conn,$sql);
	$count=mysqli_num_rows($result);
	if($count==1){	
	echo "style=\"background: red;\"";}
	?>>PL 008</td><td <?php 
	$sql="SELECT * FROM zones WHERE street='$street' and plot='PL 017' and status='RESERVED'";
	$result=mysqli_query($conn,$sql);
	$count=mysqli_num_rows($result);
	if($count==1){	
	echo "style=\"background: red;\"";}
	?>>PL 017</td>
</tr>
<tr>
	<td <?php 
	$sql="SELECT * FROM zones WHERE street='$street' and plot='PL 009' and status='RESERVED'";
	$result=mysqli_query($conn,$sql);
	$count=mysqli_num_rows($result);
	if($count==1){	
	echo "style=\"background: red;\"";}
	?>>PL 009</td><td
	<?php 
	$sql="SELECT * FROM zones WHERE street='$street' and plot='PL 018' and status='RESERVED'";
	$result=mysqli_query($conn,$sql);
	$count=mysqli_num_rows($result);
	if($count==1){	
	echo "style=\"background: red;\"";}
	?>>PL 018</td>
</tr>
</table>
	
	</div>
	
	
	<div class="strt">
	<p>KIJABE STREET</p>
	<table class="gridtable">
<?php $street ="KIJABE STREET"; ?>
<tr>
	<td <?php 
	$sql="SELECT * FROM zones WHERE street='$street' and plot='PL 001' and status='RESERVED'";
	$result=mysqli_query($conn,$sql);
	$count=mysqli_num_rows($result);
	if($count==1){	
	echo "style=\"background: red;\"";}
	?>>PL 001</td>
	<td <?php 
	$sql="SELECT * FROM zones WHERE street='$street' and plot='PL 010' and status='RESERVED'";
	$result=mysqli_query($conn,$sql);
	$count=mysqli_num_rows($result);
	if($count==1){	
	echo "style=\"background: red;\"";}
	?>>PL 010</td>
</tr>
<tr>
	<td
	<?php 
	$sql="SELECT * FROM zones WHERE street='$street' and plot='PL 002' and status='RESERVED'";
	$result=mysqli_query($conn,$sql);
	$count=mysqli_num_rows($result);
	if($count==1){	
	echo "style=\"background: red;\"";}
	?>>PL 002</td><td <?php 
	$sql="SELECT * FROM zones WHERE street='$street' and plot='PL 011' and status='RESERVED'";
	$result=mysqli_query($conn,$sql);
	$count=mysqli_num_rows($result);
	if($count==1){	
	echo "style=\"background: red;\"";}
	?>>PL 011</td>
</tr>
<tr>
	<td <?php 
	$sql="SELECT * FROM zones WHERE street='$street' and plot='PL 003' and status='RESERVED'";
	$result=mysqli_query($conn,$sql);
	$count=mysqli_num_rows($result);
	if($count==1){	
	echo "style=\"background: red;\"";}
	?>>PL 003</td><td <?php 
	$sql="SELECT * FROM zones WHERE street='$street' and plot='PL 012' and status='RESERVED'";
	$result=mysqli_query($conn,$sql);
	$count=mysqli_num_rows($result);
	if($count==1){	
	echo "style=\"background: red;\"";}
	?>>PL 012</td>
</tr>
<tr>
	<td <?php 
	$sql="SELECT * FROM zones WHERE street='$street' and plot='PL 004' and status='RESERVED'";
	$result=mysqli_query($conn,$sql);
	$count=mysqli_num_rows($result);
	if($count==1){	
	echo "style=\"background: red;\"";}
	?>>PL 004</td><td <?php 
	$sql="SELECT * FROM zones WHERE street='$street' and plot='PL 013' and status='RESERVED'";
	$result=mysqli_query($conn,$sql);
	$count=mysqli_num_rows($result);
	if($count==1){	
	echo "style=\"background: red;\"";}
	?>>PL 013</td>
</tr>
<tr>
	<td
	<?php 
	$sql="SELECT * FROM zones WHERE street='$street' and plot='PL 005' and status='RESERVED'";
	$result=mysqli_query($conn,$sql);
	$count=mysqli_num_rows($result);
	if($count==1){	
	echo "style=\"background: red;\"";}
	?>>PL 005</td><td <?php 
	$sql="SELECT * FROM zones WHERE street='$street' and plot='PL 014' and status='RESERVED'";
	$result=mysqli_query($conn,$sql);
	$count=mysqli_num_rows($result);
	if($count==1){	
	echo "style=\"background: red;\"";}
	?>>PL 014</td>
</tr>
<tr>
	<td <?php 
	$sql="SELECT * FROM zones WHERE street='$street' and plot='PL 006' and status='RESERVED'";
	$result=mysqli_query($conn,$sql);
	$count=mysqli_num_rows($result);
	if($count==1){	
	echo "style=\"background: red;\"";}
	?>>PL 006</td><td <?php 
	$sql="SELECT * FROM zones WHERE street='$street' and plot='PL 015' and status='RESERVED'";
	$result=mysqli_query($conn,$sql);
	$count=mysqli_num_rows($result);
	if($count==1){	
	echo "style=\"background: red;\"";}
	?>>PL 015</td>
</tr>
<tr>
	<td
	<?php 
	$sql="SELECT * FROM zones WHERE street='$street' and plot='PL 007' and status='RESERVED'";
	$result=mysqli_query($conn,$sql);
	$count=mysqli_num_rows($result);
	if($count==1){	
	echo "style=\"background: red;\"";}
	?>>PL 007</td
	<?php 
	$sql="SELECT * FROM zones WHERE street='$street' and plot='PL 016' and status='RESERVED'";
	$result=mysqli_query($conn,$sql);
	$count=mysqli_num_rows($result);
	if($count==1){	
	echo "style=\"background: red;\"";}
	?>><td>PL 016</td>
</tr>
<tr>
	<td <?php 
	$sql="SELECT * FROM zones WHERE street='$street' and plot='PL 008' and status='RESERVED'";
	$result=mysqli_query($conn,$sql);
	$count=mysqli_num_rows($result);
	if($count==1){	
	echo "style=\"background: red;\"";}
	?>>PL 008</td><td <?php 
	$sql="SELECT * FROM zones WHERE street='$street' and plot='PL 017' and status='RESERVED'";
	$result=mysqli_query($conn,$sql);
	$count=mysqli_num_rows($result);
	if($count==1){	
	echo "style=\"background: red;\"";}
	?>>PL 017</td>
</tr>
<tr>
	<td <?php 
	$sql="SELECT * FROM zones WHERE street='$street' and plot='PL 009' and status='RESERVED'";
	$result=mysqli_query($conn,$sql);
	$count=mysqli_num_rows($result);
	if($count==1){	
	echo "style=\"background: red;\"";}
	?>>PL 009</td><td
	<?php 
	$sql="SELECT * FROM zones WHERE street='$street' and plot='PL 018' and status='RESERVED'";
	$result=mysqli_query($conn,$sql);
	$count=mysqli_num_rows($result);
	if($count==1){	
	echo "style=\"background: red;\"";}
	?>>PL 018</td>
</tr>
</table>
	
	</div>
	<h1 class="phead">LONG-TERM PARKING</h1>
	<div class="strt">
	<p>ENGEN STREET</p>
	<table class="gridtable">
<?php $street ="ENGEN STREET"; ?>
<tr>
	<td <?php 
	$sql="SELECT * FROM zones WHERE street='$street' and plot='PL 001' and status='RESERVED'";
	$result=mysqli_query($conn,$sql);
	$count=mysqli_num_rows($result);
	if($count==1){	
	echo "style=\"background: red;\"";}
	?>>PL 001</td>
	<td <?php 
	$sql="SELECT * FROM zones WHERE street='$street' and plot='PL 010' and status='RESERVED'";
	$result=mysqli_query($conn,$sql);
	$count=mysqli_num_rows($result);
	if($count==1){	
	echo "style=\"background: red;\"";}
	?>>PL 010</td>
</tr>
<tr>
	<td
	<?php 
	$sql="SELECT * FROM zones WHERE street='$street' and plot='PL 002' and status='RESERVED'";
	$result=mysqli_query($conn,$sql);
	$count=mysqli_num_rows($result);
	if($count==1){	
	echo "style=\"background: red;\"";}
	?>>PL 002</td><td <?php 
	$sql="SELECT * FROM zones WHERE street='$street' and plot='PL 011' and status='RESERVED'";
	$result=mysqli_query($conn,$sql);
	$count=mysqli_num_rows($result);
	if($count==1){	
	echo "style=\"background: red;\"";}
	?>>PL 011</td>
</tr>
<tr>
	<td <?php 
	$sql="SELECT * FROM zones WHERE street='$street' and plot='PL 003' and status='RESERVED'";
	$result=mysqli_query($conn,$sql);
	$count=mysqli_num_rows($result);
	if($count==1){	
	echo "style=\"background: red;\"";}
	?>>PL 003</td><td <?php 
	$sql="SELECT * FROM zones WHERE street='$street' and plot='PL 012' and status='RESERVED'";
	$result=mysqli_query($conn,$sql);
	$count=mysqli_num_rows($result);
	if($count==1){	
	echo "style=\"background: red;\"";}
	?>>PL 012</td>
</tr>
<tr>
	<td <?php 
	$sql="SELECT * FROM zones WHERE street='$street' and plot='PL 004' and status='RESERVED'";
	$result=mysqli_query($conn,$sql);
	$count=mysqli_num_rows($result);
	if($count==1){	
	echo "style=\"background: red;\"";}
	?>>PL 004</td><td <?php 
	$sql="SELECT * FROM zones WHERE street='$street' and plot='PL 013' and status='RESERVED'";
	$result=mysqli_query($conn,$sql);
	$count=mysqli_num_rows($result);
	if($count==1){	
	echo "style=\"background: red;\"";}
	?>>PL 013</td>
</tr>
<tr>
	<td
	<?php 
	$sql="SELECT * FROM zones WHERE street='$street' and plot='PL 005' and status='RESERVED'";
	$result=mysqli_query($conn,$sql);
	$count=mysqli_num_rows($result);
	if($count==1){	
	echo "style=\"background: red;\"";}
	?>>PL 005</td><td <?php 
	$sql="SELECT * FROM zones WHERE street='$street' and plot='PL 014' and status='RESERVED'";
	$result=mysqli_query($conn,$sql);
	$count=mysqli_num_rows($result);
	if($count==1){	
	echo "style=\"background: red;\"";}
	?>>PL 014</td>
</tr>
<tr>
	<td <?php 
	$sql="SELECT * FROM zones WHERE street='$street' and plot='PL 006' and status='RESERVED'";
	$result=mysqli_query($conn,$sql);
	$count=mysqli_num_rows($result);
	if($count==1){	
	echo "style=\"background: red;\"";}
	?>>PL 006</td><td <?php 
	$sql="SELECT * FROM zones WHERE street='$street' and plot='PL 015' and status='RESERVED'";
	$result=mysqli_query($conn,$sql);
	$count=mysqli_num_rows($result);
	if($count==1){	
	echo "style=\"background: red;\"";}
	?>>PL 015</td>
</tr>
<tr>
	<td
	<?php 
	$sql="SELECT * FROM zones WHERE street='$street' and plot='PL 007' and status='RESERVED'";
	$result=mysqli_query($conn,$sql);
	$count=mysqli_num_rows($result);
	if($count==1){	
	echo "style=\"background: red;\"";}
	?>>PL 007</td
	<?php 
	$sql="SELECT * FROM zones WHERE street='$street' and plot='PL 016' and status='RESERVED'";
	$result=mysqli_query($conn,$sql);
	$count=mysqli_num_rows($result);
	if($count==1){	
	echo "style=\"background: red;\"";}
	?>><td>PL 016</td>
</tr>
<tr>
	<td <?php 
	$sql="SELECT * FROM zones WHERE street='$street' and plot='PL 008' and status='RESERVED'";
	$result=mysqli_query($conn,$sql);
	$count=mysqli_num_rows($result);
	if($count==1){	
	echo "style=\"background: red;\"";}
	?>>PL 008</td><td <?php 
	$sql="SELECT * FROM zones WHERE street='$street' and plot='PL 017' and status='RESERVED'";
	$result=mysqli_query($conn,$sql);
	$count=mysqli_num_rows($result);
	if($count==1){	
	echo "style=\"background: red;\"";}
	?>>PL 017</td>
</tr>
<tr>
	<td <?php 
	$sql="SELECT * FROM zones WHERE street='$street' and plot='PL 009' and status='RESERVED'";
	$result=mysqli_query($conn,$sql);
	$count=mysqli_num_rows($result);
	if($count==1){	
	echo "style=\"background: red;\"";}
	?>>PL 009</td><td
	<?php 
	$sql="SELECT * FROM zones WHERE street='$street' and plot='PL 018' and status='RESERVED'";
	$result=mysqli_query($conn,$sql);
	$count=mysqli_num_rows($result);
	if($count==1){	
	echo "style=\"background: red;\"";}
	?>>PL 018</td>
</tr>
</table>
	
	</div>
	<div class="strt">
	<p>MAMA NGINA STREET</p>
	<table class="gridtable">
<?php $street ="MAMA NGINA STREET"; ?>
<tr>
	<td <?php 
	$sql="SELECT * FROM zones WHERE street='$street' and plot='PL 001' and status='RESERVED'";
	$result=mysqli_query($conn,$sql);
	$count=mysqli_num_rows($result);
	if($count==1){	
	echo "style=\"background: red;\"";}
	?>>PL 001</td>
	<td <?php 
	$sql="SELECT * FROM zones WHERE street='$street' and plot='PL 010' and status='RESERVED'";
	$result=mysqli_query($conn,$sql);
	$count=mysqli_num_rows($result);
	if($count==1){	
	echo "style=\"background: red;\"";}
	?>>PL 010</td>
</tr>
<tr>
	<td
	<?php 
	$sql="SELECT * FROM zones WHERE street='$street' and plot='PL 002' and status='RESERVED'";
	$result=mysqli_query($conn,$sql);
	$count=mysqli_num_rows($result);
	if($count==1){	
	echo "style=\"background: red;\"";}
	?>>PL 002</td><td <?php 
	$sql="SELECT * FROM zones WHERE street='$street' and plot='PL 011' and status='RESERVED'";
	$result=mysqli_query($conn,$sql);
	$count=mysqli_num_rows($result);
	if($count==1){	
	echo "style=\"background: red;\"";}
	?>>PL 011</td>
</tr>
<tr>
	<td <?php 
	$sql="SELECT * FROM zones WHERE street='$street' and plot='PL 003' and status='RESERVED'";
	$result=mysqli_query($conn,$sql);
	$count=mysqli_num_rows($result);
	if($count==1){	
	echo "style=\"background: red;\"";}
	?>>PL 003</td><td <?php 
	$sql="SELECT * FROM zones WHERE street='$street' and plot='PL 012' and status='RESERVED'";
	$result=mysqli_query($conn,$sql);
	$count=mysqli_num_rows($result);
	if($count==1){	
	echo "style=\"background: red;\"";}
	?>>PL 012</td>
</tr>
<tr>
	<td <?php 
	$sql="SELECT * FROM zones WHERE street='$street' and plot='PL 004' and status='RESERVED'";
	$result=mysqli_query($conn,$sql);
	$count=mysqli_num_rows($result);
	if($count==1){	
	echo "style=\"background: red;\"";}
	?>>PL 004</td><td <?php 
	$sql="SELECT * FROM zones WHERE street='$street' and plot='PL 013' and status='RESERVED'";
	$result=mysqli_query($conn,$sql);
	$count=mysqli_num_rows($result);
	if($count==1){	
	echo "style=\"background: red;\"";}
	?>>PL 013</td>
</tr>
<tr>
	<td
	<?php 
	$sql="SELECT * FROM zones WHERE street='$street' and plot='PL 005' and status='RESERVED'";
	$result=mysqli_query($conn,$sql);
	$count=mysqli_num_rows($result);
	if($count==1){	
	echo "style=\"background: red;\"";}
	?>>PL 005</td><td <?php 
	$sql="SELECT * FROM zones WHERE street='$street' and plot='PL 014' and status='RESERVED'";
	$result=mysqli_query($conn,$sql);
	$count=mysqli_num_rows($result);
	if($count==1){	
	echo "style=\"background: red;\"";}
	?>>PL 014</td>
</tr>
<tr>
	<td <?php 
	$sql="SELECT * FROM zones WHERE street='$street' and plot='PL 006' and status='RESERVED'";
	$result=mysqli_query($conn,$sql);
	$count=mysqli_num_rows($result);
	if($count==1){	
	echo "style=\"background: red;\"";}
	?>>PL 006</td><td <?php 
	$sql="SELECT * FROM zones WHERE street='$street' and plot='PL 015' and status='RESERVED'";
	$result=mysqli_query($conn,$sql);
	$count=mysqli_num_rows($result);
	if($count==1){	
	echo "style=\"background: red;\"";}
	?>>PL 015</td>
</tr>
<tr>
	<td
	<?php 
	$sql="SELECT * FROM zones WHERE street='$street' and plot='PL 007' and status='RESERVED'";
	$result=mysqli_query($conn,$sql);
	$count=mysqli_num_rows($result);
	if($count==1){	
	echo "style=\"background: red;\"";}
	?>>PL 007</td
	<?php 
	$sql="SELECT * FROM zones WHERE street='$street' and plot='PL 016' and status='RESERVED'";
	$result=mysqli_query($conn,$sql);
	$count=mysqli_num_rows($result);
	if($count==1){	
	echo "style=\"background: red;\"";}
	?>><td>PL 016</td>
</tr>
<tr>
	<td <?php 
	$sql="SELECT * FROM zones WHERE street='$street' and plot='PL 008' and status='RESERVED'";
	$result=mysqli_query($conn,$sql);
	$count=mysqli_num_rows($result);
	if($count==1){	
	echo "style=\"background: red;\"";}
	?>>PL 008</td><td <?php 
	$sql="SELECT * FROM zones WHERE street='$street' and plot='PL 017' and status='RESERVED'";
	$result=mysqli_query($conn,$sql);
	$count=mysqli_num_rows($result);
	if($count==1){	
	echo "style=\"background: red;\"";}
	?>>PL 017</td>
</tr>
<tr>
	<td <?php 
	$sql="SELECT * FROM zones WHERE street='$street' and plot='PL 009' and status='RESERVED'";
	$result=mysqli_query($conn,$sql);
	$count=mysqli_num_rows($result);
	if($count==1){	
	echo "style=\"background: red;\"";}
	?>>PL 009</td><td
	<?php 
	$sql="SELECT * FROM zones WHERE street='$street' and plot='PL 018' and status='RESERVED'";
	$result=mysqli_query($conn,$sql);
	$count=mysqli_num_rows($result);
	if($count==1){	
	echo "style=\"background: red;\"";}
	?>>PL 018</td>
</tr>
</table>
	
	</div>
	<p class="status">Red -> Reserved/Occupied , Yellow -> Available</p>
	
	
	</section>
	
	</section>
	<script>
function myFunction() {
	var popup = document.getElementById("mypopup");
	popup.classList.toggle("show");
}
</script>
	
</body><?php
			include('inc/footer.php');
	?>
</html>