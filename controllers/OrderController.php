<?php

    require_once "AbstractController.php";
  
    class OrderController extends AbstractController
    {
        private OrderManager $orderManager;
        
    
        public function __construct()
        {
            $this->orderManager = new OrderManager();
           
        }
        
        public function getOrdersByUser_id ()
        {
            if(isset($_SESSION["user_id"]))
            {
                $past_orders = $this->orderManager->getOrdersByUser_id($_SESSION["user_id"]);
                $this->render("user/read-past-orders", $past_orders);
            }
            else
            {
                header("Location:index.php?route=user-login");
            }
        }
    }
?>