<?php
function inc(){
	include "../incs/class_db.php";
	include "../incs/class_admin.php";
}
inc();

$adminlib = new adminlib();
$user_id = $_GET["id"];
if (isset($_POST["user_remove_action"])) {
	$adminlib->user_remove($user_id);
}

?>
<?php include 'header.php';?>
<?php include 'sidebar.php';?>
<script src="./ckeditor5-build-classic-29.1.0/ckeditor5-build-classic/ckeditor.js"></script>
 
<div id="page-wrapper">
	<div id="page-inner">
		<div class="row">
			<div class="col-md-12">
				<h2>Xóa User</h2>
			</div>
		</div>
		<!-- /. ROW  -->
		<hr />

        <form action="user_remove.php?id=<?php echo $user_id ?>" method="post">
            Bạn chắc chắn muốn xóa?<br>
        <input type="submit" name="user_remove_action" value="Xóa User" class="btn btn-success">
        </form>

<!-- /. ROW  -->
	</div>
	<!-- /. PAGE INNER  -->
</div>
<!-- /. PAGE WRAPPER  -->
</div>
<?php include 'footer.php';?>