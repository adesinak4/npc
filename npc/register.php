<?php

require_once "connect.php";

if(isset($_REQUEST['register'])) //button name "register"
{
	$name	= strip_tags($_REQUEST['name']);	//textbox name "txt_email"
	$email		= strip_tags($_REQUEST['email']);		//textbox name "txt_email"
	$password	= strip_tags($_REQUEST['password']);	//textbox name "txt_password"
		
	if(empty($name)){
		$errorMsg[]="Please enter your Name";	//check name textbox not empty 
	}
	else if(empty($email)){
		$errorMsg[]="Please enter email";	//check email textbox not empty 
	}
	else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
		$errorMsg[]="Please enter a valid email address";	//check proper email format 
	}
	else if(empty($password)){
		$errorMsg[]="Please enter password";	//check passowrd textbox not empty
	}
	else if(strlen($password) < 8){
		$errorMsg[] = "Password must be atleast 8 characters";	//check passowrd must be 8 characters
	}
	else
	{	
		try
		{	
			$select_stmt=$db->prepare("SELECT name, email FROM users 
										WHERE name=:name OR email=:email"); // sql select query
			
			$select_stmt->execute(array(':name'=>$name, ':email'=>$email)); //execute query 
			$row=$select_stmt->fetch(PDO::FETCH_ASSOC);	
			
			if($row["name"]==$name){
				$errorMsg[]="Sorry name already exists";	//check condition name already exists 
			}
			else if($row["email"]==$email){
				$errorMsg[]="Sorry email already exists";	//check condition email already exists 
			}
			else if(!isset($errorMsg)) //check no "$errorMsg" show then continue
			{
				$new_password = password_hash($password, PASSWORD_DEFAULT); //encrypt password using password_hash()
				
				$insert_stmt=$db->prepare("INSERT INTO users	(name,email,password) VALUES
																(:name,:email,:password)"); 		//sql insert query					
				
				if($insert_stmt->execute(array(	':name'	=>$name, 
												'email'	=>$email, 
												':password'=>$new_password))){
													
					header("Location: user/index.php"); //change destintion to index page
				}
			}
		}
		catch(PDOException $e)
		{
			echo $e->getMessage();
		}
	}
}
?>