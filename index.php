<?php

class Movies {
    public $name;
    public $cost;
    public $where;



function setName($name) {
    $this->name = $name;
}

function getName() {
   return $this->name;
}

function setCost($cost) {
    $this->cost = $cost;
}

function getCost() {
    return $this->cost;
}
function setWhere($where) {
    $this->where = $where;
}

function getWhere() {
    return $this->where;
}

}


$spiderman = new movies ();
$spiderman->setName ('Spiderman');
$spiderman->setCost('10.00€');
$spiderman->setWhere('Milano');

$nemo = new movies ();
$nemo->setName ('Nemo');
$nemo->setCost('8.00€');
$nemo->setWhere('Firenze');

$frozen = new movies ();
$frozen->setName ('Frozen');
$frozen->setCost('12.00€');
$frozen->setWhere('Parma');

$madagascar = new movies ();
$madagascar->setName ('madagascar');
$madagascar->setCost('5.00€');
$madagascar->setWhere('Torino');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php

echo "Name: " . $spiderman->getName();
echo "<br>";
echo "Cost: " .  $spiderman->getCost();
echo "<br>";
echo "Where: " . $spiderman->getWhere();

?>
    
</body>
</html>