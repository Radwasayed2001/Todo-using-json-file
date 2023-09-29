<?php
session_start();
include('./core/functions.php');
if (!isset($_SESSION['auth'])) {
    redirect('./index.php');
    die;
  }
if ($_SERVER['REQUEST_METHOD'] == "GET") {
    if (isset($_GET['id'] ))
    {
        
        $allData = json_decode(file_get_contents('./data2.json'),true);

        unset($allData[$_SESSION['auth']['username']][$_GET['id']]);

        $allData[$_SESSION['auth']['username']] = array_values($allData[$_SESSION['auth']['username']]);
        file_put_contents('./data2.json', json_encode($allData));
        $_SESSION['success'] = "Deleted success";
        redirect('./allTasks.php');
        die;
    }
    else {
        redirect('index.php');
        die;
    }
}
else {
    redirect('index.php');
    die;
}