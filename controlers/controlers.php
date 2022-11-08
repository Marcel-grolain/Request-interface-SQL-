<?php
    require_once("views/views.php");

    class Controlers
    {
        static function getViews($string)
        {
            Views::getViews($string);
        }
    }
?>