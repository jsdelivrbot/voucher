
<?
$gps_icon_color="#FFED22";
?>
 
   <!------ class="modal fade"----> 
 
 <!------ end---->
 <style type="text/css">
.mainpic_qr {
 
   padding:10px; color:#000000;    
 
   border:3px solid #3C8DBC; background-color:#FFFFFF; 
   box-shadow: 2px 1px 10px #333333; margin-right:5px; margin-bottom:5PX;max-width:400px;
    
}
 #mainheadmenu {
 position:fixed ;   z-index:9999; width:100%;box-shadow: 0px  2px 2px #999999;background-color:3C8DBC; margin-top:-5px; padding:0px;
   border-bottom:3px solid #FFFFFF;
  }
 
  #mainheadmenu a:hover {
 background-color:#4BA7DC;padding:0px;
 
 }
 
   #mainheadmenu a:hover {
 padding:0px; color:#FFFFCC; background:none;
 
 }
    #mainheadmenu  a:active {
color:#FFFFCC;padding:0px;
 
 }
 
 
 
   .drop-sub-menu-link {
   padding:15px; font-size:14px; padding-left:10px; padding-bottom:15px; padding-top:15px; margin-left:5px; position: relative; color:#999999;
  
  border-bottom:  solid 0.5px #DADADA;
  }
  
     .drop-sub-chat-link {
   padding:5px; font-size:14px; padding-left:5px; margin-left:5px; position: relative;
  
  border-bottom:  solid 0.5px #DADADA;
  }
  

  
  
     .drop-sub-menu-link-none {
   padding:15px; font-size:14px; padding-left:10px; margin-left:5px; margin-right:5px;
  
  border-bottom:  solid 0px #737373;
  }
     .drop-sub-menu-span {
 margin-left:30px; color:#666666; margin-top:5PX;   
  }
  
 
 
    .drop-menu-icon { 
	font-size:26px;  color:#3C8DBC; padding-right:5px; padding-bottom:5PX; display:block; position:absolute;
   }
   
@-webkit-keyframes gps-color {
    0%   { color: <?=$gps_icon_color?> }
    25%  { color: white; font-size:30px; }
	50%   { color: <?=$gps_icon_color?> }
	75%  { color: white; font-size:30px; }
    100% { color: <?=$gps_icon_color?> }
 
}

 @-moz-keyframes gps-color {
 
 
	
}




.gps-status-icon {
     
 font-size:30px;
 
	  
	  
	 	  -webkit-transition: all 2s;
	   -moz-animation: gps-color 2s infinite;
	  
      -webkit-transition: all 2s;
    -webkit-animation: gps-color 2s infinite;
}
 
-->
 </style> 
 <script >

 //var offsetHeight = document.getElementById('mainheadmenu').offsetHeight;

 $( document ).ready(function() {
var offsetHeight = document.getElementById('test').offsetHeight;
/// alert(offsetHeight);
});
 
<!--
function MM_reloadPage(init) {  //reloads the window if Nav4 resized
  if (init==true) with (navigator) {if ((appName=="Netscape")&&(parseInt(appVersion)==4)) {
    document.MM_pgW=innerWidth; document.MM_pgH=innerHeight; onresize=MM_reloadPage; }}
  else if (innerWidth!=document.MM_pgW || innerHeight!=document.MM_pgH) location.reload();
}
MM_reloadPage(true);
//-->


 </script>
 <div id="test" ></div>
 <div  class="main-header" id="mainheadmenu" style="height:45px; padding-bottom:55px;   "  >
<header> 
 

    <!-- Logo --> 
<table width="100%"  border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td style="width:40px; "><a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button" style="font-size:30px; padding:5px; padding-top:10px; padding-bottom:0px; color:#FFFFFF; height:50px;   "><b> </b>
  </a></td>
    <td   align="left"><div id="Layer1" style="position:absolute; width:50px; height:115px; z-index:100000; margin-top:-30px;"><img src="images/applogo.png" width="60"  align="absmiddle"></div>
      </td>
 
	  
    <td width="60%" align="right"> 
	<? 
///// head
 include "load/page/top_menu.php" ;
 ?></td>
  </tr>
</table>

    <!-- Header Navbar: style can be found in header.less -->
 
      <!-- Sidebar toggle button-->


<!----- end logo-->
	
  
	
	
  </header>
 </div>
 