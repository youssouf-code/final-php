<?php

return [
    "database" => [
        "driver" => "mysql",
        "host" => "localhost",
        "dbname" => "greenforest_db",
        "user" => "root",
        "password" => "",
        "options" => [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ]
    ],
];
