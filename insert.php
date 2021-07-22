<?php
     require 'vendor/autoload.php';

    $client = new MongoDB\Client;
    $companydb = $client -> companydb;
    $empcollection = $companydb -> empcollection;

    $insertManyResult = $empcollection -> insertMany([
        ['_id' => '2' ,'name' => 'Abcd','age' => '25','skill' => 'mongodb'],
        ['_id' => '3' ,'name' => 'Efgh','age' => '32','skill' => 'Angular'],
        ['_id' => '4' ,'name' => 'Ijkl','age' => '12','skill' => 'react']

    ]);


//    $insertOneResult = $empcollection -> insertOne(
//        ['_id' => '1' ,'name' => 'G.Naveen','age' => '18','skill' => 'php']
//    );

    printf("Inserted %d documents",$insertManyResult -> getInsertedCount());

    var_dump($insertManyResult -> getInsertedIds());
 ?>