<?php

$data = [
  'nama' => 'Budi',
  'usia' => 17,
  'keahlian' => [
    'desain 3D',
    'desain produk',
    'desain grafis'
  ]
];
header('Content-Type: application/json; charset=utf-8');
echo json_encode($data);