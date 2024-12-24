<?php

$testValues = [
    "host" => "",
    "port" => 0,
    "user" => "",
    "pass" => "",
    "name" => "",
    "email" => "",
    "subject" => "",
    "text" => "This is a email test.",
    "html" => "<h1>Email test</h1>\n<p>This is a email test.</p>"
];

?>
<h3>Send email</h3>
<p>Submit the form below to send an email.</p>
<p>You need to setup a SMTP email account for this your self.</p>
<form method="post" action="{LINK_ROOT}send-email">
<table>
<tr><td>Host:</td><td><input class="width-default" type="text" name="host" value="<?php echo $testValues["host"]; ?>" /></td></tr>
<tr><td>Port:</td><td><input class="width-small" type="text" name="port" value="<?php echo $testValues["port"]; ?>" /></td></tr>
<tr><td>Username:</td><td><input class="width-default" type="text" name="user" value="<?php echo $testValues["user"]; ?>" /></td></tr>
<tr><td>Password:</td><td><input class="width-default" type="text" name="pass" value="<?php echo $testValues["pass"]; ?>" /></td></tr>
<tr><td>&nbsp;</td</tr>
<tr><td>From name:</td><td><input class="width-default" type="text" name="from_name" value="<?php echo $testValues["name"]; ?>" /></td></tr>
<tr><td>From email:</td><td><input class="width-default" type="text" name="from_email" value="<?php echo $testValues["user"]; ?>" /></td></tr>
<tr><td>To name:</td><td><input class="width-default" type="text" name="to_name" value="<?php echo $testValues["name"]; ?>" /></td></tr>
<tr><td>To email:</td><td><input class="width-default" type="text" name="to_email" value="<?php echo $testValues["email"]; ?>" /></td></tr>
<tr><td>Subject:</td><td><input class="width-default" type="text" name="subject" value="<?php echo $testValues["subject"]; ?>" /></td></tr>
<tr><td style="vertical-align:top">Text message:</td><td><textarea class="width-default" name="text_message"><?php echo $testValues["text"]; ?></textarea></td></tr>
<tr><td style="vertical-align:top">HTML message:</td><td><textarea class="width-default" name="html_message"><?php echo $testValues["html"]; ?></textarea></td></tr>
</table>
<p>When pressing the send button it can take a few seconds, then check your inbox.</p>
<p><button>Send</button></p>
<p>In case of no email check the log file <a href="{LINK_ROOT}show-log/smtpMail" target="_blank">here</a>.</p>
</form>
