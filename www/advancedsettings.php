<!DOCTYPE html>
<html>
<head>
<?php require_once('common.php'); ?>
<?php include 'common/menuHead.inc'; ?>
<title><? echo $pageTitle; ?></title>
</head>
<body>
<div id="bodyWrapper">
<?php include 'menu.inc'; ?>
<br/>
<div id="global" class="settings">
	<fieldset>
	<legend>FPP Advanced Settings</legend>
	<table table width = "100%">
		<tr><td valign='top'><? PrintSettingSelect("E1.31 Bridging Transmit Interval", "E131BridgingInterval", 1, 0,"50", Array('25ms' => '25', '40ms' => '40', '50ms' => '50', '100ms' => '100')); ?></td>
			<td valign='top'><b>E1.31 Bridge Mode Transmit Interval</b> - The
				default Transmit Interval in E1.31 Bridge Mode is 50ms.  This
				setting allows changing this to match the rate the player is
				outputting. <font color='#ff0000'><b>WARNING</b></font> - Some
				output devices such as the FPD do not support rates other than 50ms.</td>
		</tr>
		<tr><td colspan='2'><hr></td></tr>
		<tr><td valign='top'><? PrintSettingCheckbox("E1.31 to E1.31 Bridging", "E131Bridging", 1, 0, "1", "0"); ?></td>
			<td valign='top'><b>Enable E1.31 to E1.31 Bridging</b> - 
				<font color='#ff0000'><b>WARNING</b></font> -
				E1.31 to E1.31 bridging over wireless is not recommended for
				live show use.  It is provided here as an option to allow
				testing remote wireless-attached Pi's.</td>
		</tr>
		<tr><td colspan='2'><hr></td></tr>
		<tr><td valign='top'><? PrintSettingText("mediaOffset", 1, 0, 5, 5); ?> ms<br>
				<? PrintSettingSave("Media Offset", "mediaOffset", 1, 0); ?></td>
			<td valign='top'><b>Media/Sequence Offset</b> - The media offset value
				allows adjusting the synchronization of the media and sequences being
				played.  The value is specified in milliseconds.  A positive value
				moves the media ahead, a negative value moves the media back.
				Changing this value requires a FPPD restart.
				<font color='#ff0000'><b>WARNING</b></font> - This offset applies
				to all media files played.  If your media files require different
				offsets per file then you will have to edit the audio files or
				sequences to bring them into sync.</td>
		</tr>
	</table>
	</fieldset>
</div>
<?php	include 'common/footer.inc'; ?>
</body>
</html>
