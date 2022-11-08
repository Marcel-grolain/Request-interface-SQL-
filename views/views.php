<?php

    class Views
    {
        static function getViews($string)
        {
            switch ($string) { //#0a2163
                case "/":
                    include_once("templates/home.php");
                    data_home("Mboyo");
                    break;

                case "request-esesame":
                    include_once("templates/request_esesame.php");
                    data_home("Mboyo");
                    break;

                case "request-service-digitaux":
                    include_once("templates/request-service-digitaux.php");
                    data_home("Mboyo");
                    break;

                case "gestion-requete":
                    include_once("templates/gestion-requete.php");
                    data_home("Mboyo");
                    break;

                default:
                    # code...
                    break;
            }
        }
    }
?>