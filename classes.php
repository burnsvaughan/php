    <?php
   
    class Car{

        public $doors = 4;
        public function __construct($name, $doors = 4, $color = "black"){
            $this->doors = $doors;
            $this->name = $name;
            $this->color = $color;
        }

    public function printName(){
        echo $this->name;
        }

        public function statement(){
            echo "<h1>This car is a {$this->name} and it has {$this->doors} doors. The color of it is {$this->color}<h1>";
        }
    } 

    $honda = new Car("Civic");
    $GreenHonda = new Car("Civic", 2, "Green");
    $bmw = new Car("m6", 4, "Space Grey");

    $bmw->statement();
    $honda->statement();
    $Greenhonda->statement();
    

    ?>


    <html>

    <body>

   
   
    </body>

    </html>
