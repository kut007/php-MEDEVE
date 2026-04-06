<?php
$usuario = [
    [
    "usuario" => "heber",
    "perfil" => "herbinho"
  ],
  [
    "usuario" => "heber2",
    "perfil" => "herbinho2"
  ],
  [
    "usuario" => "heber3",
    "perfil" => "herbinho3"
  ]
];

foreach ($produto as $Carlos) {
    echo "usuario: " . $Carlos["usuario"] . "<br>";
    echo "perfil: " . $Carlos["perfil"] . "<br>";
}
?>