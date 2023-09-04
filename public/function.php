<?php
define('DBNAME', 'C:/xampp/htdocs/group_task/public/db.txt');
$users = json_decode(file_get_contents(DBNAME), true);

if (isset($_POST['sign_up'])) {
    $name = $_POST['name'] ?? '';
    $user = $_POST['user'] ?? '';
    $password = $_POST['password'] ?? '';

    if ((!empty($name) && $name != '') && (!empty($user) && $user != '') && (!empty($password) && $password != '')) {
        $user = array(
            'name' => $name,
            'user' => $user,
            'password' => $password,
        );
        array_push($users, $user);
    }
    file_put_contents(DBNAME, json_encode($users));
    header("location: sign_in.php");
}
if(isset($_POST['sign_in'])){
    $user_name = $_POST['user'] ?? '';
    $password = $_POST['password'] ?? '';
    foreach ($users as $user) {
        if($user['user'] === $user_name && $user['password'] === $password){
            header('location: userlist.php?task=success');
        }else{
            header('location: userlist.php?task=error');
        }
    }


}
