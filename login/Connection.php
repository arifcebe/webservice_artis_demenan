<?php
define('DB_HOST','localhost');
define('DB_NAME','cebe_practice');
define('DB_USER','root');
define('DB_PASSWORD','');

require_once 'LoginModel.class.php';

$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD)
	or die('Failed to connect MySql'.mysql_error());
$db = mysql_select_db(DB_NAME,$con) or die("Failed to connect mysql ".mysql_error());

$user=$_POST['user'];
$pass=$_POST['pass'];

function signIn(){
	
	if(!empty($_POST['user'])){
		
		$query=mysql_query("SELECT * FROM user WHERE userName='$_POST[user]' AND userPass='$_POST[pass]'");
		$row = mysql_fetch_array($query);

		$loginModel = new LoginModel();

		if(!empty($row['userName']) AND !empty($row['userPass'])) {
			$_SESSION['userName'] = $row['userPass']; 

			$dataUser = new UserModel();
			$dataUser->username=$row['userName'];
			$dataUser->password=$row['userPass'];
			$dataUser->userId=$row['userId'];
		
			$loginModel->status=200;
			$loginModel->message="berhasil login";
			$loginModel->data=$dataUser;

		} else {

			$loginModel->status=201;
			$loginModel->message="Gagal login";
		}
		echo json_encode($loginModel);

	}else{
		//var_dump("empty");

		echo json_encode("error");
	}

}


if(isset($_POST['submit'])){
	//var_dump($_POST);
	//die();
	signIn();
}

?>