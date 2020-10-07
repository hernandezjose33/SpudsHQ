<?php

//    if($connection){
//        echo "IS CONNECTED";
//    }
//    echo "from functions"





//redirects when needed
function redirect($location){
    header("Location: $location");
    
}

//
function query($sql){
    //global needed so it know to use the global variable
    global $connection;
    
    return mysqli_query($connection, $sql);
}

//
function confirm($result){
    global $connection;
    
    if(!$result){
        die("QUERY FAILED" . mysqli_error($connection));
    }
}

//used to prevent SQL injections
function escape_string($string){
    global $connection;
    
    return mysqli_real_escape_string($connection. $string);
}

function fetch_array($result){
    return mysqli_fetch_array($result);
}

// get products
function get_products(){
    $query = query(" SELECT * FROM products");
    confirm($query);
    
    while($row = fetch_array($query)){
        $product = <<<DELIMETER
            <div class="col-sm-4 col-lg-4 col-md-4">
                <div class="thumbnail">
                    <img src="http://placehold.it/320x150" alt="">
                    <div class="caption">
                        <h4 class="pull-right">{$row['product_price']}</h4>
                        <h4><a href="product.html">First Product</a>
                        </h4>
                        <p>See more snippets like this online store item at <a target="_blank" href="http://www.bootsnipp.com">Bootsnipp - http://bootsnipp.com</a>.</p>
                        <a class="btn btn-primary" target="_blank" href="http://maxoffsky.com/code-blog/laravel-shop-tutorial-1-building-a-review-system/">View Tutorial</a>
                    </div>
                </div>
            </div>
        DELIMETER;
            
        echo $product;
    }
}




























?>