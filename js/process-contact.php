<?php
$action=$_REQUEST['action'];
if ($action=="")    /* display the contact form */
    {
    ?>
    <form  action="" method="POST" enctype="multipart/form-data">
    <input type="hidden" name="action" value="submit">
    Your name:<br>
    <input name="name" type="text" value="" size="30"/><br>
    Your email:<br>
    <input name="email" type="text" value="" size="30"/><br>
    Subject:<br>
        <input name="subject" type="text" value="" size="30"/><br>
    Your message:<br>
    <textarea name="message" rows="7" cols="30"></textarea><br>
    <input type="submit" value="Send email"/>
    </form>
    <?php
    }
else                /* send the submitted data */
    {
    $name=$_POST['name'];
    $email=$_POST['email'];
    $subject=$_POST['subject'];
    $message=$_POST['message'];
    if (($name=="")||($email=="")||($message==""))
        {
		echo "error";
	    }
    else{
	    $from="From: $name<$email>\r\nReturn-path: $email";
		mail("estevez@asesordeseguros.com.ar", "asesordeseguros.com.ar :: $subject", $message, $from);
		echo "success";
	    }
    }
?>
