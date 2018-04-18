<?php
function login_student($student)
{

    global $db;
    /*$errors=validate_page($student);
    if(!empty($errors)){
    return $errors;}*/
    $sql="SELECT password FROM students ";
    $sql .="WHERE email= '" . db_esccape($db,$student['email']) . "'";

    $result=mysqli_query($db,$sql);
    if($result===$student['password']){
        return true;
    }else
    {
        echo mysqli_errno($db);
        db_disconnect($db);
        exit;
    }



}
function insert_student($student)
{
global $db;
/*$errors=validate_page($student);
if(!empty($errors)){
return $errors;}*/
$sql="INSERT INTO students ";
$sql .="(id,name,email,section,password) ";
$sql .="values (";
$sql .="'" . db_esccape($db,$student['id']) . "',";
$sql .="'" . db_esccape($db,$student['name']) . "',";
$sql .="'" . db_esccape($db,$student['email']) . "',";
$sql .="'" . db_esccape($db,$student['section']) . "',";
$sql .="'" . db_esccape($db,$student['password']) . "'";
$sql .=")";

echo $sql;
$result=mysqli_query($db,$sql);
if($result){
return true;
}else
{
echo mysqli_errno($db);
db_disconnect($db);
exit;
}
}

?>