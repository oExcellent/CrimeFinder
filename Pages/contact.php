
<?php 
//set my title
$title = 'Contact Max Walters';
$header = '';
/*
 * include start structure
 */
include('../Structure/Header.php');

if(isset($_POST['name'])){
	$stripped = htmlentities($_POST['name']);
	$name = $stripped;
}

if(isset($_POST['email'])){
	
	
	$userEmail = htmlentities($_POST['email']);
	$start = "From: $userEmail \r\n";
}

if(isset($_POST['Subject'])){
	$subject = htmlentities($_POST['Subject']);
}

if(isset($_POST['Body'])){
	$message = htmlentities($_POST['Body']);
}


$errors = 0;
?>







<br><br>
<form action="<?php  echo $_SERVER['PHP_SELF'] ?>" method="POST" class = "myFormArea">


<h1>Contact Max 
<span>Please fill all the texts in the fields.</span>
    </h1>
<label for="name">
            <span <?php if( isset($_POST['SendEmail']) && empty($_POST['name'])){
	
	 echo 'class = "error"';
	
		$errors++;
		
            }else{
            	echo 'class = "plain"';
            }
	?> >Your name :</span>





<input class="tb" type="text"  id="name" name="name" <?php  if($errors >= 1 || isset($_POST['SendEmail'])){

echo 'value = "' . $name . '"'; 
 				
}?>>
</label>



<label for="email">

        <span 
        
<?php if( isset($_POST['SendEmail']) && empty($_POST['email'])){
	
	 echo 'class = "error"';
	
		$errors++;
		
}else{
	echo 'class = "plain"';
}?> 
	>Your email :</span>


<input class="tb" type="email"  id="email" name="email" <?php  if($errors >= 1 || isset($_POST['SendEmail'])){

echo 'value = "' . $userEmail . '"';
 				
}?>>
</label>



<label for="Subject">

        <span <?php if( isset($_POST['SendEmail']) && empty($_POST['Subject'])){
	
	 echo 'class = "error"';
	
		$errors++;
		
        }else{
        	echo 'class = "plain"';
        }?> >Subject :</span>



<input class="tb" type="text"  id="Subject" name="Subject" <?php  if($errors >= 1 || isset($_POST['SendEmail'])){

echo 'value = "' . $subject . '"';
 				
}?>>
</label>


<label for="Body">

       <span <?php if( isset($_POST['SendEmail']) && empty($_POST['Body'])){
	
	 echo 'class = "error"';
	
		$errors++;
		
       }else{
       	echo 'class = "plain"';
       }?>>Message :</span>


<textarea class="tb" name="Body" id="Body" placeholder="Hi Max.." style="height:200px"><?php  if($errors >= 1 || isset($_POST['SendEmail'])){

echo  $message ;
 				
}?></textarea>

</label>

<br>
<input class="button"  type="submit" name="SendEmail" value="Send" id="SendEmail" >
</form>



<?php 
$adminEmail = 'Max@devmw.com';

if (isset($_POST['SendEmail']) && $errors == 0){
	mail($adminEmail,$subject,$message,$start . ' ' . $name . ' said ');
	mail($userEmail,'Email Received, Thank you!',$message,'Your email read ' . $start . ' ' . $name . ' said, ');
	echo '<p id="suc" class="Success">Email sent, you should recieve confirmation shortly!</p>';
}

elseif(isset($_POST['SendEmail']) && $errors >= 1){
	echo '<p id="err" class="error">Email not sent, please review errors</p>';
}


?>






<?php 


echo '<br>';
/*
 * include end structure
 */
include('../Structure/Footer.php');


?>