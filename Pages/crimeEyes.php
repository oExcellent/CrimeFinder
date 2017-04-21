
<?php 
//set my title
$title = 'Max Walters Demos';
//set header
$header = 'Crime Eyes';
/*
 * include start structure
 */



include('../Structure/Header.php');

if(isset($_GET['search'])){
	$search = $_GET['search'];
	$message = '<br><span>Showing results for '.$search. '.</span><br><br>';
}
$apiKey = 'AIzaSyDNUYAA2be7CgqAVaZeKhrgayiHw7rMCSM';



$call = 'https://www.googleapis.com/geolocation/v1/geolocate?key='.$apiKeygit ;



?>


<div id="sBox">
<form method="get" action="<?php echo $_SERVER['PHP_SELF'] ?>">
	
	<input type="text" name="search">
	<br>
	<input type="submit" name="sButton" value="Search">

</form>


<?php 
if (isset($message)){
	echo $message;
	echo $call;
} ?>

</div>
<br><br>


<br><br><br>


<?php 

/*
 * include end structure
 */
include('../Structure/Footer.php');


?>