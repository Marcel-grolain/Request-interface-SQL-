<?php
    function data_home($args) {
        if (isset($_POST["agency"]) && !empty($_POST["agency"]) && is_string($_POST["agency"])) {
            $agency = htmlspecialchars($_POST["agency"]);
            if ($agency === "Selectionnez...") {
                header("Location: ?req=request-esesame");
            }
        }
?>

    <?php include_once("includes/head.php"); data_head($title = "Manage BDD | Mucodec"); ?>
    <?php include_once("includes/header.php"); ?>

    <div class="container-fluid mt-5">
        <div class="row">
            <div class="col-lg-12 mb-1 mt-5 font-famiily text-lg-end">
                <button class="btn btn-outline-primary btn-sm"><i class="bx bx-file"></i> CSV</button>
                <button class="btn btn-outline-secondary btn-sm btn-csv"><i class="bx bx-file"></i> EXCEL</button>
            </div>
            <div class="col-lg-3 pb-3">
                <div class="card text-bg-light mt-3 mb-5">
                    <div class="card-header text-light text-center font-famiily header-listeRequest">Liste des requêtes </div>
                    <div class="card-body ">
                        <div class="list-group list-group-flush font-small-famiily SB3 d-none">
                            <button type="button" class="list-group-item list-group-item-action">REQUETE FM1101 INVEST SESAM</button>
                            <button type="button" class="list-group-item list-group-item-action">REQUETE FM1101 HABITAT SESAM</button>
                            <button type="button" class="list-group-item list-group-item-action">Requête FM1101 ENCOURS EPA</button>
                            <button type="button" class="list-group-item list-group-item-action">REQUETE FM1101 CAMPAGNE SESAM</button>
                            <button type="button" class="list-group-item list-group-item-action">REQUETE FM1101 AUTRES CRED SESA</button>
                            <button type="button" class="list-group-item list-group-item-action">Requête FM 1633 ENCOURS EPA+CCO</button>
                            <button type="button" class="list-group-item list-group-item-action">Requête FM 1301 ENCOURS EPA+CCO nom et raison soc concaténés</button>
                            <button type="button" class="list-group-item list-group-item-action">REQUETE FM 1101 CONSO SESAM</button>
                            <button type="button" class="list-group-item list-group-item-action">REQUET FM1101 IMPAYES SESAM</button>
                            <button type="button" class="list-group-item list-group-item-action">REQ_ENCOURS_EPA_ELUS_SALARIE</button>
                            <button type="button" class="list-group-item list-group-item-action">FM1203 ENCOURS SOC</button>
                            <button type="button" class="list-group-item list-group-item-action">FM 1138 ENCOURS CDL_CTX</button>
                            <button type="button" class="list-group-item list-group-item-action">ENCOURS PER</button>
                            <button type="button" class="list-group-item list-group-item-action">ENCOURS LEE</button>
                            <button type="button" class="list-group-item list-group-item-action">ENCOURS CREDITS SAIN ET IMPAYE</button>
                            <button type="button" class="list-group-item list-group-item-action">ENCOURS CCO</button>
                            <button type="button" class="list-group-item list-group-item-action">ENCOURS CCO DEBITEUR</button>
                        </div>
                        <div class="list-group list-group-flush font-small-famiily SB4">
                            <button type="button" class="list-group-item list-group-item-action">Requetes amendées sur les encours SOC</button>
                            <button type="button" class="list-group-item list-group-item-action">Encours prêts Sains et Impayés</button>
                            <button type="button" class="list-group-item list-group-item-action">Encours prêts Impayés</button>
                            <button type="button" class="list-group-item list-group-item-action">Encours prêts des elus___ne pas utiliser</button>
                            <button type="button" class="list-group-item list-group-item-action">Encours prêts des elus et salariés</button>
                            <button type="button" class="list-group-item list-group-item-action">Encours prêts CDL et CTX</button>
                            <button type="button" class="list-group-item list-group-item-action">Encours PER</button>
                            <button type="button" class="list-group-item list-group-item-action">Encours LEE</button>
                            <button type="button" class="list-group-item list-group-item-action">Encours EPA requete amendée</button>
                            <button type="button" class="list-group-item list-group-item-action">Encours EPA et CCO</button>
                            <button type="button" class="list-group-item list-group-item-action">Encours EPA Elu_Salarie</button>
                            <button type="button" class="list-group-item list-group-item-action">Encours des prets habitats</button>
                            <button type="button" class="list-group-item list-group-item-action">Encours des prets equipements</button>
                            <button type="button" class="list-group-item list-group-item-action">Encours des prets à l'investissement</button>
                            <button type="button" class="list-group-item list-group-item-action">Encours des prets à la tresorerie</button>
                            <button type="button" class="list-group-item list-group-item-action">Encours des autres prets</button>
                            <button type="button" class="list-group-item list-group-item-action">Encours CCT et CMT</button>
                            <button type="button" class="list-group-item list-group-item-action">Encours CCO Debiteur</button>
                            <button type="button" class="list-group-item list-group-item-action">En cours CCO du 22_04_2022</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-9 mt-3 mb-5">
                <div class="card text-bg-light font-famiily">
                    <div class="card-header text-light text-center header-table">Response request</div>
                    <div class="card-body m-1">
                        <table id="datatable" class="table table-light table-striped font-small">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>createdAt</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Jhon doe</td>
                                    <td>Jhondoe@gmail.com</td>
                                    <td>10/10/22</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>smae</td>
                                    <td>smae@gmail.com</td>
                                    <td>10/11/22</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Jhon doe3</td>
                                    <td>Jhondoe3@gmail.com</td>
                                    <td>10/10/22</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Jhon doe4</td>
                                    <td>Jhondoe4@gmail.com</td>
                                    <td>10/10/24</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>Jhon doe5</td>
                                    <td>Jhondoe5@gmail.com</td>
                                    <td>10/10/21</td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>Jhon doe</td>
                                    <td>Jhondoe@gmail.com</td>
                                    <td>10/10/22</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>smae</td>
                                    <td>smae@gmail.com</td>
                                    <td>10/11/22</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Jhon doe3</td>
                                    <td>Jhondoe3@gmail.com</td>
                                    <td>10/10/22</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Jhon doe4</td>
                                    <td>Jhondoe4@gmail.com</td>
                                    <td>10/10/24</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>Jhon doe5</td>
                                    <td>Jhondoe5@gmail.com</td>
                                    <td>10/10/21</td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>Jhon doe</td>
                                    <td>Jhondoe@gmail.com</td>
                                    <td>10/10/22</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>smae</td>
                                    <td>smae@gmail.com</td>
                                    <td>10/11/22</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Jhon doe3</td>
                                    <td>Jhondoe3@gmail.com</td>
                                    <td>10/10/22</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Jhon doe4</td>
                                    <td>Jhondoe4@gmail.com</td>
                                    <td>10/10/24</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>Jhon doe5</td>
                                    <td>Jhondoe5@gmail.com</td>
                                    <td>10/10/21</td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include_once("includes/script.php"); data_script();?>
<?php
    }
?>