<?php
    require 'vendor/autoload.php';
    $client = new MongoDB\Client;
    $companydb = $client -> companydb;
    $empcollection = $companydb -> empcollection;

//    $deleteResult = $empcollection -> deleteOne(
//        ['_id' => '4']
//    );

    $deleteResult = $empcollection -> deleteMany(
        ['skill' => 'php']
    );

    printf("Deleted %d documents ",$deleteResult -> getDeletedCount());
