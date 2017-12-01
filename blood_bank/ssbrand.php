<?php
@session_start();
if($_SESSION['admin']!='admin')
{
?>
<script type="text/javascript">
window.location='index.php';
</script>
<?php
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ADMIN PANEL | Powered by HARMEET</title>
<link rel="stylesheet" type="text/css" href="style.css" />
<script type="text/javascript" src="clockp.js"></script>
<script type="text/javascript" src="clockh.js"></script> 
<script type="text/javascript" src="jquery.min.js"></script>
<script type="text/javascript" src="ddaccordion.js"></script>
<script type="text/javascript">
ddaccordion.init({
	headerclass: "submenuheader", //Shared CSS class name of headers group
	contentclass: "submenu", //Shared CSS class name of contents group
	revealtype: "click", //Reveal content when user clicks or onmouseover the header? Valid value: "click", "clickgo", or "mouseover"
	mouseoverdelay: 200, //if revealtype="mouseover", set delay in milliseconds before header expands onMouseover
	collapseprev: true, //Collapse previous content (so only one open at any time)? true/false 
	defaultexpanded: [], //index of content(s) open by default [index1, index2, etc] [] denotes no content
	onemustopen: false, //Specify whether at least one header should be open always (so never all headers closed)
	animatedefault: false, //Should contents open by default be animated into view?
	persiststate: true, //persist state of opened contents within browser session?
	toggleclass: ["", ""], //Two CSS classes to be applied to the header when it's collapsed and expanded, respectively ["class1", "class2"]
	togglehtml: ["suffix", "<img src='images/plus.gif' class='statusicon' />", "<img src='images/minus.gif' class='statusicon' />"], //Additional HTML added to the header when it's collapsed and expanded, respectively  ["position", "html1", "html2"] (see docs)
	animatespeed: "fast", //speed of animation: integer in milliseconds (ie: 200), or keywords "fast", "normal", or "slow"
	oninit:function(headers, expandedindices){ //custom code to run when headers have initalized
		//do nothing
	},
	onopenclose:function(header, index, state, isuseractivated){ //custom code to run whenever a header is opened or closed
		//do nothing
	}
})
</script>

<script type="text/javascript" src="jconfirmaction.jquery.js"></script>
<script type="text/javascript">
	
	$(document).ready(function() {
		$('.ask').jConfirmAction();
	});
	
</script>
<script>
function ab(str)
{
/*if (str.length==0)
  {
  document.getElementById("t").innerHTML="";
  return;
  }*/
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("txtHint").innerHTML=xmlhttp.responseText;
    }
  }

}
</script>

<script language="javascript" type="text/javascript" src="niceforms.js"></script>
<link rel="stylesheet" type="text/css" media="all" href="niceforms-default.css" />
<style type="text/css">
<!--
.style2 {font-size: 18px; font-weight: bold; color: #FFFFFF; }
.style3 {color: #660066}
-->
</style>
</head>
<body>
<div id="main_container">

	<div class="header">
    <div class="logo">
      <div align="center" style="color:white; font-size:1rem" ><a href="#"><img src="img/img1.png" alt="image" width="100" height="100" border="0" title="" /></a><br/>
          <strong><big>Blood Bank</big></strong></div>
    </div>
    
    <div class="right_header">Welcome <?php echo $_SESSION['admin'];?> | <a href="logout.php" class="logout">Logout</a></div>
    <div id="clock_a"></div>
    </div>
    <br/><br/><br/><br/>
    <div class="main_content">
    
                    <?php
					include('mainmenu.php');
					?>  
                    
                    
                    
                    
    <div class="center_content">  
    
    
    
    <div class="left_content">
    
    		<?php
    		include('sidebar.php');
            
        ?>    
            
    </div>  
    
    <div class="right_content">
      <form id="form1" name="form1" method="post" action="">
        <table width="481" height="79" border="0" bgcolor="#660066">
          <tr>
            <td height="28" colspan="2" bgcolor="#FFFFFF"><div align="center" class="style2 style3">Search</div></td>
            </tr>
          <tr>
            <td width="186"><strong class="style2">Select Blood Group</strong></td>
            <td width="285"><label>
            <select name="selectblood" id="selectblood" onchange="ab(this.value)">
            <option value="0">--select--</option>
          <?php
		  include('conn.php');
		  $a=mysqli_query($conn,"select Code,bloodType from bloodtype");
		  while($r=mysqli_fetch_array($a))
		  {
		  ?>
          <option value="<?php echo $r[0]; ?>"> <?php echo $r[1];?> </option>
        <?php 
		  }
          ?>
            </select>
            </label></td>
          </tr>
          

          <tr>
            <td width="186"><strong class="style2">Select City</strong></td>
            <td width="285"><label>
            <select name="selectcity" id="selectcity" onchange="ab(this.value)">
            <option value="0">--select--</option>
          <?php
      include('conn.php');
      $b=mysqli_query($conn,"select address from st_donar");
      while($r1=mysqli_fetch_array($b))
      {
      ?>
          <option> <?php echo $r1[0];?> </option>
        <?php 
      }
          ?>
            </select>
            </label></td>
          </tr>
        </table>
        </form>
        </label>
<p> <span id="txtHint"></span></p>
    </div>
    </div><!-- end of right content-->
            
                    
  </div>   <!--end of center content -->               
   
<?php

$a=$_POST['selectblood'];
$b=$_POST['selectcity'];
include('conn.php');

//$b=mysqli_query($conn,"select * from bloodtype where bloodType='$a'");
// $b1=mysqli_fetch_row($b);
// $b2= $b1[1];
// echo $b2;
// $e=mysqli_num_rows($b);
// if($e<1)
// {
//  print"<h1 align='center'> No records found</h1>";
// }
// else
// {
?>
<table width="600"  border="1" align="center" bgcolor="#660066">
<tr bgcolor="#FFFFFF">
<th><span class="style14">Donar Id</span></th>

<th><span class="style14">Name</span></th>
<th><span class="style14">Age</span></th>
<th><span class="style14">Gender</span></th>
<th><span class="style14">Address</span></th>
<th><span class="style14">Phone</span></th>
<th><span class="style14">Blood Group</span></th>


</tr>
<?php
// while($r=mysqli_fetch_array($b))
// {
$b11=mysqli_query($conn,
  "select d.did,d.name,d.age,d.gender,d.address,d.phone, b.code,b.bloodType,b.cost from st_donar d join bloodtype b ON d.bgtype = b.code where b.bloodtype = '$a' & d.address='$b'");


while($b12=mysqli_fetch_row($b11))
{


?>
<tr>
<td align="center" height="25"><span class="style4"><?php echo $b12[0];?></span></td>

<td align="center" height="25"><span class="style4"><?php echo $b12[1];?></span></td>
<td align="center" height="25"><span class="style4"><?php echo $b12[2];?></span></td>
<td align="center" height="25"><span class="style4"><?php echo $b12[3];?></span></td>
<td align="center" height="25"><span class="style4"><?php echo $b12[4];?></span></td>
<td align="center" height="25"><span class="style4"><?php echo $b12[5];?></span></td>
<td align="center" height="25"><span class="style4"><?php echo $b12[7];?></span></td>

</tr>
<?php
}
?>

<!-- <tr>
<font style="font-size:18px; text-align:justify"><b> Donars availabe for your searched blood group are:<?php echo $e;?></b></font><br/><br/>
</tr> -->
</table>
    </div>
    <!-- end of right content-->
            
                    
  </div>   <!--end of center content -->               
                    
                    
    
    
    <div class="clear"></div>
    </div> <!--end of main content-->
  
    
    <div class="footer">
    
      <div class="left_footer">Powered by Unfired</div>
      <div class="right_footer"></div>
    
    </div>

</div>  

</body>
</html>
