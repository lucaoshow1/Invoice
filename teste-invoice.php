<?php
include_once 'Invoice.php';

$arroz = new Invoice
(12584,
    'Saco de Arroz 5kg',
    2,
    23.99);

echo $arroz . PHP_EOL;
echo $arroz -> getInvoiceAmount(2,23.99);