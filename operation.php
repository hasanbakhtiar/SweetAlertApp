<?php
$username = "admin";
$pass = "sweet123";
// echo $_POST['username']." ".$_POST['pass'];
if (isset($_POST['executeform'])) {
    if (empty($_POST['username'] AND $_POST['pass'])) {
        $data["status"]="info";
        $data["message"]="Please,fill in the blank fields.";
        echo json_encode($data);
    }elseif (($username == $_POST['username']) AND ($pass == $_POST['pass'])){
        $data["status"]="success";
        $data["message"]="Sign in is success!";
        echo json_encode($data);
    }else {
        $data["status"]="error";
        $data["message"]="False username and pass";
        echo json_encode($data);
    }
}


// $data["status"]="success";
// $data["message"]="Your username:{$_POST['username']} ~ Your Password:{$_POST["pass"]}";
// echo json_encode($data);
?>