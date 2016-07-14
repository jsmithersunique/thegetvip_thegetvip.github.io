<?php
///////////////////////////////////////////////////////////////////////////
include 'common.php';
sayyes();   // prints sever vars in an HTML comment so view source on the page
getxapps();  // API to Wowza works - this gets list of named app on server
///////////////////////////////////////////////////////////////////////////
?>
<!doctype html xmlns:fb="http://www.facebook.com/2008/fbml" xml:lang="en" lang="en">
<html>  
    <head>
    <title>TheGet.io - multi-cam TV NOW from your event with your thumbs and chums.  This is your tv control room.</title>
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
    </head>
<body style="background:url(u.jpg) no-repeat center center fixed; background-size:cover; 
             font-family:verdana,helvetica,swiss;font-size:10pt;color:lightblue;">
        
<script>
// copy to clipboard: https://jsfiddle.net/jfriend00/v9g1x0o6/
$(document).ready(function () {
            $('#dialog').dialog({
                autoOpen: false, width:'75%', height:450
                //title: 'Final Broadcast SetUp'
            });
            $('#pmenu').dialog({
                autoOpen: false, width:'auto', height:450
                //title: 'Final Broadcast SetUp'
            });
            $('#showmenu').click(function () {
                $('#dialog').dialog('open');
                $('#handle').blur();
            });
            $('#showxmenu').click(function () {
                $('#dialog').dialog('open');
            });
    
document.getElementById('msg').innerHTML = "Please approve using your cam/mic - can't stream your TV without that..."; 
  
});
</script>
<span id="showmenu">      
<img id="toggle" style="float:right" height="28px" src="tinymenu.png" /></span>
        
<center> 
    <table style="border:0; " align="center" width="95%" height="99%" cellpadding="4"  border="0">
     <tr>
         <td  valign="top" align="center" width="16%">
             <img src="tv.jpg" width="95%"/><br />&nbsp;<br />
             <img src="tv.jpg" width="95%"/><br />&nbsp;<br /><img src="tv.jpg" width="95%"/><br />&nbsp;<br /><img src="tv.jpg" width="95%"/>
             <br />&nbsp;<br /><span style="font-size:8pt;">Stream to<br /><img src="fb.jpg" width="50"/><br />(not connected)</span>
</td>       
        <td valign="top" style="vertical-align:super;" height="10%" width="66%">
               
<!--       <?php if (isset($_SESSION["AUTH"])) {print '<input style="" type="button" id="start" onclick="start(true)" 
               value="Start Streaming Your Cam Now"></input><br />&nbsp;<br />'; } ?>
           <?php if (! isset($_SESSION["AUTH"])) { print '<font style="font-size:10pt;color:lightblue;"><i>Not Live Yet.</i>
           &nbsp;&nbsp;Click <a href="#" style="font-size:10pt;color:lightblue;" id="showxmenu"> the
             menu</a> at upper right for your broadcast/meeting/party/class choices.</font>';} ?>
-->
<div id="wrapper">
<a href="#" id=showxmenu><video  style="vertical-align:super; margin:0; padding:0; border:0; width:99%; height:95%" valign="top" id="localVideo" autoplay muted >
</video>
</a><br />
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
            
<span style="margin:auto; display:block; text-align:center; text-shadow: 1px 1px 1px #555; font-size:9pt;">
Touch or click any video to move it/send it to the main video feed everyone sees.<br />
Tweet, text, email or otherwise notify your friends (with or without cams) to join you at: <?php print $_SESSION["subd"] ?>.TheGet.io</span>
</td>
   <td valign="top"  align="center"  width="16%">
       <img src="tv.jpg" width="95%"/><br />&nbsp;<br /><img src="tv.jpg" width="95%"/><br />&nbsp;<br /><img src="tv.jpg" width="95%"/><br />&nbsp;<br /><img src="tv.jpg" width="95%"/><br />&nbsp;<br /><span style="font-size:8pt;">Stream to<br /><img src="yt.png" width="50"/><br />(not connected)</span>
         </td>
</tr>
</table></center>

		<div>
			<span id="sdpDataTag">
			</span>
		</div>
    
<div id="dialog" style="color:navy; width:75%; font-size:14pt; overflow:auto; height:350;" title="GO LIVE Menu for TheGet.io">
<style>
.pop td {-moz-border-radius:8px; -webkit-border-radius:8px; border-radius:8px; 
 border:2px solid lightgray; }
.pop input { background:url('input.gif') norepeat left top; padding:3px; -moz-border-radius:8px; -webkit-border-radius:8px; border-radius:8px; outline:none;}
</style><a name="a">&nbsp;</a>
<table class="pop" cellpadding="10" cellspacing="15" width="100%" style="-moz-border-radius:8px; -webkit-border-radius:8px; border-radius:8px; 
 border:2px solid lightgray; ">
<tr><td style="color:navy;" colspan="3">                
<p><b>First, pick a short name for your TV channel:</b>&nbsp;&nbsp;<input  class="pop" type=text length="10" id ="handle" name="handle" placeholder="myChannel" /><br />you'll direct your friends to <font color=red><i><span id="txtout"></span></i>.TheGet.io</font> - make it short - for easy tweeting!</span></p>  
</td></tr>
<td  valign="top" width="15%" style="color:navy;"><b><input type=radio>Solo Control Room</b><br />
<font style="font-size:10pt;">Everyone sees only the picture you have chosen in your big center stream.  You have total & full control, 
but your curious friends cannot check out your guest streams themselves.<br />$5.99 - 55 minutes</td>
<td  width="15%" style="color:navy;"><b><input CHECKED type=radio>'Shared' Control Room</b><br />
<font style="font-size:10pt;">Everyone gets their own 'control room' like you see and can pick what 
they want to watch among your guest streams if they are on your 
<font color=red><i><span id="txtout1"></span></i>.TheGet.io</font> page, but only the stream <i><u>you</u></i> choose here
goes to Facebook and Youtube (no fighting over that!).<br />$9.99 - 55 minutes</td>
<td  align="center" width="10%" style="color:navy;"><p style="float:center">Pay and Go LIVE<br />NOW NOW NOW<br /><input style="float:center;" type=submit name=submit value=" Do It. " /></p>  </td>
</tr><tr>               
<td  style="color:navy;" colspan="3"> 
<p><b>Register now for your future recurring shows or for future events</b><br />
...so you can get going <i><u>fast</u></i> at show time.  You can also view all pricing plans.</p>   
</td>
</tr><tr>
<td  style="color:navy;" colspan="3"> 

<table cellpadding="8" border="0" >
<td valign="top" style="border:0;color:navy;" rowspan="3"><b>I set up beforehand&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b><br />just log me in&nbsp;&nbsp;&nbsp;&nbsp;<br /></td>
<tr><td style="border:0;color:navy;" align="right"><span style="float:right;text-align:right">Channel name or email: </span></td><td><input  class="pop" type=text length="8" placeholder="email/channel" />
</td></tr>
<tr><td style="border:0; color:navy; text-align:right;" align="right"><span style="float:right;text-align:right">Password: </span></td><td><input type=text class="pop"  length="8" placeholder="***" />
</td></tr></table>  
</td>                
</tr></table>  
</div>
    
<div id="pmenu" style="width:75%;font-size:9pt;font-color:navy;overflow:auto; height:450;" title="Dev Menu for Innoc.us">
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
