<?php
    
    require "AbstractController.php";
    
    class Product_CategoryController extends AbstractController
    {
        public function productCategoriesIndex()
        {
            if(isset($_GET["category_id"]))
            {
                $category_selected = $this->manager->getProductByCategoryId($_GET["category_id"]);
                $products_list = $this->manager->getProductsByCategoryId($_GET["category_id"]);
                $this->render("order/order-products", ["products" => $products_list, "category_selected" => $category_selected]);
            }
            $products_categories_list = $this->manager->getAllProductsCategories();
            $this->render("products/order-products", ["categories" => $products_categories_list]);
        }
    }
?>