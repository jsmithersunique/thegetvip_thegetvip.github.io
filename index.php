<?php
///////////////////////////////////////////////////////////////////////////
include 'common.php';
sayyes();   // prints sever vars in an HTML comment so view source on the page
getxapps();  // API to Wowza works - this gets list of named app on server
///////////////////////////////////////////////////////////////////////////
?>
<!doctype html xmlns:fb="http://www.facebook.com/2008/fbml" xml:lang="en" lang="en">
<!--  this comment proves a successful push overwriting upload to Github. -->
<meta charset="UTF-8">
<html>  
    <head>
    <title>Innoc.us - TV from your event</title>
    <meta charset="utf-8"/>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
    <meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1, maximum-scale=1">
    <meta name="mobile-web-app-capable" content="yes">
    <script src="webrtc.js"></script>
    <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.0/jquery-ui.js"></script>
    <script src="adapter.js"></script>
    <script src="/main.js"></script>
    <link rel="shortcut icon" href="vidfav.png" />
    <link rel="icon" type="image/png" href="vidfav.png" />
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <style>
  #toggle {
    width: 28px;
    height: 28px;
    background: transparent;
  }
  </style>
<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.0/jquery-ui.js"></script>
</head>
<body style="background:url(u.jpg) no-repeat center center fixed; background-size:cover; 
                 font-family:verdana,helvetica,swiss;font-size:10pt;color:lightblue;">
        
<script>
// copy to clipboard: https://jsfiddle.net/jfriend00/v9g1x0o6/
$(document).ready(function () {
            $('#dialog').dialog({
                autoOpen: false, width:'auto', height:300
                //title: 'Final Broadcast SetUp'
            });
            $('#pmenu').dialog({
                autoOpen: false, width:'auto', height:300
                //title: 'Final Broadcast SetUp'
            });
            $('#showmenu').click(function () {
                $('#dialog').dialog('open');
            });
            $('#showxmenu').click(function () {
                $('#dialog').dialog('open');
            });
    document.getElementById('msg').innerHTML = "Please approve using your cam/mic - can't stream without that..."; 
  
});
    

//$("#showmenu").click(function() {
//    $("#dialog").dialog("open");
//    return false;
//  });    
    
//$( document ).hover(function() {
//  $( "#toggle" ).effect( "shake" );
//});
</script>
<span id="showmenu">      
<img id="toggle" style="float:right" height="28px" src="tinymenu.png" /></span>
        
<center> 
    <table align="center" width="95%" height="99%" cellpadding="4"  border="0">
     <tr>
         <td  valign="top" align="center" width="16%">
             <img src="tv.jpg" width="95%"/><br />&nbsp;<br />
             <img src="tv.jpg" width="95%"/><br />&nbsp;<br /><img src="tv.jpg" width="95%"/><br />&nbsp;<br /><img src="tv.jpg" width="95%"/></td>       
        <td valign="top" style="vertical-align:super;" height="10%" width="66%">
               
         <!--  <?php if (isset($_SESSION["AUTH"])) {print '<input style="" type="button" id="start" onclick="start(true)" value="Start Streaming Your Cam Now"></input><br />&nbsp;<br />'; } ?>
           <?php if (! isset($_SESSION["AUTH"])) { print '<font style="font-size:10pt;color:lightblue;"><i>Not Live Yet.</i>
           &nbsp;&nbsp;Click <a href="#" style="font-size:10pt;color:lightblue;" id="showxmenu"> the
             menu</a> at upper right for your broadcast/meeting/party/class choices.</font>';} ?>
-->
<div id="wrapper">
    <a href="#" id=showxmenu><video  style="vertical-align:super; margin:0; padding:0; border:0; width:99%; height:95%" valign="top" id="localVideo" autoplay muted ></video></a><br /><br />&nbsp;<br /><br />&nbsp;<br />
    <span style="vertical-align:super; margin-left:30px; margin-right:30px; text-shadow: 1px 1px 1px #555;" id="msg"></span>
</div>
                    <style>
                       #wrapper {
                        position: relative;
                           width:99%; height:95%; align-content: stretch; vertical-align:super;
                        }
                       #wrapper span, #wrapper video {
                           position: absolute; vertical-align: super;
                           top: 10;
                       }
                   </style>
            
           <span style="text-shadow: 1px 1px 1px #555;">Touch or click a video to move it/send it to the main video feed everyone sees.</span>

</td>
   <td valign="top" width="16%">
       <img src="tv.jpg" width="95%"/><br />&nbsp;<br /><img src="tv.jpg" width="95%"/><br />&nbsp;<br /><img src="tv.jpg" width="95%"/><br />&nbsp;<br /><img src="tv.jpg" width="95%"/>
         </td>
</tr>
    </table></center>

		<div>
			<span id="sdpDataTag">
			</span>
		</div>
    
<div id="dialog" style="width:75%;font-size:9pt;font-color:navy;overflow:auto; height:300;" title="GO LIVE Menu for Innoc.us">
<style>width:75%;font-size:9pt;font-color:navy;overflow:auto; height:300;</style>                
<p><b>First, select a short handle:</b><input type=text length="15" id ="handle" name="handle" placeholder="myHandle" />&nbsp;...and give us your email <input type=text length="15" name="email" placeholder="me@myEmail.com" /> <br />
                    (make it short - suitable for tweeting) You'll direct your friends to <font color=red><i><span id="txtout"></span></i>.innoc.us</font> to join and contribute their video (or they can just watch here, or on your<br /> 
                    Youtube and/or Facebook pages, or watch on your own web page).  We give you buttons/text/link to share instantly on major social media channels.</p>  
                
<p><b>Next, select the MODE you wish to operate in:</b><br />
                ALL modes allow you to stream to your YouTube and Facebook pages, plus your own web site.</p>
                
<P><b><input name=mode value="D" type=radio>&nbsp;I will be the Director - 55 minute broadcast - $7.99</b><br />
Only you will have the controls choose which of your friends' TV pictures go out on the main feed. <br />
    Suitable for unschduled parties, dining parties, events, etc.  Up to 8 people with cams can contribute; unlimited viewers.</P>
                
<P><b><input name=mode value="E" type=radio>&nbsp;Everybody is their own Director - 55 minute broadcast - $14.99</b><br />
Everyone has the controls to choose which of your friends' TV pictures they see in their viewing feed<br />
    if viewing at Innoc.us. (Your own choice still goes to Youtube, Facebook, your own web page.)<br />
    Suitable for unschduled parties, dining parties, events, etc.  Up to 8 people with cams can contribute; unlimited viewers.</P>

<p><input style="float:right;" type=submit name=submit value="Pay and GO LIVE Now Now Now" /></p>   
                
<p><b>SetUp for Daily/Weekly/Monthly Broadcasts...</b></p>   
                
<center><p align="center" style="float:center;"><b><h2>Other Choices for Scheduled Events</h2></b></p></center>

<p>Once you are live, return to this menu to get this text to Tweet, email, share on Facebook or whatever...<br />&nbsp;<br />
<b>Party:</b> <span>We're expanding our party NOW to online video! Join us at https://<span id="txtout1"></span>.innoc.us - contribute your own video or just watch! If U miss it catch it later on my Utube.</span>                
<br />&nbsp;<br />
<b>Business:</b> <span>Imprtnt Video Conference: Pls join us now at https://<span id="txtout2"></span>.innoc.us - contribute your video or just watch.</span>                
</p>   

<p>&nbsp;</p>  
</div>
    
<div id="pmenu" style="width:75%;font-size:9pt;font-color:navy;overflow:auto; height:300;" title="Dev Menu for Innoc.us">
    <h2>Dev Menu</h2>
    
    <p><b>SetUp for Daily/Weekly/Monthly Broadcasts...</b></p> 
    
    <p>&nbsp;</p> 
</div>
    
<script type="text/javascript">
            pageReady();
</script>
<script>
$(function() {
    $('#handle').keyup(function() {
        $('#txtout').text($(this).val());
    });
});
    
$(function() {
    $('#handle').keyup(function() {
        $('#txtout1').text($(this).val());
    });
});
    
$(function() {
    $('#handle').keyup(function() {
        $('#txtout2').text($(this).val());
    });
}); 

$(document).on('keydown', function ( e ) {
    // You may replace `c` with whatever key you want
    if ((e.metaKey || e.ctrlKey) && ( String.fromCharCode(e.which).toLowerCase() === 'c') ) {
        //alert( "Put programmer menu here." );
        $('#pmenu').dialog('open');
    }
});   
    
//  https://webrtc.github.io/samples/src/content/devices/input-output/    
document.getElementById('intro').innerHTML = 'Please approve us to use your cam/mic if you want to meet, stream or test. Then click ...menu at right.';
document.getElementById('msg').innerHTML = "Last script in page...";     
</script>
</body>
</html>

