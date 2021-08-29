<?php
function inc(){
	include "../incs/class_db.php";
    include "../incs/class_admin.php";

}
inc();

$adminlib = new adminlib();

$sql = "SELECT * FROM user";
$data = $adminlib->get_list($sql);;

?>

<?php include 'header.php';?>
<?php include 'sidebar.php';?>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
            <div class="row">
                <div class="col-lg-12">
                    <br>
                    <a href="register.php"><input type="button" class="btn btn-success" value="Thêm mới"></a>
                    <br>
                    <br>
                    <table class="table table-striped table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>User_id</th>
                                <th>User</th>
                                <th>Passworf</th>
                                <th>Email</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!--  -->
                        <?php
                        for($i = 0; $data != 0 && $i < count($data); $i ++) {
                            $id = $data[$i]["user_id"];
                            ?>

                            <tr>
                                <td><?php echo $data[$i]["user_id"]?></td>
                                <td><?php echo $data[$i]["username"];?></td>
                                <td><?php echo $data[$i]["password"];?></td>
                                <td><?php echo $data[$i]["email"];?></td>
                                <td><a href="user_update.php?id=<?php echo $id;?>">update</a> | <a href="user_remove.php?id=<?php echo $id;?>">remove</a></td>
                            </tr>
                        <?php
                        }
                        ?>
                        <!--  -->
                
                        <!--  -->
                        </tbody>
                    </table>
                </div>
            </div>
                
    		</div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
 <?php include 'footer.php';?>
