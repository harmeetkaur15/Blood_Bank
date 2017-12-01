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

<script language="javascript" type="text/javascript" src="niceforms.js"></script>
<link rel="stylesheet" type="text/css" media="all" href="niceforms-default.css" />
<style type="text/css">
<!--
.style8 {color: #FFFFFF; font-weight: bold; font-size: 24px; }
.style12 {color: #FFFFFF; font-weight: bold; font-size: large; }
.style13 {color: #660066}
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
	<?php
	$id=$_GET['id'];
	include('conn.php');
	$a=mysqli_query($conn,"select * from st_employee where eid=$id");
	while($r=mysqli_fetch_array($a))
	{
	$id1=$r[0];
	$id2=$r[1];
	$id3=$r[2];
	$id4=$r[3];
	}
	
	?>
	<form method="post" action="updateemployee.php" enctype="multipart/form-data">
	<table width="500" border="1" align="center" bgcolor="#660066">
	<input type="hidden" name="eid" value="<?php echo $id1 ;?>"/>
	<tr bgcolor="#FFFFFF">
	  <td colspan="3" class="style8"><div align="center" class="style13">Edit Employee</div></td>
	  </tr>
	<tr>
	<td width="118" class="style12">
	Name	</td>
	<td width="218"><input name="name" type="text"  value="<?php echo $id2;?>"/>
	</td>
	</tr>
	<tr>
	<td width="118" class="style12">
	Address	</td>
	<td width="218"><input name="address" type="text"  value="<?php echo $id3;?>"/>
	</td>
	</tr>
	<td width="118" class="style12">
	Phone	</td>
	<td width="218"><input name="phone" type="text"  value="<?php echo $id4;?>"/>
	</td>
	
	</tr>
	
	<tr>
	<td colspan="3">
	  <div align="center"><strong>
	    <input  type="submit" name="s" value="submit"/>
	      </strong></div></td>
	</tr>
	</table>
	</form>
	</div>
    
	
    <!-- end of right content-->
            
                    
  </div>   <!--end of center content -->               
                    
                    
    
    
    <div class="clear"></div>
    </div> <!--end of main content-->
	
    
    <div class="footer">
    
    	<div class="left_footer"> Powered by Unfired</div>
    	<div class="right_footer"></div>
    
    </div>

</div>	

</body>
</html>
