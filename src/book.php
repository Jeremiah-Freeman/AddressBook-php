<?php
    class Book
    {
        private $name;
        private $phone;
        private $address;

        function __construct($name , $phone ,$address)
        {
            $this->name = $name;
            $this->address = $address;

        }

        // get functions
        function getName()
        {
            return $this->name;
        }
        function getAddress()
        {
            return $this->address;
        }
        function getPhone()
        {
            return $this->phone;
        }

        // set functions
        function setName($new_name)
        {
            $this->name = $new_name;
        }
        function setAddress($new_address)
        {
            $this->address = $new_address;
        }
        function setPhone($new_phone)
        {
            $this->phone = $new_phone;
        }


        function save()
        {
            array_push($_SESSION['list_of_contacts'] , $this);
        }

        static function getAll()
        {
            return $_SESSION['list_of_contacts'];
        }

        static function deleteAll()
        {
            $_SESSION['list_of_contacts'] = array();
        }


}
?>
