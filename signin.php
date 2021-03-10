<!DOCTYPE html>
<html lang="en">

<head>
    <title> SIGN IN </title>
    <meta name="vieport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1" />
    <meta property="og:locale" content="en_US">
    <meta property="og:type" content="">
    <meta property="og:title" content="">
    <meta property="og:description" content="">
    <meta property="og:url" content="">
    <meta property="og:site_name" content="">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <script src="/assets/js/jquery-3.5.1.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body >
    <div class="container">
        <div id="header">
            <h1>SIGN IN</h1>
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
                        <li class="active"><a href="index.php">Beranda</a></li>
                        <li><a href="#">Kontak</a></li>
                        <li><a href="#">Bantuan</a></li>
                    </ul>
                   
                </div>
            </div>
        </nav>
        <div id="main-content">
            <div class="col-lg-8 ">
                <h3 float><i>Silahkan masukan data yang diperlukan</i></h3>
                <hr>
                <form class="form-horizontal" action="  ">
                    <div class="form-group">
                        <label class="control-label col-sm-3">Nama Depan <span class="white">:</span></label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" required placeholder="First Name" name="name">
                        </div>
                    </div> 
                    <div class="form-group">
                        <label class="control-label col-sm-3">Nama Belakang </label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" required placeholder="Last Name" name="name">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-3">Nomor HP</label>
                        <div class="col-sm-9">
                            <input type="tel" class="form-control" placeholder="08x xxx xxx xxx" name="telephone">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-3">Password</label>
                        <div class="col-sm-9">
                            <input type="password" class="form-control psw" placeholder="Password" name="Enter password">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-3">Ulang Password</label>
                        <div class="col-sm-9">
                            <input type="password" class="form-control repsw" placeholder="Ulang Password" name="Enter password">
                            <small class="errpsw"></small>
                        </div>
                    </div>
                   
                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-9">
                            <button type="submit" class="btn btn-default" style="background-color:#2980b9;;">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
           
        </div>
    </div>
    <div id="myModal" class="modal Fade" role="dialog">
        <div class="modal-dialog">
            <!--modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Berhasil</h4>
                </div>
                <div class="modal-body">
                    <p></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</body>
<script>
    $(document).ready(function() {
        $(".form-horizontal  ").submit(function() {
            var ps1 = $('.psw').val();
            var ps2 = $('.repsw').val();
            var valid = 0;
            $('.err').html('');
            if (ps1 == ps2) {
                valid = 1;
            } else {
                $('.errpsw').html('Passsword  Tidak  Sama');
            }
            if (valid == 0) {
                event.preventDefault();
            } else {
                $('p').html("Selamat  pendaftaran  A.N  " + $('input[name="nama  "]').val() + " telah  berhasil  ");
                $('.modal').modal('show');
                event.preventDefault();
            }
        });
    });
</script>

</html>