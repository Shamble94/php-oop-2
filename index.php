<?php
    /* CLASSE PRODOTTI */
    class Products{
        public $name;
        public $price;
        public $type;
        public $image;
        
    /* COSTRUTTO DELLA CLASSE PRODOTTI */
    function __construct($_name, $_price, $_type, $_image){
        $this->name = $_name;
        $this->price = $_price;
        $this->type = $_type;
        $this->image = $_image;
        
        
        }
        /* FUNZIONE PER CONVERTIRE IN STRINGA L'ARRAY */
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
        /* COSTRUTTO CLASSE ANIMAL */
        function __construct($_type){
            $this->type = $_type;
        }
    }

    /* CLASSE CIBO */
    class Feed extends Products{
        public $weight;
        /* COSTRUTTO CLASSE CIBO */
        function __construct($_name, $_price, $_type, $_image,  $_weight){
            /* RICHIAMO COSTRUTTO CLASSE PADRE */
            parent::__construct($_name, $_price, $_type, $_image);
           
            $this->weight = $_weight;
        } 
    }
    /* CLASSE ACCESSORI */
    class Accessory extends Products{
        public $utility;
         /* COSTRUTTO CLASSE ACCESSORI */
        function __construct($_name, $_price,  $_type, $_image, $_utility){
            /* RICHIAMO COSTRUTTO CLASSE PADRE */
            parent::__construct($_name, $_price, $_type, $_image);
            $this->utility = $_utility;
            
        }
    }   
    /* CLASSE CUCCIE */
    class AnimalHouse extends Products{
        public $dimension;
        public $material;
         /* COSTRUTTO CLASSE CUCCIE */
        function __construct($_name, $_price,  $_type, $_image ,$_dimension, $_material){
            /* RICHIAMO COSTRUTTO CLASSE PADRE */
            parent::__construct($_name, $_price, $_type, $_image);
            $this->dimension = $_dimension;
            $this->material = $_material;
        }
    }


    $animal_1 = new Animal ("Cani");
    $animal_2 = new Animal ("Gatti");
    $animal_3 = new Animal ("Pesci");
    $animal_4 = new Animal ("Uccelli");

    $accessory_1 = new Accessory ("Cartucce Filtranti per Filtro EasyCrystal", 4.99, [$animal_3], "<img src=https://arcaplanet.vtexassets.com/arquivos/ids/272741/tetra-easycrystal-filterpack-250-300.jpg>","Pulizia acquario");
    $accessory_2 = new Accessory ("Kong classic", 2.99, [$animal_1, $animal_2], "<img src=https://arcaplanet.vtexassets.com/arquivos/ids/256599/kong-classic1.jpg>","Divertimento e svago");
    $accessory_3 = new Accessory("Topini di peluche Trixie", 7.99, [$animal_2], "<img src=https://arcaplanet.vtexassets.com/arquivos/ids/223852/trixie-gatto-gioco-active-mouse-peluche.jpg>","Divertimento per i tuoi amici felini");

    $cibo_1 = new Feed ("Royal canin mini adult", 10.99, [$animal_1], "<img src=https://arcaplanet.vtexassets.com/arquivos/ids/284621/Mini-Adult.jpg?v=638182891693570000>", "750g");
    $cibo_2 = new Feed ("Almo Nature Holistic Maintenance Medium Large Tonno e Riso", 10.98, [$animal_1],  "<img src=https://arcaplanet.vtexassets.com/arquivos/ids/245173/almo-nature-holistic-cane-adult-medium-pollo-e-riso.jpg>" ,"200g");
    $cibo_3 = new feed ("Almo Nature Cat Daily Lattina", 5.99, [$animal_2], "<img src=https://arcaplanet.vtexassets.com/arquivos/ids/245336/almo-daily-menu-cat-400-gr-vitello.jpg>", " 400g" );
    $cibo_4 = new feed ("Mangime per Pesci Guppy in Fiocchi", 5.99, [$animal_3], "<img src=https://arcaplanet.vtexassets.com/arquivos/ids/272714/tetra-guppy-mini-flakes.jpg>", " 100g" );

   
    $cuccia_1 = new AnimalHouse ("Voliera Wilma in Legno", 50.99, [$animal_4], "<img src=https://arcaplanet.vtexassets.com/arquivos/ids/258384/voliera-wilma1.jpg>", "50cm x 70cm", "Legno");
 
    /* ARRAY CUCCIE */
    $cuccie = [
        $cuccia_1,

    ];
    /* ARRAY CIBI */
    $feeds = [
        $cibo_1,
        $cibo_2,
        $cibo_3,
        $cibo_4,
    ];
    /* ARRAY ACCESSORI */
    $accessori = [
        $accessory_1,
        $accessory_2,
        $accessory_3,
    ]


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
    <div class="container">
        <div class="row">

    <?php  
    /* CICLO CIBI */
    foreach ($feeds as $cibo_animali){
        echo 
        "<div class=col-6>"."<div class=card>" 
        . "Nome articolo:". " " .$cibo_animali->name  ."<br>" ."Prezzo: ".$cibo_animali->price ."<br>" ."Per che animale è? : ". 
        " " .$cibo_animali->getRaceAsString() ."<br>"."Immagine:".$cibo_animali->image . "<br>" ."Peso prodotto: " .$cibo_animali->weight
        ."</div>"."</div>"
        ;}
        /* CICLO CUCCIA */
        foreach ($cuccie as $cuccia){
            echo 
            "<div class=col-6>"."<div class=card>" 
            . "Nome articolo:". " " .$cuccia->name ."<br>" ."Prezzo:".$cuccia->price ."<br>" ."Per che animale è? : ". 
            " " .$cuccia->getRaceAsString() ."<br>"."Immagine:".$cuccia->image . "<br>" 
            ."</div>"."</div>"
            ;}
            /* CICLO ACCESSORI */
            foreach ($accessori as $accessories){
                echo 
                "<div class=col-6>"."<div class=card>" 
                . "Nome articolo:". " " .$accessories->name ."<br>" ."Prezzo:".$accessories->price ."<br>" ."Per che animale è? : ". 
                " " .$accessories->getRaceAsString() ."<br>"."Immagine:".$accessories->image . "<br>" . "Utilizzo: ". $accessories->utility
                ."</div>"."</div>"
                ;
    } ?>
        </div>
    </div>
</body>
</html>
