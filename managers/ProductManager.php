<?php

    require_once "AbstractManager.php";
    
    class ProductManager extends AbstractManager
    {
        private UserManager $manager;
        
        public function __construct (UserManager $manager)
        {
            $this->manager = $manager;
        }
        
        public function getProductsByCategoryId (int $category_id) : array
        {
            $query = $this->db->prepare("
                SELECT *
                FROM products
                WHERE product_category_id = :category-id
            ");
            $parameters = 
            [
                "category-id" => $category_id    
            ];
            $query->execute($parameters);
            
            $products_list = $query->fetchAll(PDO::FETCH_ASSOC);
            
            return $products_list;
        }
    }
?>