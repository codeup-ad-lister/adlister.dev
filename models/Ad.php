<?php

require_once '../bootstrap.php';

class Ad extends BaseModel
{
    protected static $table = 'ads';

    protected function insert()
    {
        $query = 'INSERT INTO ads (item, price, description, location, date_posted)
                    VALUES (:item, :price, :description, :location, :date_posted)';
        $stmt = self::$dbc->prepare($query);
        $stmt->bindValue(':item', $this->item, PDO::PARAM_STR);
        $stmt->bindValue(':price', $this->price, PDO::PARAM_STR);
        $stmt->bindValue(':description', $this->description, PDO::PARAM_STR);
        $stmt->bindValue(':location', $this->location, PDO::PARAM_STR);
        $stmt->exectute();
    }

    protected function update()
    {

    }
}
