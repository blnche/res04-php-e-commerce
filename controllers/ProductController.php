<?php
    
    require "AbstractController.php";
    
    class ProductController extends AbstractController
    {
        //get form data and call methode -> render/header
        
        public function getProductsByCategory ()
        {
            if ($_SERVER['REQUEST_METHOD'] == 'POST')
            {
                $formName = $_POST["formName"];
                
                if ($formName === "getProductsByCategory")
                {
                    $category_id = $this->manager->getProductCategoryById($_POST["category_id"]);
                    $products_list = $this->manager->getProductsByCategoryId($category_id);
                    
                    $this->render("products/read-products", $products_list);
                }
            }
            $this->render("products/read-products-form", []);
        }
    }
?>