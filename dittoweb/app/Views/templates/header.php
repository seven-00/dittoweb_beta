<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>dittoweb</title>
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/styles/styles.css">
    <!-- Favicon-->
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>
    <!-- Navigation-->

    <nav class="navbar navbar-expand-lg navbar-dark custom-theme" style="position: sticky;
    z-index: 99999;
    top: 0;">
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand" href="/dittoweb.com/">Ditto</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                    <li class="nav-item"><a class="nav-link active" aria-current="page" href="/dittoweb.com/content">Home</a></li>
                    <!-- <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Pages</a>
                        <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#!">All</a></li>
                            <li>
                                <hr class="dropdown-divider" />
                            </li>
                            <li><a class="dropdown-item" href="/dittoweb.com/content/movies">Movies</a></li>
                            <li><a class="dropdown-item" href="/dittoweb.com/content/Tv_shows">Tv shows</a></li>
                        </ul>
                    </li> -->
                </ul>  
                <div>
                        <ul class="navbar-nav">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="<?php echo base_url() ?>assets/images/pfp.png" height="35" width="35" class="mr-3" alt="User Avatar">    
                                <?php echo $userfname." ".$userlname; ?>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                                    <li><a class="dropdown-item" href="/dittoweb.com/user">Your Account</a></li>
                                    <li><a class="dropdown-item" href="/dittoweb.com/user">Your subscriptions</a></li>
                                    <li><a class="dropdown-item" href="/dittoweb.com/logout">Logout</a></li>
                                </ul>
                            </li>
                        </ul>
                </div>
            </div>
        </div>
    </nav>
