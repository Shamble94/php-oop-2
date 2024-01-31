<?php
    /* CLASSE PRODOTTI */
    class Products{
        public $name;
        public $price;
        public $type;
        
    
    function __construct($_name, $_price, Animal $_type){
        $this->name = $_name;
        $this->price = $_price;
        $this->type = $_type;
        
        
        }
    }
    /* CLASSE ANIMALI */
    class Animal{
        public $type;

        function __construct($_type){
            $this->type = $_type;
        }
    }
    /* CLASSE CIBO */
    class Feed extends Products{
        public $size;
        public $type;
        public $weight;

        function __construct($_name, $_price, $_size, $_weight){
            parent::__construct($_name, $_price,  $_type);
            $this->size = $_size;
            $this->weight = $_weight;
        } 
    }
    class Toy extends Products{
        public $size;

        function __construct($_name, $_price,  $_type, $_size){
            parent::__construct($_name, $_price, $_type);
            $this->size = $_size;
            
        }
    }   

    class AnimalHouse extends Products{
        public $dimension;
        public $material;

        function __construct($_name, $_price,  $_type, $_dimension, $_material){
            parent::__construct($_name, $_price, $_type);
            $this->dimension = $_dimension;
            $this->material = $_material;
        }
    }


    $animal_1 = new Animal ("Cane");
    $animal_2 = new Animal ("Gatto");
    $animal_3 = new Animal ("Pesce");


    $prodotto_2 = new Products ("royal canin plus", "10.99", $animal_1);
    var_dump($prodotto_2);
    $prodotto_1 = new AnimalHouse ("cuccia", 50.99, $animal_1, "50cm x 70cm", "Gomma");
    var_dump($prodotto_1);
    $giocattolo_1 = new Toy ("osso che suona al morso", 5.99, $animal_1, "Media");
    var_dump($giocattolo_1);
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
