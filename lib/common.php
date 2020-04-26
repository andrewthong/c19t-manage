<?php

    include_once('database.php');
    $database = new Database();

    $config = include( dirname(__FILE__).'/../env.php' );

    $conn = $database->getConnection($config);

    date_default_timezone_set('Canada/Mountain');
