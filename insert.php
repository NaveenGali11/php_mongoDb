<?php
     require 'vendor/autoload.php';

    $client = new MongoDB\Client;
    $companydb = $client -> companydb;
    $empcollection = $companydb -> createCollection('empcollection');


 ?>