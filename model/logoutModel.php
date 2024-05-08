<?php
// Une autre fonction que j'utiliserai pour toujours. La déconnexion de Michael. Tout ce que je dois changer, c'est l'en-tête ("Location: ") et je peux l'utiliser n'importe où (un peu comme la connexion à la base de données)
# Déconnexion de l'administrateur
$_SESSION = [];

if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
}

session_destroy();
  
header("Location: ./");         // changez cela en fonction des besoins du site
exit();
?>