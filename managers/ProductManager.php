<?php

    require_once "AbstractManager.php";
    
    class ProductManager extends AbstractManager
    {
        private UserManager $manager;
        
        public function __construct (UserManager $manager)
        {
            $this->manager = $manager;
        }
        
        public function getAllProducts () : array
        {
            $query = $this->db->prepare("
                SELECT *
                FROM products
            ");
            $query->execute();
            
            $products = $query->fetchAll(PDO::FETCH_ASSOC);
            
            foreach($products as $product)
            {
                $new_product = new Product (
                    $product["name"],
                    $product["description"],
                    $product["price"],
                    $product["image"],
                    $product["category"]
                );
                
                $products_list[] = $new_product;
            }
            
            return $products_list;
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
            
            $products = $query->fetchAll(PDO::FETCH_ASSOC);
            
            foreach($products as $product)
            {
                $new_product = new Product (
                    $product["name"],
                    $product["description"],
                    $product["price"],
                    $product["image"],
                    $product["category"]
                );
                
                $products_list[] = $new_product;
            }
            
            return $products_list;
        }
    }
?>