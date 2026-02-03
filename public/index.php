<?php
session_start();

      $basePath = '/medical/public';


   $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);


       if (strpos($uri, $basePath) === 0) {
    $uri = substr($uri, strlen($basePath));
  }


if ($uri === '' || $uri === '/') {
    $uri = '/login';
}

if (isset($_SESSION['user']) && empty($_SESSION['regenerated'])) {
    session_regenerate_id(true);
    $_SESSION['regenerated'] = true;
}
$protectedRoutes = ['/dashboard', '/logout'];





if (in_array($uri, $protectedRoutes) && !isset($_SESSION['user'])) {


    header("Location: {$basePath}/login");
    exit;
}
switch ($uri) {
    case '/login':
        require '../app/view/login.php';
        break;


        
    case '/dashboard':
        require '../app/view/dashboard.php';
        break;

    case '/logout':
        require '../app/controller/logout.php';
        break;

    default:
        http_response_code(404);
        echo "404 Not Found";
}
