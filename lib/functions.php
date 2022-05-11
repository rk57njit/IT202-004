<?php
//TODO 1: require db.php
require_once(__DIR__ . "/db.php");
//This is going to be a helper for redirecting to our base project path since it's nested in another folder
//This MUST match the folder name exactly
$BASE_PATH = '/Project';
//we moved the flash require higher so following functions have access to it
//TODO 4: Flash Message Helpers
require(__DIR__ . "/flash_messages.php");

//require safer_echo.php
require(__DIR__ . "/se.php");
//TODO 2: filter helpers
require(__DIR__ . "/sanitizers.php");

//TODO 3: User helpers
require(__DIR__ . "/user_helpers.php");


//duplicate email/username
require(__DIR__ . "/duplicate_user_details.php");
require(__DIR__ . "/add_to_cart.php");
require(__DIR__ . "/get_or_create_account.php");
//reset session
require(__DIR__ . "/reset_session.php");

require(__DIR__ . "/get_url.php");

require(__DIR__ . "/redirect.php");
require(__DIR__ . "/inputMap.php");
require(__DIR__ . "/get_columns.php");

require(__DIR__ . "/save_data.php");
require(__DIR__ . "/update_data.php");

require(__DIR__ . "/paginate.php");
require(__DIR__ . "/persistQueryString.php");
require(__DIR__ . "/paginateReviews.php");
require(__DIR__ . "/filterPurchase.php");
require(__DIR__ . "/filterPurchase2.php");