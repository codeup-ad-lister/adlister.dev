<?php


$dbc->exec('DROP TABLE IF EXISTS users');

$query = 'CREATE TABLE users (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    email VARCHAR(128) NOT NULL,
    password VARCHAR(256) NOT NULL,
    PRIMARY KEY (id)
)';

$dbc->exec($query);
