<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Semi Dynamic Website debug</title>
    <style>
        .active{
            font-weight: bold;
        }
    </style>
    <?php makeCss("style"); ?>
</head>
<body>
<h1><?php echo $getlink;?></h1>
    <!-- header -->
    <div class="header">
        <div class="container">
            <div class="nav">
                <div class="nav-menu">
                    <a href="index.php?pages=home" class="<?php if ($getlink=="home"){echo "active";}?>">Home</a>
                    <a href="index.php?pages=about" class="<?php if ($getlink=="about"){echo "active";}?>">About</a>
                    <a href="index.php?pages=contact"class="<?php if ($getlink=="contact"){echo "active";}?>">Contact</a>
                    <a href="index.php?pages=portfolio"class="<?php if ($getlink=="portfolio"){echo "active";}?>">Portfolio</a>
                </div>
            </div>
        </div>
    </div>
    <!-- end header -->
