<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classwork1</title>
</head>
<body>

<?php 
class vehicle {
    function __construct(private $name, private $model, private $makeYear, private $color, private $fuelType) {
    }

    public function nameAndModel() {
        return "Your Vehicles is a {$this->name} {$this->model} <br>"; 

    }
}

$car1 = new vehicle ("Tesla", "Model S", 2020, "black", "electric");
$car2 = new vehicle ("Audi", "A4", 2019, "white", "diesel");
$car3 = new vehicle ("BMW", "1", 2018, "red", "diesel");
echo $car1->nameAndModel();
echo $car2->nameAndModel();
echo $car3->nameAndModel();

class ship extends vehicle {
    function __construct($name, $model, $makeYear, $color, $fuelType, private $type, private $mast) {
        // not neccessary 
        // parent::__construct($name, $model, $makeYear, $color, $fuelType);
    }

    public function numberOfMasts() {
        return "Your Ship has {$this->mast} mast(s) <br>";
    }
}

$ship1 = new ship ("RMS Queen Mary", "Motorship", 1980, "black", "diesel", "Motorship", 0);
$ship2 = new ship ("Royal Clipper", "Sailship", 1999, "white", "none", "Sailship", 6);
$ship3 = new ship ("Pirate Ship", "Sailship", 1980, "black", "none", "Sailship", 3);
echo $ship1->numberOfMasts();
echo $ship2->numberOfMasts();
echo $ship3->numberOfMasts();

?>
</body>
</html>