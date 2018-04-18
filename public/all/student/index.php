<?php require_once('../../../private/initialize.php');?>
<?php

 $page_title= 'Student Menu'; ?>
<?php include(SHARED_PATH . '/home_header.php');?>

<div id="content">
    <div id="main_menu">

        <form>
            <div>
                <input type="text" name="section" formmethod="post">
            </div>
            <div id="operations">
                <input type="submit"  value="Search"/>
            </div>
        </form>


    </div>
</div>


function validate()
{<?php
if(is_post_request())
{
    $student=[];
    $student['email'] = isset($_POST['email']) ? $_POST['email'] : '';
    $student['password'] = isset($_POST['password']) ? $_POST['password'] : '';
    $result=login_student($student);
    if($result===true) {
        redirect_to(url_for('/student/index.php'));
    }else{
        $errors=$result;
    }
}else{
    //   redirect_to(url_for('/staff/subjects/new.php'));
}



?>
}



