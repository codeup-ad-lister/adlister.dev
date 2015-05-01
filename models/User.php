<?php

require_once '../bootstrap.php';

class User extends BaseModel
{
    protected static $table = 'users';

    public static function findUserByUsername($username)
    {
        self::dbConnect();
        $table = static::$table;

        $query = "SELECT * from $table where username = :username";
        self::$dbc->prepare($query);
        $stmt = self::$dbc->bindValue(':username', $username, PDO::PARAM_STR);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        // The following code will set the attributes on the calling object based on the result variable's contents

        $instance = null;
        if ($result)
        {
            $instance = new static;
            $instance->attributes = $result;
        }
        return $instance;

    }

    protected function insert()
    {}

    protected function update()
    {

        $hashed_pass = password_hash($this->password, PASSWORD_DEFAULT);

        $query = "UPDATE users....";

        $stmt->bindValue(':password', $hashed_pass, PDO::PARAM_STR);

    }
}


$userToFind = User::findUserByUsername('Bob');
var_dump($userToFind);

$userToFind == ['username' => 'Bob'];

$newUser = new User();
$newUser->username = $userToFind['']
