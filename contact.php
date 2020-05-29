<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $from = 'From: Future-Template'; 
    $to = 'sekram07@gmail.com'; /*Replace with your email*/
    $subject = 'Future contact form is working well';

    $body = "From: $name\n E-Mail: $email\n Message:\n $message";
?>

<?php
if ($_POST['submit']) {
    if (mail ($to, $subject, $body, $from)) { 
        echo '<p>Thank you for your Email! We will contact you very soon.</p>';
    } 
	else { 
        echo '<p>Oops! An error occurred. Try sending your message again.</p>'; 
    }
}
?>

<style type="text/css">
	p{text-align:center;font-size:50px;background:#00A9E7;margin-top:30px;padding:20px;width:500px;margin:0 auto;color:#fff}
</style>