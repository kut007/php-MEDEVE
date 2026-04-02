<?php
$contas = [
    [
    "descricao" => "divida",
    "valor" => 30,
    "tipo" => "Receber"
  ],
  [
    "descricao" => "vbucks",
    "valor" => 50,
    "tipo" => "pagar"
  ],
  [
    "descricao" => "pagamento",
    "valor" => 30,
    "tipo" => "Receber"
  ]
];

foreach ($contas as $Carlos) {
  if ($Carlos["tipo"] == "Receber") {
    echo "usuario: " . $Carlos["usuario"] . "<br>";
    echo "valor: " . $Carlos["perfil"] . "<br>";
    echo "tipo: " . $Carlos["tipo"] . "<br>";
  }
}
?>