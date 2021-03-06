<?php require_once("../../Resources/config.php"); ?>
<?php include(TEMPLATE_BACK . DS . "header.php"); ?>

<!--//checks to see it a session is created to allow access to admin-->
<?php 
    if(!isset($_SESSION['username'])){
        redirect("../../public");
    }
?>

        <div id="page-wrapper">

            <div class="container-fluid">

                
                
                <?php 
                    //echo $_SERVER['REQUEST_URI'];
                    //echo __DIR__;
                
                if($_SERVER['REQUEST_URI'] == "/SpudsHQ/public/admin/" || $_SERVER['REQUEST_URI'] == "/SpudsHQ/public/admin/index.php"){
                    include(TEMPLATE_BACK . DS . "admin_content.php");
                }
                
                if(isset($_GET['orders'])){
                    include(TEMPLATE_BACK . DS . "orders.php");
                }
                
                if(isset($_GET['categories'])){
                    include(TEMPLATE_BACK . DS . "categories.php");
                }
                
                if(isset($_GET['products'])){
                    include(TEMPLATE_BACK . DS . "products.php");
                }
                
                if(isset($_GET['add_product'])){
                    include(TEMPLATE_BACK . DS . "add_product.php");
                }
                
                if(isset($_GET['edit_product'])){
                    include(TEMPLATE_BACK . DS . "edit_product.php");
                }
                if(isset($_GET['users'])) {
                    include(TEMPLATE_BACK . "/users.php");
                }
                if(isset($_GET['add_user'])) {
                    include(TEMPLATE_BACK . "/add_user.php");
                }
                if(isset($_GET['edit_user'])) {
                    include(TEMPLATE_BACK . "/edit_user.php");
                }
                if(isset($_GET['reports'])) {
                    include(TEMPLATE_BACK . "/reports.php");
                }
                
                ?>

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

<?php include(TEMPLATE_BACK . DS . "footer.php"); ?>

