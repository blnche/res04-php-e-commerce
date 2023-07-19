<?php
    $dbName = "blanchepeltier_e-commerce";
    $port = "3306";
    $host = "db.3wa.io";
    $username = "blanchepeltier";
    $password = "6df6213ed1bccc46589270829cdb7338";
    
    
     require "entities/Address.php";
     require "entities/Order.php";
     require "entities/Product.php";
     require "entities/Product_Category.php";
     require "entities/User.php";
     
    require "managers/AbstractManager.php";
    require "managers/UserManager.php";
    require "managers/OrderManager.php";
    require "managers/Product_CategoryManager.php";
    require "managers/ProductManager.php";
    
    require "controllers/AbstractController.php";
    require "controllers/Product_CategoryController.php";
    require "controllers/ProductController.php";
    require "controllers/UserController.php";
    
    
    $userController = new UserController();
    $product_CategoryController = new Product_CategoryController();
    require "core/router.php";