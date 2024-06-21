<?php

class Movies
{
    public $name;
    public $cost;
    public $where;

    function films()
    {
        return "<strong>Film:</strong> $this->name <br> 
                <strong>Cost:</strong> $this->cost <br>
                <strong>Where:</strong> $this->where";
    }
}


$spiderman = new movies();
$spiderman->name = 'Spiderman';
$spiderman->cost = '10.00€';
$spiderman->where = 'Milano';

$nemo = new movies();
$nemo->name = 'Nemo';
$nemo->cost = '8.00€';
$nemo->where = 'Firenze';

$frozen = new movies();
$frozen->name = 'Frozen';
$frozen->cost = '12.00€';
$frozen->where = 'Parma';

$madagascar = new movies();
$madagascar->name = 'madagascar';
$madagascar->cost = '5.00€';
$madagascar->where = 'Torino';

$Movies = [$spiderman, $nemo, $frozen, $madagascar];

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

    <h1>Movies</h1>

    <ul>
        <?php foreach ($Movies as $film) { ?>
            <li class="movie"><?php echo $film->films(); ?></li>
        <?php } ?>
    </ul>

</body>

</html>