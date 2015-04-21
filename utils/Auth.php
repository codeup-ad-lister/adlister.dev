<?php

require_once '../bootstrap.php';


/**
 * Authentication Class
 */
class Auth
{
    public static $hash = '$2y$10$8BRLtTlGAvK3Yunj02SacuWTtzrCkwHmTduC.AOYcofNmm/sBsURu';

    public function __construct(){}

    public static function attempt($username, $password)
    {
        if($username == 'guest' && password_verify($password, self::$hash)) {
                $_SESSION['LOGGED_IN_USER'] = $username;
                $message = "User $username logged in.";
                Log::info($message);
                return $message;
        } else if(!Input::has('username') || !Input::has('password')){
            $message = 'Username and password fields must not be blank.';
        } else {
            $message = "User $username failed to log in!" . PHP_EOL;
            Log::error($message);
        }

        return $message;
    }

    // Logs out the user and ends their session.
    public static function logout()
    {

    }

    // Returns a boolean whether or not a user is logged in.
    public static function check()
    {
        if(isset($_SESSION['LOGGED_IN_USER'])) {
            return true;
        } else {
            return false;
        }
    }

    // Returns the username of the logged-in user.
    public static function user()
    {
        return $_SESSION['LOGGED_IN_USER'];
    }

    public function __destruct(){}

}
