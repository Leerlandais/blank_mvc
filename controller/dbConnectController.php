<?php

// le fameux connect - j'utilise le même depuis toujours

try {
    $db = new PDO(DB_DRIVER . ":host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=" . DB_CHARSET . ";port=" . DB_PORT, DB_LOGIN, DB_PWD);
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);
    $errorMessage = "DB is connected : remove this in the dbConnectController (but leave the homepage alone)";

} catch (Exception) {
    die($errorMessage = "Problem connecting to the DB");
}

