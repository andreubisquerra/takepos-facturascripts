<?php
header('Content-Type: application/json');
$json_str = file_get_contents('php://input');
$json_obj = json_decode($json_str);
?>
{"result": [{"encoding": "ean13", "type": "price", "id": 9, "pattern": "23.....{NNNDD}", "name": "Price Barcodes 2 Decimals", "sequence": 14, "alias": "0"}, {"encoding": "any", "type": "discount", "id": 8, "pattern": "22{NN}", "name": "Discount Barcodes", "sequence": 20, "alias": "0"}, {"encoding": "ean13", "type": "weight", "id": 2, "pattern": "21.....{NNDDD}", "name": "Weight Barcodes 3 Decimals", "sequence": 36, "alias": "0"}, {"encoding": "any", "type": "client", "id": 7, "pattern": "042", "name": "Customer Barcodes", "sequence": 40, "alias": "0"}, {"encoding": "any", "type": "cashier", "id": 6, "pattern": "041", "name": "Cashier Barcodes", "sequence": 50, "alias": "0"}, {"encoding": "any", "type": "location", "id": 5, "pattern": "414", "name": "Location barcodes", "sequence": 60, "alias": "0"}, {"encoding": "any", "type": "package", "id": 3, "pattern": "PACK", "name": "Package barcodes", "sequence": 70, "alias": "0"}, {"encoding": "any", "type": "lot", "id": 4, "pattern": "10", "name": "Lot barcodes", "sequence": 80, "alias": "0"}, {"encoding": "any", "type": "product", "id": 1, "pattern": ".*", "name": "Product Barcodes", "sequence": 90, "alias": "0"}], "jsonrpc": "2.0", "id": 552338298}