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
    <title>Blood Bank</title>
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

</script>

<script language="javascript" type="text/javascript" src="niceforms.js"></script>
<link rel="stylesheet" type="text/css" media="all" href="niceforms-default.css" />
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
              <h1><strong>            
                
                WELCOME ADMIN     </strong></h1><br/>
                <script type="text/javascript">
                var a=new Array()
                function ab()
                {
                    for(i=0;i<ab.arguments.length;i++)
                    {
                        a[i]=new Image()
                        a[i].src=ab.arguments[i]
                    }
                }
                </script>
                <img src="im/1.jpg" alt="slideshow" name="slide" border="0" width="400" height="300" />
                <script type="text/javascript">
                ab("dbimg/1.png","dbimg/2.png")
                var slideshowspeed=2000
                var whichimage=0
                function slideit()
                {
                    if(!document.images)
                        return
                    document.images.slide.src=a[whichimage].src
                    if(whichimage<a.length-1)
                        whichimage++

                    else
                        whichimage=0
                    setTimeout("slideit()",slideshowspeed)
                }
                slideit()
                </script>
            </div>
            <!-- end of right content-->
            
            
        </div>   <!--end of center content -->               
        
        
        
        
        <div class="clear"></div>
    </div> <!--end of main content-->
    
    
    <div class="footer">
        
    	<div class="left_footer">Powered by Unfired </div>
    	<div class="right_footer"></div>
        
    </div>

</div>		
</body>
</html>