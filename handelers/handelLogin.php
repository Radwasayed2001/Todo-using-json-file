<?php
session_start();
include("../core/functions.php");
include("../core/validation.php");
if(checkRequestMethod('POST') && checkPostInput('username')) {
    $errors = [];
    $allData = json_decode(file_get_contents('../data.json'),true);
    foreach($_POST as $key=>$value) {
        $$key = sanitizeInput($value);
    }
    if (requiredVal($username))
    {
        $errors['username']="username is requiered";
    }
    
    if (requiredVal($password))
    {
        $errors['password']="password is requiered";
    }
    
    if(isset($allData[$username])){
            if($allData[$username]['pass'] == sha1($password)){
                $_SESSION['success'] = "Login success";
                $data = [
                    'username' => $username,
                    'pass' => sha1($password),
                ];
                $_SESSION['auth']=$data;
                redirect('../index.php');
                die;
            }
            else
            {
                $errors['password']="password is wrong";
            }
        }
        else {
            if(!isset($errors['username']))
                $errors['username']="A user with this username does not exist";
        }
        
    if (!empty($errors)) {
        $_SESSION['errors'] = $errors;
        redirect('../login.php');
        die;
    }
}