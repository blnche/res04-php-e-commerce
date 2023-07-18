<?php
    
    require "AbstractController.php";
    
    class ProductController extends AbstractController
    {
        public function productCategoriesIndex()
        {
            $products_categories_list = $this->manager->getAllProductsCategories();
            
            $this->render("products/read-products", $products_categories_list)
        }
    }
?>