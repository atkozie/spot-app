<?php include 'includes/config.php'; ?>

<?php include 'includes/header.php'; ?>

<div class="centered">
        <h3>Contact Us</h3>

    <?php
    
    if (isset($_POST['Email']))
{   
    $to = "atkozie@gmail.com";
    $subject = "compound contact form from spot app";
    $replyTo = $_POST['email'];
    $content = '
    <p><b>Name:</b></p>
    <p>' . $_POST['Name'] . '</p>
    <p><b>Email:</b></p>
    <p>' . $_POST['Email'] . '</p>
    <p><b>Favorite Media Format:</b></p>
    <p>' . $_POST['Format'] . '</p>
    <p><b>Music Genres:</b></p>
    <p>' . $_POST['Genre'] . '</p>
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
    echo'<form action="compound.php" method="post">
<fieldset>

<label>NAME</label>
<input type="text" name="Name" required placeholder="Required">

     <br />
     <br />
    
<label>EMAIL</label>
<input type="email" name="Email" required placeholder="Enter a valid email address" >

     <br />
     <br />

    
<label>FAVORITE MEDIA FORMAT</label>
<p><input type="radio" name="Format" value="vinyl">Vinyl</p>
<p><input type="radio" name="Format" value="cassette">Cassette</p>
<p><input type="radio" name="Format" value="cd">CD</p>
<p><input type="radio" name="Format" value="mp3">MP3</p>

     <br />
    
<label>MUSIC GENRES YOU LISTEN TO</label>
<p><input type="checkbox" name="Genre[]" value="rock">Rock</p>
<p><input type="checkbox" name="Genre[]" value="jazz">Jazz</p>
<p><input type="checkbox" name="Genre[]" value="hiphop">Hip Hop</p>
<p><input type="checkbox" name="Genre[]" value="classical">Classical</p>
<p><input type="checkbox" name="Genre[]" value="pop">Pop</p>
<p><input type="checkbox" name="Genre[]" value="world">World</p>
<p><input type="checkbox" name="Genre[]" value="other">Other</p>

     <br />
    
</select>

<label>COMMENTS</label>
<textarea name="Comments" rows="10"></textarea>
    
    <br />  <br />

<input type="submit" name="submit" value="SEND">
          <br />

</fieldset>
</form>
</div>';
    }
      ?>

	<?php include 'includes/footer.php'; ?>