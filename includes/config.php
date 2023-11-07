<?php
    ob_start();
    session_start();

    // SERVER & URL
    define("ROOT", $_SERVER['DOCUMENT_ROOT']);
    define("HTTP_REFERER", isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : "");
    define("SCHEME", $_SERVER['REQUEST_SCHEME']);
    define("SERVER", $_SERVER['SERVER_NAME']);

    define("BASE_PATH", "/banking_app/");
    define("BASE_URL", SCHEME."://".SERVER.BASE_PATH);
    define("BASE_URL_HOME", BASE_URL.'index');
    define("BASE_URL_SIGNUP", BASE_URL.'sign-up');  
    define("BASE_URL_SIGNIN", BASE_URL.'sign-in');  

    // Folders constants
    define("CONTROLLER_DIR", BASE_URL."controllers/");
    define("VIEW_DIR", BASE_URL."views/");
    define("MODEL_DIR", ROOT.BASE_PATH."models/");
    define("LAYOUT_DIR", ROOT.BASE_PATH."layouts/");
    define("COMPONENTS_DIR", ROOT.BASE_PATH."components/");
    define("USER_COMPONENTS_DIR", ROOT.BASE_PATH."components/user/");

    // Database constants
    define("DB_HOST", "localhost");
    define("DB_USER", "root");
    define("DB_PASSWORD", "");
    define("DB_NAME", "banking_app_db");

    // Database Connection
    $dsn = "mysql:dbname=" . DB_NAME . ";host=" . DB_HOST . "";
    $pdo = "";
    try {
        $pdo = new PDO($dsn, DB_USER, DB_PASSWORD);
    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }

    // Use Database
    require "Database.php";
    $conn = new Database($pdo);

    // BRAND
    define("BRAND_NAME", "XXX APP");
    define("CURRENT_YEAR", date("Y"));

    // Import required files
    require_once "responseHandler.php";
    
    require MODEL_DIR."Utility.php";
    $utility = new Utility($conn);

    require_once MODEL_DIR."Pages.php";
    $pages = new Pages($conn);

    // Page name constant
    define('PAGE', pathinfo(basename($_SERVER['PHP_SELF']), PATHINFO_FILENAME));
    $page = explode('.', PAGE)[0];
    define('PAGE_TITLE', $pages->getPage($page));

    require_once MODEL_DIR."User.php";
    $user = new User($conn);
?>