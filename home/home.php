<?php
session_start();
if(empty($_SESSION['id'])){
    echo "<script>
    alert('Maaf Anda Belum Login');
    window.location.assign('../index.php');
    </script>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pertamina drive</title>
    <link rel="stylesheet" href="stylenavbar.css">
</head>
<body>
    <div class="fContainer">
        <nav class="wrapper">
            <img src="../PT_Pertamina_Patra_Niaga.svg.png" alt="" width="170" height="auto">
            
                    <form class="search" action="search.php" method="get">
                        <input type="text" name="query" placeholder="Search..." required>
                        <button type="submit" class="btn btn-danger">Search</button>
                    </form>
            
            <ul class="navigation">
                <li><a href="home.php">Home</a></li>
                <li><a href="riwayat.php">Riwayat</a></li>
                <li><a href="home.php?url=logout" class="active">Logout</a></li>
                
            </ul>
        </nav>
    </div>
    <script src="../js/bootstrap.bundle.min.js"></script>
</body>
</html>
