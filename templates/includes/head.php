<?php
    function data_head($title = "Manage BDD")
    {
?>

<!DOCTYPE html>
<html lang="fr">
    <body>
    <head>
        <meta charset="UTF-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">

        <!-- Favicons -->
        <link href="assets/imgs/index.png" rel="icon">

        <!-- CSS Files -->
        <link href="assets/css/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="assets/css/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
        <link href="assets/css/boxicons/css/boxicons.min.css" rel="stylesheet">

        <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css"/>

        <!-- Template Main CSS File -->
        <link href="assets/css/style.css" rel="stylesheet">

        <title><?php echo $title; ?></title>
    </head>

<?php
    }
?>