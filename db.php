<?php
//phpinfo();
require_once __DIR__ . "/vendor/autoload.php";

use MongoDB\Client;

$db = (new \MongoDB\Client("mongodb://127.0.0.1/"))->dbforlab;

// $cursor = $db->teams->find();

// foreach ($cursor as $document){
//     print_r($document); echo "<br>";
// }


function findByLeague($league){
    global $db;
    $cursor = $db->games->find(["league" => $league]);
    echo "<div id='content'>";
    echo "<table>";
    echo " <tr>
    <th> Team 1  </th>
    <th> Score </th>
    <th> Team 2 </th>
    </tr> ";
    foreach ($cursor->toArray() as $data) {
        echo " <tr>
        <th> {$data['Team1']}  </th>
        <th> {$data['score']} </th>
        <th> {$data['Team2']} </th>
        </tr> ";
    }
    echo "</table></div>";
}

function findPlayers($team){
    global $db;
    $cursor = $db->teams->find(
        [
            "name" => $team
        ], 
        [
            'projection'=>[
                '_id'=>0,
                'players'=>1
            ]
        ]);

    echo "<div id='content'>";
    echo "<table>";
    echo " <tr>
    <th> Players </th>
    </tr> ";

    foreach ($cursor->toArray() as $data) {
        $players = $data['players'];
        foreach ($players as $player){
            echo " <tr>
            <th> {$player} </th>
    
            </tr> ";
        }
        
    }
    echo "</table></div>";
}

function findGames($team){
    global $db;
    $cursor = $db->games->find(
        [
            '$or' => 
            array(
                array("Team1" => $team),
                array("Team2" => $team)
              )
        ], 
        [
            'projection'=>[
                '_id'=>0
            ]
        ]);

    echo "<div id='content'>";
    echo "<table>";
    echo " <tr>
    <th> Team 1  </th>
    <th> Score </th>
    <th> Team 2 </th>
    </tr> ";
    foreach ($cursor->toArray() as $data) {
        echo " <tr>
        <th> {$data['Team1']}  </th>
        <th> {$data['score']} </th>
        <th> {$data['Team2']} </th>
        </tr> ";
    }
    echo "</table></div>";
}

function getTeams(){
    global $db;
    $cursor = $db->teams->find();
    return $cursor;
}