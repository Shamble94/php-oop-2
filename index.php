<?php

    class Products{
        public $name;
        public $price;
        public $weight;
    }
    function __construct($_name, $_price, $_weight, Animal $_type){
        $this->name = $_name;
        $this->price = $_price;
        $this->weight = $_weight;
        $this->type = $_type
    }



    class Animal{
        public $type;

        function __construct($_type){
            $this->type = $_type;
        }
    }

    class DogFeed extends Products{
        public $size;
        public $type;

        function __construct($_name, $_price, $_weight, Animal $_type, $_size, $_type){
            parent::__construct($_name, $_price, $_weight, Animal $_type);
            $this->size = $_size;
            $this->type = $_type
        }
    }
?>












<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
