<?php

include 'koneksi.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perpustakaan</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../fontawesome/css/all.css">
    <link rel="stylesheet" href="style.css">
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</head>
<body>

    <div class="header">
            <h1>perpustakaan</h1>
            
    </div>
    <div class="container" id="container">
            <nav class="navbar" id="navbar">
            <ul class="nav-ul">
            <li class="nav-li">
                    <a class="nav-link" href="index.php" >
                    <i class="fas fa-tachometer-alt"s></i>
                    <span>dasboard</span>
                    </a>
                </li>
                <li class="nav-li">
                    <a class="nav-link" href="sejarah_perang.php">
                    <i class="fas fa-book-dead"></i>
                    <span>Sejarah Perang</span>
                    </a>
                </li>
                
                <li class="nav-li">
                    <a class="nav-link" href="sejarah_ml.php">
                    <ion-icon name="newspaper-outline" style="font-size: 24px;"></ion-icon>
                    <span>sejarah masa lampau</span>
                    </a>
                </li>
                <li class="nav-li" style="font-weight: bold;">
                    <a class="nav-link" href="teknologi.php">
                    <ion-icon name="desktop-outline" style="font-size: 24px;"></ion-icon>
                    <span>teknologi</span>
                    </a>
                </li>
                <li class="nav-li">
                    <a class="nav-link" href="sumberlain.php">
                    <ion-icon name="library-outline" style="font-size: 24px;"></ion-icon>
                    <span>sumber lain</span>
                    </a>
                </li>
                <hr class="sidebar-divider" style="color:white;">

                <div class="token" id="token">
                    <i class="fas fa-chevron-right"></i>
                </div>
            </ul>
        </nav>



        <div class="books">
            <div class="rowbook">
            <?php
                $result = mysqli_query($koneksi,"SELECT * FROM teknologi ORDER BY id DESC");
                while($val = mysqli_fetch_array($result)){
                ?>
                <div class="boxbook">
                    <img src="gambar/teknologi/<?= $val['gambar'] ?>" alt="">
                    <div class="text">
                    <a href="tampil_tekno.php?id=<?= $val['id'] ?>" style="color: white; text-decoration:none;"><h3><?=$val['judul_buku']?></h3></a>
                    </div> 
                </div>
                <?php } ?>
            </div>
        </div>
    </div>


    <footer class="site-footer">
      <div class="containerfooter">
        <div class="rowfooter">
          <div class="about">
            <h3 style="margin-bottom: 7px;">About</h3>
            <p class="text-justify">Scanfcode.com <i>CODE WANTS TO BE SIMPLE </i> is an initiative  to help the upcoming programmers with the code. Scanfcode focuses on providing the most efficient code or snippets as the code wants to be simple. We will help programmers build up concepts in different programming languages that include C, C++, Java, HTML, CSS, Bootstrap, JavaScript, PHP, Android, SQL and Algorithm.</p>
          </div>

          <div class="kategori">
            <h3 style="margin-bottom: 7px;">Categories</h3>
            <ul class="footer-links">
              <li><a href="http://scanfcode.com/category/c-language/">C</a></li>
              <li><a href="http://scanfcode.com/category/front-end-development/">UI Design</a></li>
              <li><a href="http://scanfcode.com/category/back-end-development/">PHP</a></li>
              <li><a href="http://scanfcode.com/category/java-programming-language/">Java</a></li>
              <li><a href="http://scanfcode.com/category/android/">Android</a></li>
              <li><a href="http://scanfcode.com/category/templates/">Templates</a></li>
            </ul>
          </div>

          <div class="link">
            <h3 style="margin-bottom: 7px;">Quick Links</h3>
            <ul class="footer-links">
              <li><a href="http://scanfcode.com/about/">About Us</a></li>
              <li><a href="http://scanfcode.com/contact/">Contact Us</a></li>
              <li><a href="http://scanfcode.com/contribute-at-scanfcode/">Contribute</a></li>
              <li><a href="http://scanfcode.com/privacy-policy/">Privacy Policy</a></li>
              <li><a href="http://scanfcode.com/sitemap/">Sitemap</a></li>
            </ul>
          </div>
        </div>
        <hr color="white">
      </div>
      <div class="containerfooter">
        <div class="rowfooter">
          <div class="col-md-8 col-sm-6 col-xs-12">
            <p class="copyright-text">Copyright &copy; 2022 All Rights Reserved by 
             <strong>Muhamad Fannan</strong>
            </p>
          </div>
        </div>
      </div>
</footer>





<script>
        const card = document.getElementById('card');
        const nav = document.getElementById('navbar');
        const rubah = document.getElementById('token');
        const container = document.getElementById('container')
        
        rubah.addEventListener('click',function(){
            nav.classList.toggle('rubah')
        })
        rubah.addEventListener('click',function(){
            container.classList.toggle('ganti')
        })
    </script>
</body>
</html>