<?php

$dbc->exec('DROP TABLE IF EXISTS items');

$query = 'CREATE TABLE items (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    item VARCHAR(512) NOT NULL,
    price INT UNSIGNED NOT NULL,
    description TEXT,
    location VARCHAR(256),
    date_posted DATE,
    user_id INT UNSIGNED,
    PRIMARY KEY (id)
)';

$dbc->exec($query);
