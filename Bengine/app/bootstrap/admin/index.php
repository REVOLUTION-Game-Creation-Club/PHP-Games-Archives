<?php
/**
 * Bootstrapping community application.
 *
 * @package Bengine\Comm
 * @license <http://www.bengine.de/pyl.txt> Public Bengine License
 */

define("REQUEST_LEVEL_NAMES", "package,controller,action,1,2,3,4");
define("LOGIN_REQUIRED", false);
define("COOKIE_SESSION", true);
define("URL_SESSION", false);

require_once "Functions.inc.php";
require_once "Bengine/Admin.php";
return new Admin($this);
