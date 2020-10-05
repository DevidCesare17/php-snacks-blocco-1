<?php

  $matches = [
    "Partita_1" => [
      "team_casa" => "Universo Treviso",
      "team_ospite" => "Trento",
      "punt_casa" => 84,
      "punt_ospite" => 80
    ],
    "Partita_2" => [
      "team_casa" => "Virtus Roma",
      "team_ospite" => "Fortitudo Bologna",
      "punt_casa" => 81,
      "punt_ospite" => 76
    ],
    "Partita_3" => [
      "team_casa" => "Varese",
      "team_ospite" => "Brescia",
      "punt_casa" => 94,
      "punt_ospite" => 89
    ],
    "Partita_4" => [
      "team_casa" => "Reggiana",
      "team_ospite" => "Olimpia Milano",
      "punt_casa" => 71,
      "punt_ospite" => 87
    ],
  ];

  for ($i=1; $i < count($matches) + 1; $i++) {
    $teamCasa = $matches[Partita_.$i][team_casa];
    $teamOspite = $matches[Partita_.$i][team_ospite];
    $puntCasa = $matches[Partita_.$i][punt_casa];
    $puntOspite = $matches[Partita_.$i][punt_ospite];

    $partita = $teamCasa." - ".$teamOspite." | ".$puntCasa." - ".$puntOspite."<br>";
    echo($partita);
  }

?>
