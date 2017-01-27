<?php 

require "vendor/autoload.php";

$invoiceList = [/*..*/];

foreach ($invoiceList as $invoice) {
    echo $invoice->getTotal();
}

?>