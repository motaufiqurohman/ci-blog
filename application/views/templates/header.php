<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootswatch/4.3.1/flatly/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
    <title><?php echo $title; ?></title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="<?php echo base_url(); ?>">ciBlog</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarColor02">
        <ul class="navbar-nav mr-auto">
        <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url(); ?>home/">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url(); ?>posts/">Blog</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url(); ?>about/">About</a>
        </li>
        </ul>
    </div>
  </div>
</nav>
<div class="container mt-4">