<?php
/**
 * Created by PhpStorm.
 * User: gray
 * Date: 2018/5/14
 * Time: 下午3:13
 */
include_once "../class/Database.php";

$conn = Database::getConnection();

$phone = $_POST['phone'];
$name = $_POST['name'];
$sex = $_POST['sex'];
$birthday = $_POST['birthday'];
$height = $_POST['height'];
$weight = $_POST['weight'];

$sql = "UPDATE `user` SET user_name='{$name}', user_sex='{$sex}', user_birthday='{$birthday}', user_height='{$height}', user_weight='{$weight}' WHERE user_phone=$phone";
if($conn->query($sql) == true)
{
    echo "修改成功";
}
else
{
    echo "修改失败";
}