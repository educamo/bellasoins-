<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Bella Soins Inc</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,700;1,100;1,300;1,400&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link href="<?= base_url('assets//css/bootstrap/bootstrap.min.css') ?>" rel="stylesheet">

    <!-- css personal -->
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
    <!-- Font Awesome CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">


</head>

<body data-bs-spy="scroll" data-bs-target="#navbar-example2" data-bs-root-margin="0px 0px -40%" data-bs-smooth-scroll="true" class="scrollspy-example bg-body-tertiary rounded-2">
    <!-- CABECERA  -->
    <header>
        <!-- nav -->
        <nav id="id=" navbar-example2"" class="navbar p-t-2 fixed-top navbar-expand-lg bg-light">
            <div class="container-fluid text-center">
                <a class="navbar-brand" href="<?= site_url() ?>">Navbar</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="<?= site_url('#hero') ?>">Home</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="<?= site_url('#services') ?>" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Services
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item nav-link" href="#">Action</a></li>
                                <li><a class="dropdown-item nav-link" href="#">Another action</a></li>
                                <li><a class="dropdown-item nav-link" href="#">Something else here</a></li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="<?= site_url('#gallery') ?>">Gallery</a>
                        </li>
                    </ul>
                    <span class="navbar-text">
                    <a href="<?= site_url('appointment/') ?>" class="boton-citas">Agenda tu cita</a>
                    </span>

                </div>
            </div>
        </nav>
        <!-- nav end -->
        <div class="container-fluid mt-5 text-info-cabecera" style="z-index: 500;">
            <div class="row">
                <div class="col-6 ps-3">
                    <a class="link-opacity-25 text-secondary link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover" href="tel:+">00000000000</a>
                </div>
                <div class="col-6 text-end pe-5">
                    <a href="#" class="link-opacity-25 text-secondary link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover">en</a>
                </div>
            </div>
        </div>
    </header>
    <!-- CABECERA END -->