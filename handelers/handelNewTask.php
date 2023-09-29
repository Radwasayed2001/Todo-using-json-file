<?php
session_start();
include("../core/functions.php");
include("../core/validation.php");
if(checkRequestMethod('POST') && checkPostInput('newTask')) {
    $errors = [];
    $allData = json_decode(file_get_contents('../data2.json'),true);
    foreach($_POST as $key=>$value) {
        $$key = sanitizeInput($value);
    }
    if (requiredVal($newTask))
    {
        $errors['newTask']="Task Is Requied";
    }
    
    if (!empty($errors)) {
        $_SESSION['errors'] = $errors;
        redirect('../add.php');
        die;
    }
    else{
        $allData[$_SESSION['auth']['username']][] = $newTask;
        file_put_contents('../data2.json',json_encode($allData));
        $_SESSION['success']= "Added";
        redirect('../allTasks.php');
        die;
    }
}