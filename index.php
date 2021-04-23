<!DOCTYPE HTML>
<html lang="en-us">
    <head>
        <title>Démo :: Coif App</title>

        <meta charset="utf-8" /> <!-- Encodage des carractères de la page -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="Bpd_237" />

        <link rel="icon" href="Data/imgs/logo.ico" /> <!-- Icone de la page -->

        <link href="Dist/css/main.css" type="text/css" rel="stylesheet" >
    </head>
    <body>
        <div class="content-block" id="header">
            <div id="overlay-1">
                <header id="site-header" class="clearfix">
                    <h1><a href="#" class="script">Bienvenus dans la démonstration de Coif ...</a><span class="pull-right"><img src="Data/imgs/logo.png" width="30" height="30"></span></h1>
                
            </div>  <!-- overlay-1 -->
        </div>  <!-- content-block -->

        <footer id="site-footer">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="col-md-12 black-footer">
                            <div class="">Copyright &copy; 2018 Coif / Designed By <a href="https://www.facebook.com/biya paul kamga/">Bpd_237 (690 534 401)</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>   <!-- site-footer -->
        <div class="user-box animated fadeInDown">
            <div class="login-body">
                <div>
                  <h4>Pour les employés</h4>
                  <ul>
                    <li> user1/user1</li>
                    <li> user2/user2</li>
                    <li> user3/user3</li>
                    <li> user4/user4</li>
                  </ul>
                </div>
                <div>
                  <h4>Pour les Patrons</h4>
                  <ul>
                    <li> patron1/patron1</li>
                    <li> patron2/patron2</li>
                    <li> patron3/patron3</li>
                    <li> patron4/patron4</li>
                  </ul>
                </div>
            </div>
        </div>
        <div class="login-box animated fadeInDown">
            <div class="login-body">
                <div class="login-title"><strong>Welcome</strong>, <em>Please login</em></div>
                <form action="admin/controlLog" class="form-horizontal" method="post">
                    <div class="form-group">
                        <div class="col-md-12">
                            <input type="text" class="form-control text" placeholder="Username" name="username" />
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <input type="password" class="form-control password" placeholder="Password" name="password" />
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <input type="submit" name="login" class="btn btn-success btn-block" value="Log In">
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <!-- js -->
        <script>
            new WOW().init();
        </script>

        <script src="Dist/js/jquery-2.1.3.min.js"></script>
        <script src="Dist/js/bootstrap.min.js"></script>
        <script src="Dist/js/jquery.actual.min.js"></script>
        <script src="Dist/js/isotope.pkgd.min.js"></script>
        <script src="Dist/js/owl.carousel.min.js"></script>
        <script src="Dist/js/jquery.isonscreen.js"></script>
        <script src="Dist/js/main.js"></script>
    </body>
</html>