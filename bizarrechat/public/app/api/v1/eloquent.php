<?php 
#print_r($_POST);
#echo json_encode($_POST['email'])
$data = file_get_contents("php://input");
$objData = json_decode($data);

$email = $objData->emails; // Get your email
#echo $email;
echo 'india';
?>


<?php 
#echo '1';
	#include 'db.php'; 
    #$user =  $UserModel::find(1);
    #var_dump($user->UserName);
?>