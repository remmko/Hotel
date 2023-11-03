<?php

/** 
 * Fitxer de configuració de l'aplicació.
 * */ 

$config = [
    "db" => [
        "user" => "hoteladmin",
        "pass" => "opensource",
        "db" => "hotel",
        "host" => "projectdb.ddns.net"
    ],
];

/**
 * Carreguem les classes del Framework Emeset
 */

include "Emeset/Container.php";
include "Emeset/Request.php";
include "Emeset/Response.php";

/**
 * Carreguem els models de l'aplicació
 */
include "models/db.php";
include "models/Tasks.php";
include "models/Users.php";
include "models/registration.php";
include "models/login.php";

