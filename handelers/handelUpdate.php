<?php
include('../core/functions.php');
include('../core/validation.php');
session_start();
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if (isset($_SESSION['updateId']))
    {
        foreach($_POST as $key=>$value) {
            $$key = sanitizeInput($value);
        }
        if (requiredVal($editTask))
        {
            $errors['newTask']="Task Is Requied";
        }
        
        if (!empty($errors)) {
            $_SESSION['errors'] = $errors;
            redirect('../update.php');
            die;
        }
        else{
        $allData = json_decode(file_get_contents('../data2.json'),true);
        $allData[$_SESSION['auth']['username']][$_SESSION['updateId']] = $editTask;

        $allData[$_SESSION['auth']['username']] = array_values($allData[$_SESSION['auth']['username']]);
        file_put_contents('../data2.json', json_encode($allData));
        $_SESSION['success'] = "Updated success";
        redirect('../allTasks.php');
        die;
        }
    } else {
        redirect('../allTasks.php');
        die;
    }
}