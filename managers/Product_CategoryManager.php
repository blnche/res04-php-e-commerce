<?php

    require_once "AbstractManager.php";
    
    class ProductManager extends AbstractManager
    {
        private UserManager $manager;
        
        public function __construct (UserManager $manager)
        {
            $this->manager = $manager;
        }
        
        public function getAllProductCategories () : array
        {
            $query = $this->db->prepare("
                SELECT *
                FROM product_categories
            ");
            $query->execute();
            $all_products_categories = $query->fetchAll(PDO::FETCH_ASSOC);
            
            return $all_products_categories;
        }
        
        public function getProductCategoryById (int $id) : Product_Category
        {
            $query = $this->db->prepare("
                SELECT *
                FROM product_categories
                WHERE id = :id
            ");
            $parameters = 
            [
                "id" => $id
            ];
            $query->execute($parameters);
            
            $result = $query->fetch(PDO::FETCH_ASSOC);
            
            $product_category = new Product_Category (
                $result["name"]
            );
            
            return $product_category;
        }
    }
?>