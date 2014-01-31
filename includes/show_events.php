
<?php
session_start();
$login_user=$_SESSION['login_core'];
if(!isset($_SESSION['login_core']))
{
	header("location: index.php");
	exit();
}
//else echo "<center><h1>$login_user</h1></center>";
$selected_event=$_GET['selected_event'];

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Simple Javascript Accordions - by www.dezinerfolio.com</title>
<style type="text/css">
* {
	margin:0;
	padding:0;
	list-style:none;
}
body {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 16px;
	margin:10px;
}

#basic-accordian{
	border:5px solid #EEE;
	padding:5px;
	width:80%;
	position:absolute;
	left:20%;
	top:20%;
	margin-left:-175px;
	z-index:2;
	margin-top:-100px;
}

.accordion_headings{
	padding:5px;
	background:#99CC00;
	color:#FFFFFF;
	border:1px solid #FFF;
	cursor:pointer;
	font-weight:bold;
}

.accordion_headings:hover{
	background:#00CCFF;
}

.accordion_child{
	padding:15px;
	background:#EEE;
    height: 100%;
    position: relative;
}

.header_highlight{
	background:#00CCFF;
}

</style>
<script type="text/javascript" src="accordian.pack.js"></script>
</head>
<body onload="new Accordian('basic-accordian',5,'header_highlight');">


<div id="basic-accordian" ><!--Parent of the Accordion-->

<?
include("includes/cong.php"); 
$tab_result = mysqli_query($connect,"SELECT * FROM $selected_event ") or die("error");
echo "<div style='width:150px; float:left'>";
$count=0;
while ($user_tabs = mysqli_fetch_array($tab_result)) {
	echo "string";
$tab_name=$user_tabs['name'];
$tab_write=$user_tabs['writeup'];
echo "<div id='test$count-header' class='accordion_headings' >$tabname</div>";
}
echo "</div>";
?>

<div style="width:150px; float:left">
  <div id="test1-header" class="accordion_headings header_highlight" >Home</div>
  <div id="test2-header" class="accordion_headings" >About Us</div>
  <div id="test3-header" class="accordion_headings" >Download</div>
  <div id="test4-header" class="accordion_headings" >Download</div>
</div>

<div style="float:right; width:900px;">
  <div id="test1-content">
	<div class="accordion_child">
    	Welcome to the Homepage<br /><br />Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nunc sapien nibh, ultrices vitae, convallis eu, semper ut, leo. Cras nec pede.
    </div>
  </div>
  
  <div id="test2-content">
	<div class="accordion_child">
    	Here you will find more about us<br /><br />Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nunc sapien nibh, ultrices vitae, convallis eu, semper ut, leo. Cras nec pede.
    	Here you will find more about us<br /><br />Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nunc sapien nibh, ultrices vitae, convallis eu, semper ut, leo. Cras nec pede.
    </div>
  </div>
  
  <div id="test3-content">
	<div class="accordion_child">
    	and... this is the download section<br /><br />Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nunc sapien nibh, ultrices vitae, convallis eu, semper ut, leo. Cras nec pede.
    </div>
  </div>
  <div id="test4-content">
	<div class="accordion_child">
    	and... this is the download section<br /><br />Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nunc sapien nibh, ultrices vitae, convallis eu, semper ut, leo. Cras nec pede.
    </div>
  </div>
</div>







</div><!--End of accordion parent-->





</body>
</html>
