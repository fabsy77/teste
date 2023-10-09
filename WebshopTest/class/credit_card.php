<?php
include_once('database.php');

    class CreditCard{

        public $id;
        public $card_owner;
        public $card_number	;
        public $card_type;
        private $db;
     
	
        public function __construct() {
       
        $this->db = new Database;
     }


     
        
	





    }





?>