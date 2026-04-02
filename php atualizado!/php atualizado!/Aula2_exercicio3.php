<?php
$produto = [
    [
    "nome" => "produto1",
    "preço" => 30.00
  ],
  [
    "nome" => "produto2",
    "preço" => 15.00
  ],
  [
    "nome" => "produto3",
    "preço" => 27.00
  ]
];

foreach ($produto as $Carlos) {
    echo "nome: " . $Carlos["nome"] . "<br>";
    echo "preço: " . $Carlos["preço"] . "<br>";
}
?>