<?php
    function data_home($args)
    {
?>

    <?php include_once("includes/head.php"); data_head($title = "Manage BDD | Mucodec"); ?>
    <?php include_once("includes/header.php"); ?>

    <div class="w-50 position-absolute top-50 start-50 translate-middle">
        <div class="card text-bg-light">
            <div class="card-header text-light text-center font-famiily" style="background-color: #0a2163 !important;">Requête ESESAME - Agences </div>
            <div class="card-body m-5">
                <form action="?req=gestion-requete" method="POST" class="font-famiily">
                    <div class="input-group">
                        <label class="input-group-text" for="inputGroupSelect01">Liste d'agences</label>
                        <select class="form-select" id="inputGroupSelect01" name="agency" required="required">
                            <option selected>Selectionnez...</option>
                            <option value="1">Talangaî</option>
                            <option value="2">Bacongo</option>
                            <option value="3">Bifouti</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-outline-primary mt-3">Soumettre</button>
                </form>
            </div>
        </div>
    </div>

    <?php include_once("includes/script.php"); data_script();?>
<?php
    }
?>