
<?php
function u($string=""){
    return urlencode($string);
}
function url_for($script_path){
if($script_path[0]!='/'){
$script_path="/". $script_path;
}
return WWW_ROOT .$script_path;
}
function find_student_by_id($id)
{
    global $db;
    $sql="SELECT * FROM students ";
    $sql .="WHERE id= '" . db_esccape($db,$id) . "'";
    // echo $sql;
    $result=mysqli_query($db,$sql);
    confirm_result_set($result);
    $student=mysqli_fetch_assoc($result);
    mysqli_free_result($result);
    return $student; // returns anad assoxc array

}

function find_requests_by_id($id)
{
    global $db;
    $sql="SELECT * FROM requests ";
    $sql .="WHERE id= '" . db_esccape($db,$id) . "'";
    // echo $sql;
    $result=mysqli_query($db,$sql);
    confirm_result_set($result);
    $requests=mysqli_fetch_assoc($result);
    mysqli_free_result($result);
    return $requests; // returns anad assoxc array



}

function redirect_to($location){
    header("Location:" . $location);
    exit;
}
function is_post_request()
{
    return($_SERVER['REQUEST_METHOD']=='POST');
}
function display_errors($errors=array()){

    $output='';
    if(!empty($errors)){
        $output .="<div class=\"errors\">";
        $output .="please fix the following errors:";
        $output .="<ul>";
        foreach($errors as $error){
            $output .="<li>" . h($error) ."</li>";
        }
        $output .="</ul>";
        $output .="<div>";
    }
    return $output;
}

function h($string=""){
    return htmlspecialchars($string);}

function is_get_request()
{
    return($_SERVER['REQUEST_METHOD']=='GET');
}



    ?>