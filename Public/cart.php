<?php require_once("../resources/config.php"); ?>

<?php
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }

    if(isset($_GET['add'])){
        //to test this echo in index.php
//        gets the product id and incriments by 1
//        $_SESSION['product_' . $_GET['add']] += 1;
//        redirect("index.php");
        
        $query = query("SELECT * FROM products WHERE product_id=" . escape_string($_GET['add']) . " ");
        confirm($query);
        
        while($row = fetch_array($query)){
            if($row['product_quantity'] != $_SESSION['product_' . $_GET['add']]){
                $_SESSION['product_' . $_GET['add']] += 1;
                redirect("checkout.php");
            }else{
                set_message("We only have " . $row['product_quantity'] . " " . $row['product_title'] . " available!");
                redirect("checkout.php");
            }
        }
    }


    if(isset($_GET['remove'])){
        $_SESSION['product_' . $_GET['remove']]--;
        
        if($_SESSION['product_' . $_GET['remove']] < 1){
            redirect("checkout.php");
        }else{
            redirect("checkout.php");
        }
    }


    if(isset($_GET['delete'])){

        $_SESSION['product_' . $_GET['delete']] = '0';
        redirect("checkout.php");
    }
?>