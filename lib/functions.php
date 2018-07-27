<?php

function debug($var, $die = false) {
    echo "<pre>";
    echo print_r($var);
    echo "</pre>";
    if ($die) {
        die;
    }
}

function current_user() {
    session_start();
    if (!isset($_SESSION["id"])) {
        return null;
    }
    return getOneEntity("utilisateur", $_SESSION["id"]);
}


function is_image(string $filepath): bool {
    if (!is_file($filepath)) {
        return false;
    }
    
    switch (pathinfo($filepath, PATHINFO_EXTENSION)) {
        case "png":
        case "jpg":
        case "jpeg":
        case "gif":
            return true;
        default:
            return false;
    }
}

function get_avatar(string $image = NULL): string {
    if (is_image("uploads/" . $image)) {
        return "uploads/" . $image;
    } else {
        return "images/avatar.jpg";
    }
}

/**
 * Affiche un élément de menu Bootstrap
 * @param string $url URL du lien
 * @param string $label Label du lien
 * @param string $icon Icon du lien
 * @param bool $exact URL exacte (pas de sous URLs)
 */
function display_nav_item(string $url, string $label, string $icon, bool $exact = false) {
    $currentUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    if ($exact) {
        $navClass = ($currentUrl == $url) ? "active" : "";
    } else {
        $navClass = (strpos($currentUrl, $url) === 0) ? "active" : "";
    }
    echo   "<li class=\"nav-item\">
                <a class=\"nav-link $navClass\" href=\"$url\">
                    <i class=\"fa $icon\"></i>
                    $label <span class=\"sr-only\">(current)</span>
                </a>
            </li>";
    
}



function get_header() {
    require_once "layout/header.php";
}

function get_footer() {
    require_once "layout/footer.php";
}