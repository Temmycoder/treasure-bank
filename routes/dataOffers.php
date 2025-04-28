<?php
require_once 'controllers/DataOffersController.php';
$data = new DataOffersController();
$dataOffers = $data->read();