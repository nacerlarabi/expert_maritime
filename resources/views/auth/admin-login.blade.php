<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>
<title>SE CONNECTER</title>
<!-- Meta tag Keywords -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Glassy Login Form Responsive Widget,Login form widgets, Sign up Web forms , Login signup Responsive web form,Flat Pricing table,Flat Drop downs,Registration Forms,News letter Forms,Elements" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Meta tag Keywords -->
<!-- css files -->
<link rel="stylesheet" href="../css/login/font-awesome.css"> <!-- Font-Awesome-Icons-CSS -->
<link rel="stylesheet" href="../css/login/style.css" type="text/css" media="all" /> <!-- Style-CSS --> 
<!-- //css files -->
<!-- web-fonts -->
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700" rel="stylesheet">
<!-- //web-fonts -->
</head>
<body>
        <!--header-->
        <div class="header-w3l">
            <h1>Bureau d'Expertises Maritimes Abderrezak</h1>
        </div>
        <!--//header-->
        <!--main-->
        <div class="main-w3layouts-agileinfo">
               <!--form-stars-here-->
                        <div class="wthree-form">
                            <h2>Remplissez le formulaire ci-dessous pour connecter</h2>
                            <form action="{{ route('admin.login.submit') }}" method="post">
                                {{ csrf_field() }}
                                <div class="form-sub-w3">
                                    <input type="text" name="username" placeholder="Nom d'utilisateur" required="" />
                                <div class="icon-w3">
                                    <i class="fa fa-user" aria-hidden="true"></i>
                                </div>
                                </div>
                                <div class="form-sub-w3">
                                    <input type="password" name="password" placeholder="Mot de passe" required="" />
                                <div class="icon-w3">
                                    <i class="fa fa-unlock-alt" aria-hidden="true"></i>
                                </div>
                                </div>
                                <label class="anim">
                                <input type="checkbox" class="checkbox" name="remember" value="{{ old('remember') ? 'checked' : 'true' }}">
                                    <span>Mémoriser le mot de passe</span> 
                                    <a href="#">mot de passe oublier</a>
                                </label>
                                

                                <div class="clear"></div>
                                <div class="submit-agileits">
                                    <input type="submit" value="connecter">
                                </div>
                                
                            </form>
                            
                        </div>
                </div>

        <!--//main-->
        <!--footer-->
    <div class="footer">
    <p><a></a></p>
    </div>
        <!--//footer-->
</body>
</html>