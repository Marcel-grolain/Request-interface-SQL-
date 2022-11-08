<?php
    require_once("controlers/controlers.php");

    class Root
    {
        static function getViews($views)
        {
            Controlers::getViews($views);
        }
    }

    $root = "";
    if (isset($_GET["req"]) && !empty($_GET["req"]) && is_string($_GET["req"])) {
        $req = htmlspecialchars($_GET["req"]);

        if ($req === "request-esesame") {
            $root = "request-esesame";
        } else if ($req === "request-service-digitaux") {
            $root = "request-service-digitaux";
        } else if ($req === "gestion-requete") {
            $root = "gestion-requete";
        }
        else {
            $root = "/";
        }
    } else {
        $root = "/";
    }
    Root::getViews($root);
?>