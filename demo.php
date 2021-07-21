<?php

    require 'vendor/autoload.php';

    $client = new MongoDB\Client;

    $empdb = $client -> empdb;

    $result = $empdb -> createCollection('title');

    var_dump($result);