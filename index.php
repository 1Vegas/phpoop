<?php

include "engine/Singleton.php";
include "engine/ProductHandler.php";
include "engine/AbstractProduct.php";
include "engine/PhysicalProduct.php";
include "engine/DigitalProduct.php";
include "engine/WeightedProduct.php";

$productHandler = ProductHandler::getInstance();

$productHandler->addProduct(new PhysicalProduct(1, "Физический продукт", 2000, 1));