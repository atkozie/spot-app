<?php

/*

index.php
A pretend index file for the app

*/

?>

<?php include 'includes/config.php'; ?>

<?php include 'includes/header.php'; ?>

<div class="centered">
<h1>Spot Template App</h1>
<p><a href="vinyl_list.php">Here </a>is my vinyl list page</p>
<p><a href="contact.php">Here </a>is my simple email form</p>
<p>And <a href="compound.php">here </a>is my compound email form</p>
    <br />
    <br />
    <p>And it's 
<?php if(isset($_GET['today'])) {



	 switch ($_GET['today']) {
		   case Sunday:
		   	echo "Sunday, so here is your meaningless chunk of old Latin text for the day:</p>
			<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem apeiam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur?";
			break;
		   case Monday:
		   	echo "Monday, so here is your meaningless chunk of old Latin text for the day:</p>
			<p>Illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.";
			break;
			 case Tuesday:
		   	echo "Tuesday, so here is your meaningless chunk of old Latin text for the day:</p>
			<p>Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur?";
			break;
			 case Wednesday:
		   	echo "Wednesday, so here is your meaningless chunk of old Latin text for the day:</p>
			<p>Qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit.";
			break;
			 case Thursday:
		   	echo "Thursday, so here is your meaningless chunk of old Latin text for the day:</p>
			<p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.";
			break;
			 case Friday:
		   	echo "Friday, so here is your meaningless chunk of old Latin text for the day:</p>
			<p>Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur";
			break;
			 case Saturday:
		   	echo "Saturday, so here is your meaningless chunk of old Latin text for the day:</p>
			<p>sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro.";
			break; 
	   }
} else {
	
	
	$today = date("l");  
 
	   switch ($today) {
		   case Sunday:
		   	echo "Sunday, so here is your meaningless chunk of old Latin text for the day:</p>
			<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem apeiam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur?";
			break;
		   case Monday:
		   	echo "Monday, so here is your meaningless chunk of old Latin text for the day:</p>
			<p>Illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.";
			break;
			 case Tuesday:
		   	echo "Tuesday, so here is your meaningless chunk of old Latin text for the day:</p>
			<p>Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur?";
			break;
			 case Wednesday:
		   	echo "Wednesday, so here is your meaningless chunk of old Latin text for the day:</p>
			<p>Qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit.";
			break;
			 case Thursday:
		   	echo "Thursday, so here is your meaningless chunk of old Latin text for the day:</p>
			<p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.";
			break;
			 case Friday:
		   	echo "Friday, so here is your meaningless chunk of old Latin text for the day:</p>
			<p>Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur";
			break;
			 case Saturday:
		   	echo "Saturday, so here is your meaningless chunk of old Latin text for the day:</p>
			<p>sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro.";
			break; 
	   }
}
	   ?></p>
</div>

	
	<?php include 'includes/footer.php'; ?>