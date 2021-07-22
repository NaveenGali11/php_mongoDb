<?php

    require 'vendor/autoload.php';

    $client = new MongoDB\Client;

    $empdb = $client -> empdb;

    $result = $empdb -> dropCollection('title');

    var_dump($result);