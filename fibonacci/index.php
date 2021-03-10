<!DOCTYPE html>
<html lang="en">

<head>
    <title>BLOG PRIBADIKU</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/css/style.css" rel="stylesheet">
    <script src="../assets/js/jquery-3.5.1.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container">
        <div id="header">
            <h1>FIBONACCI</h1>
        </div>
    </div>

    <div class="container">


        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse" id=myNavbar>
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="../index.php">Beranda</a></li>
                        <li><a href="#">Kontak</a></li>
                        <li><a href="#">Bantuan</a></li>
                        <li><a href="/WEB/fibonacci/index.php">Fibonacci</a></li>
                        <li><a href="/WEB/aritmatika/index.php">Aritmatika</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#"><span class="glyphicon gliphicon-log-in"></span>Login</a></li>
                        <li><a href="../signin.php  "><span class="glyphicon glyphicon-user"></span>Sign In</a></li>

                    </ul>
                </div>
            </div>
        </nav>


    </div>
    <div class="container">
        <div id="main-content" class="col-sm-7">
            <form action="index.php" method="post">
                Deret Pertama : <input type="text" name="angka1">
                Deret Kedua   : <input type="text" name="angka2"> 
                Jumlah Deret  : <input type="text" name="angkaN"> <br></br>
                <input type="submit">
            </form>
        </div>
        <div id="right-sidebar" class="col-sm-5">
            <h3>HASIL</h3>
            <?php
            function Fibonacci($n)
            {


                if (isset($_POST["angka1"]) AND isset($_POST["angka2"]) AND isset($_POST["angkaN"]) ) {
                    $angka1 = $_POST['angka1'];
                    $angka2 = $_POST['angka2'];
                    

                    $counter = 0;
                    //echo "<h3>Hasil : </h3>";
                    while ($counter < $n) {
                        if ($counter == 0) {
                            echo ' ' . "<h4><b>$angka1, </b>";
                        } else if ($counter == 1) {
                            echo ' ' . "<b>$angka1,</b>";
                        } else {
                            if ($counter == $n-1){
                                echo ' ' . "$angka1"; 
                            }else{
                                echo ' ' . "$angka1,";
                            }
                            
                        }

                        $angka3 = $angka2 + $angka1;
                        $angka1 = $angka2;
                        $angka2 = $angka3;
                        $counter = $counter + 1;
                    }
                }
            }
            // Driver Code 
            //$n = 12;
            error_reporting(E_ALL & ~E_NOTICE);
            $n = $_POST['angkaN'];
            Fibonacci($n);

            ?>

        </div>

    </div>

    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="assets/js/bootstrap.min.js"></script>
</body>

</html>