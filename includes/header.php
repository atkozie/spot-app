<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="assets/ico/favicon.png">

    <title><?=$title?></title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="assets/css/main.css" rel="stylesheet">


    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  <?=$loadhead;?>
    </head>

  <body>

    <!-- Fixed navbar -->
    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">SP<i class="fa fa-circle"></i>T</a>
             <?
		  switch (THIS_PAGE)
{
        case "index.php";
        echo '<img src="assets/img/1.gif" alt="Home Page gif">';
        break;
        
        case "vinyl_list.php";
        echo '<img src="assets/img/2.gif" alt="Vinyl List Page gif">';
        break;
		
		case "compound.php";
        echo '<img src="assets/img/3.gif" alt="Compound Page gif">';
        break;
        
        case "contact.php";
        echo '<img src="assets/img/4.gif" alt="Contact Page gif">';
        break;
        
    default:
        $title = THIS_PAGE;
        $pageID = "";
		
	
        
        
}
		  ?>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
              <?/*=makeLinks($nav1)*/?>
            
               <ul class="nav navbar-nav navbar-right">
            <li><a class="<?php if ($pageID == 'Home Page') {print 'on'; } ?>" href="index.php">HOME</a></li>
                   <li><a class="<?php if ($pageID == 'Vinyl Page') {print 'on'; } ?>"href="vinyl_list.php">VINYL</a></li>
                   <li><a class="<?php if ($pageID == 'Contact Page') {print 'on'; } ?>"href="contact.php">CONTACT</a></li>
            <li><a class="<?php if ($pageID == 'Compound Page') {print 'on'; } ?>"href="compound.php">COMPOUND</a></li>
          </ul>
              
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>

	<div id="headerwrap">
		<div class="container">
			<div class="row centered">
				<div class="col-lg-8 col-lg-offset-2">
				<h1>Adam Kozie's</h1>
				<h2><?=$pageID?></h2>
				</div>
			</div><!-- row -->
		</div><!-- container -->
	</div><!-- headerwrap -->
<!--header ends here-->
<?=showFeedback();?>