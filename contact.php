<?php include 'includes/config.php'; ?>

<?php include 'includes/header.php'; ?>


<div class="centered">
    <h3>Contact Us</h3>
<?php

if (isset($_POST['Email']))
{   
    $to = "atkozie@gmail.com";
    $subject = "contact form from spot app";
    $replyTo = $_POST['email'];
    $content = '
    
    <p><b>Name:</b></p>
    <p>' . $_POST['Name'] . '</p>
    <p><b>Email:</b></p>
    <p>' . $_POST['Email'] . '</p>
    <p><b>Comments:</b></p>
    <p>' . $_POST['Comments'] . '</p>
    
    ';
    
    $response = safeEmail($to, $subject, $content, $replyTo, 'html');

    if($response)
    {
        echo '<p>Thanks for your input!</p>';
    }else{
       echo 'Trouble with HTML email!<br />'; 
    }

    
}else{
    //show form
    echo'
    <form action="contact.php" method="post">
    <p>Name: <input type="text" name="Name" required placeholder="Required" /></p>
    <p>Email: <input type="email" name="Email" required placeholder="Enter a valid email address" /></p>
    <p>Comments: <textarea name="Comments"></textarea></p>
    <p><input type="submit" value="Contact Us!" /></p>
    </form>
    ';
}

?>
</div>

	<?php include 'includes/footer.php'; ?>