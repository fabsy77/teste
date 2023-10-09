<?php
include_once('database.php');

    class Order{

        public $id;
        public $user_id;
        public $payment_type_id;
        public $address_id;
        public $db;


        public function __construct() {
            $this->db = new Database;
        }
        //cart_id	credit_card_id	payment_type_id
        public function create( $cart_id, $credit_id, $payment_type_id){

            $param = [ ':ucart_id'=> $cart_id,
                       ':ucredit_card_id'=> $credit_id,
                       ':upayment_type_id'=> $payment_type_id
         ];
   
            $query = $this->db->query('INSERT INTO orders(cart_id, credit_card_id, payment_type_id) 
            VALUES (:ucart_id, :ucredit_card_id, :upayment_type_id)', $param, true);
   
            return $query;
        }

        // get all Products with the parameter  ID
        public function get($id){

            $param = [':uid' => $id];

            $query = $this->db->query('SELECT * FROM orders WHERE id = :uid', $param);

            return $query;
        }
        //get all Prodcucts
        public function getAll(){

            $query = $this->db->query('SELECT * FROM orders');

            return $query;

        }


     
	


     


    }





?>