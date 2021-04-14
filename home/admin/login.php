<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Faculdade Internacional do Delta / Cursos de Graduação e Pós-Graduação">
    <meta name="keywords" content="Faculdade, Graduação, Pós-Graduação" />
    <meta name="author" content="Junior Silva Desenvolvedor">
    <link rel="icon" href="../images/favicon.ico">

    <title>Login | FID - Faculdade Internacional do Delta</title>  

    <!-- Bootstrap core CSS -->
    <link href="../libs/bootstrap.min.css" rel="stylesheet">



    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Hind+Siliguri:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">



    <!-- Setting only -->
    <link href="https://fonts.googleapis.com/css?family=Archivo+Black|Germania+One|Lobster|Yanone+Kaffeesatz:200,300,400,700" rel="stylesheet">



    <!-- CSS libraries -->
    <link href="../libs/animate.css" rel="stylesheet">
    <link href="../libs/hover-min.css" rel="stylesheet">
    <link href="../libs/lightbox.min.css" rel="stylesheet">
    <link href="../libs/font-awesome.min.css" rel="stylesheet">



    <!-- ICONS fontawesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">


    <!-- Styles -->
    <link href="../css/style.css" rel="stylesheet">
    <link href="../css/mobile.css" rel="stylesheet">
    <link href="../css/slick.css" rel="stylesheet">
    <link href="../css/shadowbox.css" rel="stylesheet">



    <!-- Custom style for other home page guides -->
    <link href="../css/customize.css" rel="stylesheet">
</head>
<body>
    <div class="detail-header detail-header-aboutus">
        <div class="container">
            <h1 class="f-bold" style="margin-bottom: 15px; color: #104e8b;">
                <i class="fas fa-lock" style="color: #104e8b"></i>
                Login Admin
            </h1><br>
        </div>
        <div class="background bg7"></div>
    </div>

    <!-- end of banner header -->
    <main>    
        <div class="container">
            <article>
                <div class="detail-signin">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 col-login">
                        <div class="model-l">      


                            <h3 class="under-line">
                                Login
                                <div class="line"></div>
                            </h3>
                            <form method="post" class="signin-form"> 
                                <div class="form-group">
                                    <label for="usr">Email:</label>
                                    <input type="text" placeholder="Your user email id" id="userName" name="userName" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="pwd">Password:</label>
                                    <input type="password" placeholder="* * * * * *" id="password" name="password" class="form-control" required>
                                </div>    
                                <div class="form-group">                                
                                    <button type="submit" name="userRegBtn" class="btn btn-lg btn-primary">Login</button>
                                </div>    

                            </form>                      
                            <div class="clearfix"></div>
                            <form method="post" class="signin-form"> 

                                <a class="for-got" onclick="ayantoggle();" href="javascript:;">Forgot your password?</a>
                                <div class="forgot">

                                    <div class="form-group">
                                        <label for="usr">Enter your Email Address here to receive a link to change password:</label>
                                        <input type="text" placeholder="Your user email id" id="userName" name="userName" class="form-control" required>
                                    </div>
                                    <div class="form-group">                                
                                        <button type="submit" name="userRegBtn" class="btn btn-lg btn-default">Send Mail</button>
                                    </div> 

                                </div>

                            </form>
                        </div>
                    </div>    

                    <div class="clearfix"></div>
                </div>

            </div>


        </article>


    </div>

</main>
</body>
</html>