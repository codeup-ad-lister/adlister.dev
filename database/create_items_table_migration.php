<?php

$dbc->exec('DROP TABLE IF EXISTS items');

$query = 'CREATE TABLE items (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    price INT UNSIGNED NOT NULL,
    item VARCHAR(256) NOT NULL,
    description TEXT,
    location VARCHAR(256),
    date_posted DATE,
    user_id INT UNSIGNED,
    PRIMARY KEY (id)
)';

$dbc->exec($query);
