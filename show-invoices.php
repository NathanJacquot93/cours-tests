<?php 

require "vendor/autoload.php";

$invoiceList = [/*..*/];

foreach ($invoiceList as $invoice) {
    echo $invoice->getTotal();
}

//Test ajout de ligne dans la branche dev

?>