<?php
    $contacts = [
            ["name" => "Pepe", "phone" => 12345],
            ["name" => "Antonio", "phone" => 87566],
            ["name" => "Alejandro", "phone" => 7856],
            ["name" => "Marco", "phone" => 123456],
            ["name" => "Juan", "phone" => 98977]

    ];
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

<!--    Bootstrap-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/5.2.2/darkly/bootstrap.min.css"
          integrity="sha512-8RiGzgobZQmqqqJYja5KJzl9RHkThtwqP1wkqvcbbbHNeMXJjTaBOR+6OeuoxHhuDN5h/VlgVEjD7mJu6KNQXA=="
          crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script defer
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
            crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./static/css/index.css">
    <title>Contacts APP</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand font-weight-bold" href="#">
            <img class="mr-2" src="./static/img/img.png" />


            ContactsApp
        </a>
        <button
                class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarNav"
                aria-controls="navbarNav"
                aria-expanded="false"
                aria-label="Toggle navigation"
        >
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/contacts-app/add.html">Add Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<main>
    <div class="container pt-4 p-3">
        <div class="row">
            <?php foreach ($contacts as $contact):  ?>
                <div class="col-md-4 mb-3">
                <div class="card text-center">
                    <div class="card-body">
                        <h3 class="card-title text-capitalize"><?=$contact["name"]?></h3>
                        <p class="m-2"><?=$contact["phone"]?></p>
                        <a href="#" class="btn btn-secondary mb-2">Edit Contact</a>
                        <a href="#" class="btn btn-danger mb-2">Delete Contact</a>
                    </div>
                </div>
            </div>
           <?php endforeach ?>


<!--            <div class="col-md-4 mb-3">-->
<!--                <div class="card text-center">-->
<!--                    <div class="card-body">-->
<!--                        <h3 class="card-title text-capitalize">Contact Name 2</h3>-->
<!--                        <p class="m-2">987654321</p>-->
<!--                        <a href="#" class="btn btn-secondary mb-2">Edit Contact</a>-->
<!--                        <a href="#" class="btn btn-danger mb-2">Delete Contact</a>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!---->
<!--            <div class="col-md-4 mb-3">-->
<!--                <div class="card text-center">-->
<!--                    <div class="card-body">-->
<!--                        <h3 class="card-title text-capitalize">Contact Name 3</h3>-->
<!--                        <p class="m-2">987654321</p>-->
<!--                        <a href="#" class="btn btn-secondary mb-2">Edit Contact</a>-->
<!--                        <a href="#" class="btn btn-danger mb-2">Delete Contact</a>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
        </div>
    </div>
</main>
</body>
</html>