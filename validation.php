<?php
// Create connection
$conn=mysqli_connect("localhost","ubisoft","ubisoft2013","ubisoft");
// Check connection
if (mysqli_connect_errno($conn)) {
  	echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$current_table = 'test_guest_list';
$userEmail = Trim(stripslashes($_POST['userEmailAddress']));
$query = "SELECT * FROM $current_table WHERE email_address = '$userEmail' ";
$results = mysqli_query($conn, $query) OR die(mysqli_error($conn));
if(mysqli_num_rows($results))
	while ($userInfo = mysqli_fetch_object($results)) {
		if($userInfo->registered) {
			$response_array['status'] = 'registered';
		} else {
			$response['company'] 		= $userInfo->company;
			$response['first_name']		= $userInfo->first_name;
			$response['last_name']		= $userInfo->last_name;
			$response['email_address']	= $userInfo->email_address;
			$response['reply_to']		= $userInfo->reply_to;
			$response['registered']		= $userInfo->registered;
			$response_array['response'] = $response;
			$response_array['status'] 	= 'success';
		}
    }
else
    $response_array['status'] = 'error';
echo json_encode($response_array);
?>