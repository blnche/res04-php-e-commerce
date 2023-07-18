<?php
    
    require_once "AbstractController.php";
    
    class Product_CategoryController extends AbstractController
    {
        private ProductManager $productManager ;
        private Product_CategoryManager $product_CategoryManager;
        
        public function __construct(){
            global $dbName;
            global $port;
            global $host;
            global $username;
            global $password;
            $this->productManager = new ProductManager($dbName, $port, $host, $username, $password);
            $this->product_CategoryManager = new Product_CategoryManager($dbName, $port, $host, $username, $password);
        }
        public function productCategoriesIndex()
        {
            if(isset($_GET["category_id"]))
            {
                $products_categories_list = $this->product_CategoryManager->getAllProductsCategories();
                $category_selected = $this->product_CategoryManager->getProductByCategoryId($_GET["category_id"]);
                $products_list = $this->product_CategoryManager->getProductsByCategoryId($_GET["category_id"]);
                
                $this->render("order/order-products", ["categories" => $products_categories_list, "products" => $products_list, "category_selected" => $category_selected]);
            }
            $products_categories_list = $this->product_CategoryManager->getAllProductsCategories();
            $products_list = $this->productManager->getAllProducts();
            
            $this->render("products/order-products", ["categories" => $products_categories_list, "products" => $products_list, "category_selected" => ""]); 
        }
    }
?>