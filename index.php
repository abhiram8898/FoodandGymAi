<?php
include('inc/header4.php');
?>
<link rel="stylesheet" href="css/style.css" />
<body>
    <div
        class="container-fluid bg-black p bg-opacity-75 text-dark m-0 min-vh-100"
    >
        <nav class="navbar navbar-expand-lg mb-5">
            <div class="container-fluid">
                <a class="navbar-brand text-white" href="#">Workout & Eat</a>
                <button
                    class="navbar-toggler"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent"
                    aria-expanded="false"
                    aria-label="Toggle navigation"
                >
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div
                    class="collapse navbar-collapse"
                    id="navbarSupportedContent"
                >
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a
                                class="nav-link active text-white"
                                aria-current="page"
                                href="index.php"
                                >Home</a
                            >
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active text-white" href="#"
                                >About</a
                            >
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="col-8 row justify-content-center m-auto my-5 p-5">
            <div class="col-10 col-md-6 p-0">
                <img
                    src="images/8112459.jpg"
                    class="rounded-4 img-fluid"
                    alt=""
                />
            </div>

            <div
                class="bg-light col-11 col-md-6 rounded-4 text-center p-0 p-md-5"
            >
                <h3>Excercise and Stay Healthy</h3>
                <a href="dash.php" class="btn btn-success my-5">SEARCH</a>
            </div>
        </div>

        <?php include('inc/footer4.php'); ?>
    </div>
</body>
