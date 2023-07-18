<?php
    
    require "AbstractController.php";
    
    class Product_CategoryController extends AbstractController
    {
        public function productCategoriesIndex()
        {
            if(isset($_GET["category_id"]))
            {
                $products_categories_list = $this->manager->getAllProductsCategories();
                $category_selected = $this->manager->getProductByCategoryId($_GET["category_id"]);
                $products_list = $this->manager->getProductsByCategoryId($_GET["category_id"]);
                
                $this->render("order/order-products", ["categories" => $products_categories_list, "products" => $products_list, "category_selected" => $category_selected]);
            }
            $products_categories_list = $this->manager->getAllProductsCategories();
            $products_list = $this->manager->getAllProducts();
            
            $this->render("products/order-products", ["categories" => $products_categories_list, "products" => $products_list, "category_selected" => ""]); 
        }
    }
?>