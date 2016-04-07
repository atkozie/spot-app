<?php

/*
config.php
provides a place to put all configuration info for our app.
*/

include 'credentials.php'; //stores database login info
include 'common.php'; //stores our functions
include 'MyAutoLoader.php'; //loads class that autoloads all classes in include folder

define('DEBUG',TRUE); #we want to see all errors

date_default_timezone_set('America/Los_Angeles'); #sets default date/timezone for this website


//Here we create a constant to identify the name of the page.
define('THIS_PAGE',basename($_SERVER['PHP_SELF']));

$nav1['index.php'] = "Home";
$nav1['vinyl_list.php'] = "Vinyl";
$nav1['compound.php'] = "Compound";
$nav1['contact.php'] = "Contact";


/* use the following path settings for placing all code in one application folder */ 
define('VIRTUAL_PATH', 'http://www.adamkozie.com/itc240/spot/'); # Virtual (web) 'root' of application for images, JS & CSS files

define('PREFIX', 'spot_'); #Adds uniqueness to your DB table names.  Limits hackability, naming collisions. "spot_" is our prefix name in this project, we change this as needed to echo across the entire project.

define('ADMIN_PATH', VIRTUAL_PATH); # Path to Admin files: could change to https://, etc.

define('PHYSICAL_PATH', '/home/adakoz1/adamkozie.com/itc240/spot/'); # Physical (PHP) 'root' of application for file & upload reference

define('INCLUDE_PATH', PHYSICAL_PATH . 'includes/'); # Path to PHP include files - INSIDE APPLICATION ROOT

/* these bits caused headers already sent errors...
header("Cache-Control: no-cache");
header("Expires: -1");#Helps stop browser & proxy caching
*/

ob_start();//prevents header errors


//here's where we switch the title for different pages:
switch (THIS_PAGE)
{
        case "index.php";
        $title = "Home Page Title";
        $pageID = "Home Page";
        break;
        
         case "vinyl_list.php";
        $title = "Vinyl List Page Title";
        $pageID = "Vinyl List Page";
        break;
        
        case "compound.php";
        $title = "Compound Page Title";
        $pageID = "Compound Page";
        break;
        
        case "contact.php";
        $title = "Contact Page Title";
        $pageID = "Contact Page";
        break;
        
        default:
        $title = THIS_PAGE;
        $pageID = "";       
}


/*if(startSession() && isset($_SESSION['AdminID']))
{#add admin logged in info to sidebar or nav
	$adminWidget = '<li><a href="' . ADMIN_PATH . 'admin_dashboard.php">ADMIN</a></li>';
	$adminWidget .= '<li><a href="' . ADMIN_PATH . 'admin_logout.php">LOGOUT</a> ';
    $adminWidget .= '<li>' . $_SESSION['Privilege'] . ' <b>' . $_SESSION['FirstName'] . '</b> is logged in. </li>';
}else{
    $adminWidget = '';
}
*/

/*
 * These variables, when added to the header.php and footer.php files, 
 * allow custom JS or CSS scripts to be loaded into <head> element and 
 * just before the closing body tag, respectively
 */
$loadhead = '';
$loadfoot = '';