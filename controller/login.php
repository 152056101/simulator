<?php
/**
 * Created by PhpStorm.
 * User: gray
 * Date: 2018/5/14
 * Time: 上午11:35
 */
include_once "../class/Database.php";
$conn = Database::getConnection();

$phone = $_POST['phone'];
$password = $_POST['password'];
$password = md5($password);


$sql_count = "SELECT  COUNT(user_phone) FROM `user` WHERE user_phone='$phone'";
$result_count = $conn->query($sql_count);

if ($result_count->fetch_row()[0] == 0) {
    echo "该用户不存在";
} else {
    $sql = "SELECT user_password FROM user WHERE user_phone='$phone'";
    $result = $conn->query($sql);
    $form_password = $result->fetch_row()[0];
    if($form_password == $password)
    {
        echo "登陆成功";
    }
    else
    {
        echo "登陆失败";
    }
}
