<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css?<?= time(); ?>" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

    <!-- FontAw -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css?<?= time(); ?>" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- MY CSS -->
    <link rel="stylesheet" href="css/style.css?<?= time(); ?>" />

    <title>Muhammad Bilal</title>
</head>

<body>

    <!-- START navbar -->
    <section id="navbar">
        <nav class="navbar navbar-dark bg-dark navbar-expand-lg p-2">
            <div class="container">
                <a href="index.php">
                    <h1 class="navbar-brand fw-bolder" href="index.php">Project Monitoring</h1>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav ms-auto text-center">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="about.php">About</a>
                        </li>
                        <!-- <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="service.php">Service</a>
                        </li> -->
                        <li class="nav-item">
                            <a class="nav-link" href="project.php">Project</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.php">Contact</a>
                        </li>
                    </div>
                </div>
            </div>
        </nav>
    </section>
    <!-- END navbar -->