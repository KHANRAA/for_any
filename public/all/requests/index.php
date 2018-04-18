<?php require_once('../../../private/initialize.php');?>

<?php $page_title='Requests';?>

<?php
$id=isset($_GET['id']) ? $_GET['id'] : '1';

$result=find_student_by_id($id);
$request=find_requests_by_id($result['id']);

?>
<?php $page_title='Show Page';?>
<?php include(SHARED_PATH . '/home_header.php');?>
    <div id="content">

        <a class="back-link" href="<?php echo url_for('/all/index.php');?>">&laquo;Back to List</a>

        <div class="Request  show">
            <h1>ID: <?php echo h($result['id']); ?></h1>
            <div class="attributes">
                <dl>
                    <dt>Name</dt>
                    <dd><?php echo h($request['name']);?></dd>
                </dl>
                <dl>
                    <dt>Request</dt>
                    <dd><?php echo h($request['section']); ?></dd>

                </dl>
                <dl>
                    <dt>Status</dt>
                    <td><?php echo $request['status']==1 ? 'true' : 'false';?></td>
                </dl>
            </div>
        </div>

    </div>

<div id="content">
    <a class="action" href="<?php echo url_for('/staff/subjects/edit.php?id=' . h(u($subject['id'])));?>">Edit</a>

</div>

<?php include(SHARED_PATH . '/staff_footer.php');?>