<?php
    require 'vendor/autoload.php';

    $client = new MongoDB\Client;
    $companydb = $client -> companydb;
    $empcollection = $companydb -> empcollection;

/**
 *  Replace one Document that matches the condition
 */

    $replaceResult = $empcollection -> replaceOne(
        ["_id" => '4'],['_id' => '4','favColor' => 'red']
    );

    printf("Matched %d documents \n ",$replaceResult -> getMatchedCount());
    printf("Modified %d documents \n",$replaceResult -> getModifiedCount());

/**
 *  Update all Documents that matches the condition
 */
    $updateResult = $empcollection -> updateMany(
        ['skill' => 'php'],
        ['$set' => ['manager' => 'Tim']]
    );

    printf("Matched %d documents \n ",$updateResult -> getMatchedCount());
    printf("Modified %d documents \n",$updateResult -> getModifiedCount());

/**
 *  Update one Document that matches the condition
 */
    $updateResult = $empcollection -> updateOne(
        ['age' => '18'],
        ['$set' => ['age' => '19']]
    );

    printf("Matched %d documents \n ",$updateResult -> getMatchedCount());
    printf("Modified %d documents \n",$updateResult -> getModifiedCount());


?>