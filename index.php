<?php
    include 'function.php';
    $content = query("SELECT * FROM tb_blog");
    
    
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./bootstrap-5/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">
    <title>FajarBlog</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #CAD5E2;">
        <div class="container-fluid">
            <a class="navbar-brand ms-5" href="login.php">FAJARBLOG</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link active ms-4" aria-current="page" href="#">Home</a>
                <a class="nav-link ms-3" href="#">News</a>
                <a class="nav-link ms-3" href="#">About Me</a>
            </div>
        </div>
        <form class="d-flex">
            <div class="input-group">
                <div class="input-group-text" id="basic-addon1"><input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"><i class="bi bi-search"></i></div>
            </div>
        </form>
        </div>
    </nav>
    <div class="container">
    <div class="row">
        <div class="card col-6" style="width: 65%; margin-top: 20px; background-color: #CAD5E2;;">
            <div class="card-body mt-4">
            <?php
                if(isset($_GET['id'])) {
                    $id = $_GET['id'];
                }
                else{
                    $id = 1;
                }
                $dataSatuan = query("SELECT *FROM tb_blog WHERE id = '$id' ");
                $dataSatuan = $dataSatuan[0];
            ?>
            <h4><?php echo $dataSatuan['judul'];?></h4>
                <img src="<?= $dataSatuan['gambar'];?>">
                <p><?= $dataSatuan['isi'];?></p>
                <p class="mt-4">
            </div>
        </div>
        <div class="col-4 mb-3">
            <div class="col-md-12 mt-4 ms-5">
                <div class="card" style="background-color: #CAD5E2;">
                    <div class="card-body">

                    <?php
                        foreach($content as $cont){
                    ?>
                        <a href="?id=<?=$cont['id'] ?>"><h6 class="text-center mt-3"><?= $cont['judul']; ?></h6></a>
                    <?php
                        }
                    ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<br>
    <footer style="background-color: #CAD5E2;">
        <h5 style="text-align: center;"><b>FAJARBLOG</b></h5>
    </footer>

</body>
</html>