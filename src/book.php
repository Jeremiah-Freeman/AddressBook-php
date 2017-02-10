<?php
    class Book
    {
        private $name;
        private $address;

        function __construct($name , $artist)
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

        // set functions
        function setName($new_name)
        {
            $this->name = $new_name;
        }
        function setAddress($new_address)
        {
            $this->address = $new_address;
        }


        function save() {
            array_push($_SESSION["list_of_address"] , $this);
        }

        function getAll()
        {
            return $_SESSION["list_of_address"];
        }
    }











?>
