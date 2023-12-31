<?php
include_once('database.php');

    class Address{

        public $id;
        public $user_id;
        public $street;
        public $house_number;
        public $postal_code;
        public $city;
        private $db;
     
	
    public function __construct() {
       
        $this->db= new Database;
    }


    public function create( $user_id, $street, $house_number, $postal_code, $city, $type){

            $param = [ ':uuser_id'=> $user_id,
                        ':ustreet'=> $street,
                        ':uhouse_number'=> $house_number,
                        ':upostal_code '=> $postal_code,
                        ':ucity '=> $city,
                        ':utype '=> $type,
         ];
            $query = $this->db->query('INSERT INTO address(user_id, street, house_number, postal_code, city, type) 
            VALUES (:uuser_id, :ustreet, :uhouse_number, :upostal_code, :ucity, :utype )', $param, true);
   
            return $query;
        }

    public function get($id){

        $param = [':uid' => $id

    ];
        $query = $this->db->query('SELECT *  FROM address WHERE id = :uid', $param );
        
         return $query;
    }

    public function getAll(){

        $query = $this->db->query('SELECT * FROM address');

        return $query;

        
    }
       

    

    }





?>