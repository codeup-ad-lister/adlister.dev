<?php

// Load the environment variables.
$_ENV = include_once '.env.php';

require_once 'utils/DB.php';
require_once 'models/BaseModel.php';
require_once 'models/Ad.php';
require_once 'models/User.php';
require_once 'utils/Auth.php';
require_once 'utils/Input.php';
require_once 'utils/Logger.php';

$dbc = DB::connect();
