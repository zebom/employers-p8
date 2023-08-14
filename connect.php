<?php

if (isset($_POST['firstname']) && isset($_POST['lastname']) && isset($_POST['subject'])    ){
	include 'db_conn.php';

//validation

function validate($data){
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;

}

// validating andinserting text to fields
$firstname = validate($_POST['firstname']);
$lastname = validate($_POST['lastname']);
$subject = validate($_POST['subject']);

//capturing errors
if (empty($firstname) || empty($lastname) || empty($subject)) {

	header ("location: contact.html"); 

} else {

	$sql = "INSERT INTO contact (firstname,lastname, subject) values ('$firstname','$lastname','$subject')";
	$result = mysqli_query($db,$sql);

	if($result){
		echo "your message was sent successfully";
	}else {
		echo "your message could not be sent successfully";
	}
}


}else {
	header ("location : contact.html");
}
?>