<?php

return [
    "database" => [
        "driver" => "mysql",
        "host" => "localhost",
        "dbname" => "cms",
        "user" => "root",
        "password" => "",
        "options" => [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ]
    ],
];
