<?php

$bballPlayers = [
    ["name" => "Mugsy Bogues",
    "age"=> "32"],
    ["name" => "Michael Jordan",
    "age"=> "35"],
    ["name" => "Coby Bryant",
    "age"=> "30"]
];

?>


<html>

<body>

<?php

foreach ($bballPlayers as $player) {
echo "<h4>Name:{$player["name"]}</h4>";
echo "<h4>Age:{$player["age"]}</h4>";
}

?>

</body>

</html>

