<?php
/////////////////////////////////////////////////
include 'common.php';
sayyes (); // prints sever vars in an HTML comment so view source on the page
getxapps (); // API to Wowza works - this gets list of named app on server
//12:36///////////////////////////////////////////
?>
<!doctype html xmlns:fb="http://www.facebook.com/2008/fbml" xml:lang="en" lang="en">
<html>
<head>
<title>TheGet.io - multi-cam TV NOW from your event with your thumbs and
	chums. This is your tv control room.</title>
<meta charset="utf-8" />
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
<meta name="viewport"
	content="width=device-width, user-scalable=yes, initial-scale=1, maximum-scale=1">
<meta name="mobile-web-app-capable" content="yes">
<script src="webrtc.js"></script>
<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.0/jquery-ui.js"></script>
<script src="adapter.js"></script>
<script src="/main.js"></script>
<link rel="shortcut icon" href="vidfav.png" />
<link rel="icon" type="image/png" href="vidfav.png" />
<link rel="stylesheet"
	href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
</head>
<body onload="updateClock(); setInterval('updateClock()', 1000 )"
	style="background: url(u.jpg) no-repeat center center fixed; background-size: cover; font-family: verdana, helvetica, swiss; font-size: 10pt; color: lightblue;">

	<script>
// copy to clipboard: https://jsfiddle.net/jfriend00/v9g1x0o6/
$(document).ready(function () {
            $('#dialog').dialog({
                autoOpen: false, width:'90%', height:450
            });

            $('#pmenu').dialog({
                autoOpen: false, width:'75%', height:450
                //
            });

            $('#showmenu').click(function () {
                $('#dialog').dialog('open');
                $('#handle').blur();
            });

            $('#showxmenu').click(function () {
                $('#dialog').dialog('open');
                $('#handle').blur();
            });

document.getElementById('msg').innerHTML = "Please approve using your cam/mic - we can't stream your TV without that...";

});
</script>
	<span id="showmenu"> <img id="toggle" style="float: right"
		height="28px" src="tinymenu.png" /></span>

	<center>
		<table style="border: 0;" align="center" width="95%" height="99%"
			cellpadding="4" border="0">
			<tr>
				<td valign="top" align="center" width="16%">
					<table border="0">
						<tr>
							<td colspan="3"><span style="font-size: 8pt;">invite friends to
									join</span></td>
						</tr>
						<tr>
							<td align="center"><img
								title="Get your stream going before you invite - click the big video or the ... menu at top right."
								src="fb.png" style="width: 25px;" /></td>
							<td align="center"><img
								title="Get your stream going before you invite - click the big video or the ... menu at top right."
								src="inst.png" style="width: 25px;" /></td>
							<td align="center"><img
								title="Get your stream going before you invite - click the big video or the ... menu at top right."
								src="tw.png" style="width: 25px;" /></td>
						</tr>
					</table> <br />&nbsp; <img src="tv.jpg" width="95%" /><br />&nbsp;<br />
					<img src="tv.jpg" width="95%" /><br />&nbsp;<br /> <img
					src="tv.jpg" width="95%" /> <br />&nbsp;<br /> <span
					style="font-size: 8pt;">Stream to<br /> <img
						title="Sign up before you can stream - click the big video or the ... menu at top right."
						src="fb.png" width="50" /><br />(not connected) <br />&nbsp;<br />&nbsp;<br />
						<a target="_blank" style="color: lightblue;"
						href="http://theget.io/wordpress">blog</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a
						target="_blank" style="color: lightblue;"
						href="http://speedtest.net">speedtest</a>&nbsp;&nbsp;|&nbsp;support&nbsp;&nbsp;|&nbsp;prices
						<br />&nbsp;<br /> Add a ProCam/Teradek/etc.
				</span>
				</td>
				<td valign="top" style="vertical-align: super;" height="10%"
					width="66%">
					<!--       <?php

					if (isset ( $_SESSION ["AUTH"] )) {
						print '<input style="" type="button" id="start" onclick="start(true)"
               value="Start Streaming Your Cam Now"></input><br />&nbsp;<br />';
					}
					?>
           <?php

											if (! isset ( $_SESSION ["AUTH"] )) {
												print '<font style="font-size:10pt;color:lightblue;"><i>Not Live Yet.</i>
           &nbsp;&nbsp;Click <a href="#" style="font-size:10pt;color:lightblue;" id="showxmenu"> the
             menu</a> at upper right for your broadcast/meeting/party/class choices.</font>';
											}
											?>
-->
					<div id="wrapper">
						<a href="#" id=showxmenu><video
								style="vertical-align: super; margin: 0; padding: 0; border: 0; width: 99%; height: 95%"
								valign="top" id="localVideo" autoplay muted>
							</video> </a><br /> <span
							style="vertical-align: super; margin-left: 30px; margin-right: 30px; text-shadow: 1px 1px 1px #555;"
							id="msg"></span>
					</div>
					<style>
#wrapper {
	position: relative;
	width: 99%;
	height: 95%;
	align-content: stretch;
	vertical-align: super;
}

#wrapper span, #wrapper video {
	position: absolute;
	vertical-align: super;
	top: 10;
}
</style> <span
					style="margin: auto; display: block; text-align: center; text-shadow: 1px 1px 1px #555; font-size: 9pt;">
						Touch or click any video to move it/send it to the main video feed
						everyone sees.<br />
Tweet, text, email or otherwise notify your friends (with or without cams) to join you at: <?php print $_SESSION["subd"] ?>.TheGet.io</span>
				</td>
				<td valign="top" align="center" width="16%">
					<table border="0">
						<tr>
							<td colspan="3"><span style="font-size: 8pt;">invite friends to
									join</span></td>
						</tr>
						<tr>
							<td align="center"><img
								title="Get your stream going before you invite - click the big video or the ... menu at top right."
								src="dg.png" style="width: 25px;" /></td>
							<td align="center"><img
								title="Get your stream going before you invite - click the big video or the ... menu at top right."
								src="rdt.png" style="width: 25px;" /></td>
							<td align="center"><img
								title="Get your stream going before you invite - click the big video or the ... menu at top right."
								src="su.png" style="width: 25px;" /></td>
						</tr>
					</table> <br />&nbsp; <img src="tv.jpg" width="95%" /><br />&nbsp;<br />
					<img src="tv.jpg" width="95%" /><br />&nbsp;<br /> <img
					src="tv.jpg" width="95%" /><br />&nbsp;<br /> <span
					style="font-size: 8pt;">Stream to<br /> <img
						title="Sign up before you can stream - click the big video or the ... menu at top right."
						src="yt.png" width="50" /><br />(not connected)
				</span> <br />&nbsp;<br />&nbsp;<br /> <span id="clock"
					style="color: white; font-size: 11pt;"><b>&nbsp;</b></span> <br />&nbsp;<br />
					<span style="color: lightblue; font-size: 7pt;"> Viewers: 0 | Cams:
						0 | FB: 0 | YT: 0 <br />&nbsp;<br /> Chryon: <input class="pop"
						type=text size="9" placeholder="name, title" />&nbsp;&nbsp;&nbsp;&nbsp;in&nbsp;&nbsp;&nbsp;&nbsp;out
						<br />&nbsp;<br /> Other Targets: Twitch, BTR, etc.
				</span>
				</td>
			</tr>
		</table>
	</center>

	<div>
		<span id="sdpDataTag"> </span>
	</div>

	<div id="dialog"
		style="color: navy; width: 75%; font-size: 14pt; overflow: auto; height: 350;"
		title="GO LIVE Menu for TheGet.io">
		<style>
.pop td {
	-moz-border-radius: 8px;
	-webkit-border-radius: 8px;
	border-radius: 8px;
	border: 2px solid lightgray;
}

.pop input {
	background: url('input.gif') norepeat left top;
	padding: 3px;
	-moz-border-radius: 8px;
	-webkit-border-radius: 8px;
	border-radius: 8px;
	outline: none;
}
</style>
		<table class="pop" cellpadding="10" cellspacing="15" width="100%"
			style="-moz-border-radius: 8px; -webkit-border-radius: 8px; border-radius: 8px; border: 2px solid lightgray;">
			<tr>
				<td NOWRAP style="color: navy;"><b>Pick&nbsp;a&nbsp;short&nbsp;name&nbsp;for&nbsp;your&nbsp;channel:</b><br />
					<input class="pop" type=text length="6" id="handle" name="handle"
					placeholder="myChannel" /><img style="width: 40px; float: right;"
					src="arrow.dr.png" /><br /> direct your friends (with or without
					cams) to<br /> <font color=red><i><span id="txtout"></span></i>.TheGet.io</font>
					<span style="font-size: 9pt;">(make it short for tweeting)</span></td>
				<td style="color: navy; background: lightgreen;" colspan="2">
					<table cellpadding="8" border="0">
						<td valign="top" style="border: 0; color: navy;" rowspan="3"><b>...OR...<br />I&nbsp;set&nbsp;up&nbsp;beforehand
						</b><br />just log me in<br /></td>
						<tr>
							<td style="border: 0; color: navy;" align="right"><span
								style="float: right; text-align: right; font-size: 8pt;">Channel
									name or email: </span></td>
							<td><input class="pop" type=text length="6"
								placeholder="email/channel" /></td>
						</tr>
						<tr>
							<td style="border: 0; color: navy; text-align: right;"
								align="right"><span
								style="float: right; text-align: right; font-size: 8pt;">Password:
							</span></td>
							<td><input type=text class="pop" length="6" placeholder="***" />
							</td>
						</tr>
					</table>
				</td>
			</tr>
			<td valign="top" width="15%" style="color: navy;"><b><input
					type=radio>Solo Director/Solo Control Room</b><br /> <font
				style="font-size: 10pt;">Everyone sees only the picture you have
					chosen in your big center stream. You have total & full control,
					but your curious friends cannot check out your guest streams for
					themselves. This is a great choice if you really want viewers to
					focus entirely on your message. Best, for classes, seminars,
					conferences, etc.<br />$5.99 - 65 minutes</td>
			<td width="15%" style="color: navy;"><b><input CHECKED type=radio>'Everyone'
					is a Director/Shared Ctrl Room</b><br /> <font
				style="font-size: 10pt;">Everyone gets their own 'control room' like
					you see here and can pick what they want to watch among your guest
					streams if they are on your <font color=red><i><span id="txtout1"></span></i>.TheGet.io</font>
					page, but only the stream <i><u>you</u></i> choose here goes to
					Facebook, Youtube, other destinations (no struggle there!). Better
					for entertainment or party style programming, or hangout type
					events.<br />$9.99 - 65 minutes</td>
			<td align="center" width="10%" style="color: navy;"><p
					style="float: center">
					Pay and Go LIVE<br />NOW NOW NOW<br /> <input
						style="float: center;" type=submit name=submit value=" Do It. " />
				</p></td>
			</tr>
			<tr>
				<td style="color: navy;" colspan="3">
					<p>
						<b>Register now for your future recurring shows or for future
							events</b><br /> ...so you can get going <i><u>fast</u></i> at
						show time. You can also view all pricing plans at this link.
					</p>
				</td>
			</tr>
		</table>
	</div>

	<div id="pmenu"
		style="width: 75%; font-size: 9pt; font-color: navy; overflow: auto; height: 450;"
		title="Dev Menu for Innoc.us">
		<h2>Dev Menu</h2>

		<p>
			<b>Special Developer Links...</b>
		</p>
		<p>
			<a id="ll" target="_blank" style="color: navy;"
				href="http://theget.io/wordpress">blog</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a
				target="_blank" style="color: navy;" href="http://speedtest.net">speedtest</a>
			&nbsp;&nbsp;|&nbsp;&nbsp;<a
				href="https://console.aws.amazon.com/ec2/v2/home?region=us-east-1#Instances:sort=instanceId"
				target="_blank">AWS Admin</a> <br />&nbsp;<br /> <a
				href="https://theget.io:8089" target="_blank">TheGet Webmin</a>
			&nbsp;&nbsp;|&nbsp;&nbsp;<a href="http://theget.io:8088"
				target="_blank">TheGet Wowza Control Panel</a>
			&nbsp;&nbsp;|&nbsp;&nbsp;<a target="_blank"
				href="https://github.com/thegetvip">TheGet GitHub Repo</a>



		</p>
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
    if ((e.metaKey || e.ctrlKey) && ( String.fromCharCode(e.which).toLowerCase() === 'z') ) {
        $('#pmenu').dialog('open');
        $('#ll').blur();
    }
});


function updateClock ( )
{
  var currentTime = new Date ( );

  var currentHours = currentTime.getHours ( );
  var currentMinutes = currentTime.getMinutes ( );
  var currentSeconds = currentTime.getSeconds ( );

  // Pad the minutes and seconds with leading zeros, if required
  currentMinutes = ( currentMinutes < 10 ? "0" : "" ) + currentMinutes;
  currentSeconds = ( currentSeconds < 10 ? "0" : "" ) + currentSeconds;

  // Choose either "AM" or "PM" as appropriate
  var timeOfDay = ( currentHours < 12 ) ? "AM" : "PM";

  // Convert the hours component to 12-hour format if needed
  currentHours = ( currentHours > 12 ) ? currentHours - 12 : currentHours;

  // Convert an hours component of "0" to "12"
  currentHours = ( currentHours == 0 ) ? 12 : currentHours;

  // Compose the string for display
  var currentTimeString = currentHours + ":" + currentMinutes + ":" + currentSeconds + " " + timeOfDay;

  // Update the time display
  document.getElementById("clock").innerHTML = currentTimeString;
}

//  https://webrtc.github.io/samples/src/content/devices/input-output/
document.getElementById('intro').innerHTML = 'Please approve us to use your cam/mic if you want to meet, stream or test. Then click ...menu at right.';
// document.getElementById('msg').innerHTML = "Last script in page...";
</script>
</body>
</html>
