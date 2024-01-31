<?php
    /* CLASSE PRODOTTI */
    class Products{
        public $name;
        public $price;
        public $type;
        
    
    function __construct($_name, $_price, $_type){
        $this->name = $_name;
        $this->price = $_price;
        $this->type = $_type;
        
        
        }
        public function getRaceAsString(){
            $race = [];
            foreach($this->type as $type){
                array_push($race, $type->type );
            }
            $race_string = implode(" / ", $race);
            return  $race_string;
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
        public $weight;
        public $image;

        function __construct($_name, $_price, $_type,  $_size, $_image, $_weight){
            parent::__construct($_name, $_price, $_type);
            $this->size = $_size;
            $this->image = $_image;
            $this->weight = $_weight;
        } 
    }
    class Accessory extends Products{
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


    $animal_1 = new Animal ("Cani");
    $animal_2 = new Animal ("Gatti");
    $animal_3 = new Animal ("Pesci");
    $animal_4 = new Animal ("Uccelli");

    $cibo_1 = new Feed ("Royal canin mini adult", 10.99, [$animal_1], "Adulto", "<img src=https://arcaplanet.vtexassets.com/arquivos/ids/284621/Mini-Adult.jpg?v=638182891693570000>", "750g");
    $cibo_2 = new Feed ("chip chip", 10.98, [$animal_4], "Qualsiasi", "<img src=https://arcaplanet.vtexassets.com/arquivos/ids/245173/almo-nature-holistic-cane-adult-medium-pollo-e-riso.jpg>" ,"200g");
    
    $cuccia_1 = new AnimalHouse ("Cuccia comfy", 50.99, [$animal_1, $animal_2], "50cm x 70cm", "Gomma");
    $cuccia_2 = new AnimalHouse ("Bolla premium", 20.95, [$animal_3], "70cm", "Vetro");
    $cuccia_3 = new AnimalHouse ("Gabbia Deluxe ", 15.99, [$animal_4], "100cm x 40cm", "Ferro");

    $giocattolo_1 = new Accessory ("osso che suona al morso", 5.99, $animal_1, "Media");
    $cuccie = [
        $cuccia_1,
        $cuccia_2,
        $cuccia_3,

    ];
    $feeds = [
        $cibo_1,
        $cibo_2,
    ];

    
/*     echo "Lista cuccie";
    foreach ($cuccie as $cuccia_animali){
        echo
        "<ul>" .
        "<li>". "Nome articolo:". " " .$cuccia_animali->name ."<br>". "Prezzo:". " " .$cuccia_animali->price ."<br>" ."Per che animale è? : ". " " .$cuccia_animali->getRaceAsString() ."<br>" . "Grandezza: " .$cuccia_animali->dimension . "<br>". "Materiale: " .$cuccia_animali->material."</li>" 
        ."</ul>";
    }

    echo "Lista cibo";
    foreach ($feeds as $cibo_animali){
        echo
        "<ul>" .
        "<li>". "Nome articolo:". " " .$cibo_animali->name ."<br>". "Prezzo:". " " .$cibo_animali->price ."<br>" ."Per che animale è? : ". " " .$cibo_animali->getRaceAsString() ."<br>" . "Fascia d'eta a cui somministrare: " .$cibo_animali->size . "<br>". "Peso prodotto: " .$cibo_animali->weight."</li>" 
        ."</ul>";
    } */
    ?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    </body>
    <?php  
    foreach ($feeds as $cibo_animali){
        echo
        "<div class=card>" . "Nome articolo:". " " .$cibo_animali->name ."<br>". $cibo_animali->image ."Prezzo:". " " .$cibo_animali->price ."<br>" ."Per che animale è? : ". " " .$cibo_animali->getRaceAsString() ."<br>" . "Fascia d'eta a cui somministrare: " .$cibo_animali->size . "<br>". "Peso prodotto: " .$cibo_animali->weight 
        ;
    } ?>
        </html>
