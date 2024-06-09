<?php 
session_start();
include "controller/connect.php";
header("Access-Control-Allow-Origin: *");
error_reporting(0);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link href="style.css" rel="stylesheet"> 
</head>

<body>

<nav class="p-3 navbar navbar-expand-lg bg-body-tertiary d-flex flex-row justify-content-between">

    <a class="navbar-brand" href="index.php">
        <img src="img/FCSIT.png" alt="FCSIT Logo" style="height:36px;">
    </a>

    <div>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                <a class="nav-link" href="procedure.php" id="navProcedure">Evacuation Procedure</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="route.php"  id="navRoute">Evacuation Route</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="contact.php" id="navContact">Emergency Contact</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="forum.php" id="navForum">Forum & FAQs</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

