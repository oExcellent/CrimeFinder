
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



$call = 'https://www.googleapis.com/geolocation/v1/geolocate?key='.$apiKey;



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


echo '<br>';
# Includes the autoloader for libraries installed with composer
#require __DIR__ . '/vendor/autoload.php';

# Imports the Google Cloud client library
//use Google\Cloud\Translate\TranslateClient;

# Your Google Cloud Platform project ID
$projectId = 'assignment8-163015';

# Instantiates a client
$translate = new TranslateClient([
    'projectId' => $projectId
]);

# The text to translate
$text = 'Hello, world!';
# The target language
$target = 'ru';

# Translates some text into Russian
$translation = $translate->translate($text, [
    'target' => $target
]);

echo 'Text: ' . $text . '
Translation: ' . $translation['text'];
/*
 * include end structure
 */
include('../Structure/Footer.php');


?>