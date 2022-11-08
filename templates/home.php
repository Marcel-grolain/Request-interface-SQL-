<?php
    function data_home($args)
    {
?>

    <?php include_once("includes/head.php"); data_head($title = "Manage BDD | Mucodec"); ?>
    <?php include_once("includes/header.php"); ?>

    <div class="w-50 position-absolute top-50 start-50 translate-middle">
        <div class="card text-bg-light">
            <div class="card-header text-light text-center font-famiily" style="background-color: #0a2163 !important;">Type de requête </div>
            <div class="card-body m-5">
                <div class="d-grid gap-2 col-6 mx-auto font-famiily">
                    <a href="?req=request-esesame" class="btn btn-outline-primary" type="button">Requête ESESAME</a>
                    <a href="?req=request-service-digitaux" class="btn btn-outline-primary" type="button">Requête Services Digitaux</a>
                </div>
            </div>
        </div>
    </div>


    <?php include_once("includes/script.php"); data_script();?>
<?php
    }
?>