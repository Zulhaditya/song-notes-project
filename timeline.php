<?php require_once("auth.php"); ?>

<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Boxicons CDN Link -->
    <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet" />
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <!-- Sidebar CSS -->
    <link rel="stylesheet" href="css/sidebar.css" />

    <!-- Timeline CSS -->
    <link rel="stylesheet" href="css/timeline.css" />
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <title>Dashboard</title>
</head>

<body>
    <div class="sidebar">
        <div class="logo-details">
            <i class="bx bxl-c-plus-plus icon"></i>
            <div class="logo_name">Contempo</div>
            <i class="bx bx-menu" id="btn"></i>
        </div>

        <ul class="nav list">
            <li>
                <a href="timeline.php">
                    <i class="bx bx-grid-alt"></i>
                    <span class="links_name">Dashboard</span>
                </a>
                <span class="tooltip">Dashboard</span>
            </li>

            <li>
                <a href="project-user.php">
                    <i class="bx bx-user"></i>
                    <span class="links_name">User</span>
                </a>
                <span class="tooltip">User</span>
            </li>

            <li class="profile">
                <div class="profile-details">
                    <img src="img/profile.jpg" alt="profileImg" />
                    <div class="name_job">
                        <div class="name"><?php echo  $_SESSION["user"]["name"] ?></div>
                    </div>
                </div>
                <a href="logout.php"><i class="bx bx-log-out" id="log_out"></i></a>
            </li>
        </ul>
    </div>

    <div class="title">
        <h1>Contempo</h1>
    </div>
    <div class="userName text-center">
        <h1>Selamat Datang, <?php echo  $_SESSION["user"]["name"] ?>.</h1>
    </div>

    <div class="wrapper">
        <div class="container">
            <div class="workspace">
                <a href="workspace.php">
                    <h1>Buat project</h1>
                    <h3>Workspace dan Upload Lagu</h3>
                    <h4>+</h4>
                </a>
            </div>

            <div class="body_content">
                <div class="listLagu">
                    <span></span>
                    <span>JUDUL</span>
                    <span>CREATOR</span>
                    <span>GENRE</span>
                    <span>DURATION</span>
                    <span></span>
                    <span></span>
                </div>
                <div class="list"></div>
            </div>
        </div>
    </div>

    <footer class="bg-dark text-center text-white">
        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
            © 2021 Copyright
        </div>
        <!-- Copyright -->
    </footer>

    <script src="https://code.jquery.com/jquery-3.6.0.js"
        integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="js/sidebar.js"></script>
    <script src="js/data.js"></script>
    <script src="js/dashboard.js"></script>
</body>

</html>