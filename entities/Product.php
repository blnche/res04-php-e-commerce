<?php
    
    class Product
    {
        private ?int $id;
        private string $name;
        private string $description;
        private int $price;
        private string $image;
        private Product_Category $category;
        
        public function __construct(string $name, string $description, int $price, string $image, Product_Category $category)
        {
            $this->id = null;
            $this->name = $name;
            $this->description = $description;
            $this->price = $price;
            $this->image = $image;
            $this->category = $category;
        }
        
        public function getId () : ?int
        {
            return $this->id;
        }
        public function setId(?int $id) : void
        {
            $this->id = $id;
        }
        
        public function getName () : string
        {
            return $this->name;
        }
        public function setName (string $name) : void
        {
            $this->name = $name;
        }
        
        public function getDescription () : string
        {
            return $this->description;
        }
        public function setDescription (string $description) : void
        {
            $this->description = $description;
        }
        
        public function getPrice () : int
        {
            return $this->price;
        }
        public function setPrice(int $price) : void
        {
            $this->price = $price;
        }
        
        public function getImage () : string
        {
            return $this->image;
        }
        public function setImage (string $image) : void
        {
            $this->image = $image;
        }
        
        public function getCategory () : Product_Category
        {
            return $this->category;
        }
        public function setCategory (Product_Category $category) : void
        {
            $this->category = $category;
        }
        
    }
?>