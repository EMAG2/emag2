<html>
<head>
    <meta charset="UTF-8">
    <title>Site institucional</title>
    <link rel="stylesheet" href="assets/css/reset.css" type="text/css">
    <link rel="stylesheet" href="assets/css/bootstrap4/bootstrap-reboot.css" type="text/css">
    <link rel="stylesheet" href="assets/css/bootstrap4/bootstrap.css" type="text/css">
    <link rel="stylesheet" href="assets/css/bootstrap4/bootstrap-grid.css" type="text/css">

    <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" type="text/css">
    <link rel="stylesheet" href="assets/css/form.css" type="text/css">
    <link rel="stylesheet" href="assets/css/style.css" type="text/css">

</head>
<body>

<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <div class="logo">
                <a class="navbar-brand" href="home"><img src="assets/img/logo-blue.png" alt="Logotipo EMAG2"
                                                         title="Logotipo EMAG2"></a>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse float-right" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto float-right">
                    <li class="nav-item"><a class="nav-link" href="about">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="contributors">Contributors</a></li>
                    <li class="nav-item"><a class="nav-link" href="sponsors">Sponsors</a></li>
                    <li class="nav-item"><a class="nav-link" href="contact">Contact</a></li>
                </ul>
                <div class="button-menu">
                    <button class="btn btn-sm btn-outline-primary my-2 my-sm-0 mr-0" onclick="location.href='login';">
                        Login
                    </button>
                    <button class="btn btn-sm btn-primary my-2 my-sm-0" onclick="location.href='register';">Register
                        now
                    </button>
                </div>
                <div class="language-menu">
                    <div class="title-language">
                        <h6 class="small">Languages:</h6>
                        <div class="icon-languages">
                            <a href="#" data-toggle="tooltip" data-placement="bottom" title="English"><img
                                        src="assets/img/icon-en.png" alt="Choice english language"/></a>
                            <a href="#"><img src="assets/img/icon-pt.png" alt="Choice portuguese language"
                                             title="Portuguese"/></a>
                            <a href="#"><img src="assets/img/icon-fr.png" alt="Choice french language" title="French"/></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</header>

<?php $this->loadViewInTemplate($viewName, $viewData); ?>

<footer class="container">
    <div class="footer">
        <div class="row">
            <section class="col-2 mr-5">
                <h1 class="mb-4">Institutional</h1>
                <ul>
                    <li><a href="about"><span
                                    class="icon ion-ios-bolt text-danger font-weight-bold mr-2"></span>About</a></li>
                    <li><a href="fsma-about"><span class="icon ion-ios-bolt text-danger font-weight-bold mr-2"></span>FSMA
                            about</a></li>
                    <li><a href="contact"><span class="icon ion-ios-bolt text-danger font-weight-bold mr-2"></span>Contact
                    </li>
                    </a>
                    <li><a href="contact"><span class="icon ion-ios-bolt text-danger font-weight-bold mr-2"></span>Become
                            an employee</a></li>
                </ul>
            </section>
            <section class="col-2 mr-5">
                <h1 class="mb-4">User Suport</h1>
                <ul>
                    <a href="faq">
                        <li><span class="icon ion-ios-bolt text-danger font-weight-bold mr-2"></span>FAQ
                    </a></li>
                    <a href="learning">
                        <li><span class="icon ion-ios-bolt text-danger font-weight-bold mr-2"></span>Learning
                    </a></li>
                    <a href="call-suport">
                        <li><span class="icon ion-ios-bolt text-danger font-weight-bold mr-2"></span>Call Suport
                    </a></li>
                    <a href="share-your-idea">
                        <li><span class="icon ion-ios-bolt text-danger font-weight-bold mr-2"></span>Share your idea
                    </a></li>
                </ul>
            </section>
            <section class="col-2 mr-5">
                <h1 class="mb-4">Community</h1>
                <ul>
                    <li><a href="forum"><span
                                    class="icon ion-ios-bolt text-danger font-weight-bold mr-2"></span>Forum</a></li>
                    <li><a href="share-your-idea"><span
                                    class="icon ion-ios-bolt text-danger font-weight-bold mr-2"></span>Share your
                            idea</a></li>
                    <li><a href="collaborators"><span
                                    class="icon ion-ios-bolt text-danger font-weight-bold mr-2"></span>Collaborators</a>
                    </li>
                </ul>
            </section>
            <section class="col-2 mr-5">
                <h1 class="mb-4">Social networks</h1>
                <i class="icon ion-social-facebook-outline mr-4" style="font-size: x-large"></i>
                <i class="icon ion-social-twitter-outline mr-4" style="font-size: x-large"></i>
                <i class="icon ion-social-github-outline mr-4" style="font-size: x-large"></i>
            </section>
        </div>
    </div>
    <div class="credits mt-3">
        <p class="small text-center mb-0">© FSMA 2018 - All rights reserved.</p>
        <p class="small text-center"><b>We loves Open source!</b></p>
    </div>
</footer>

<script src="assets/js/jquery/jquery-3.2.1.min.js" type="text/javascript"></script>
<script src="assets/js/script.js" type="text/javascript"></script>
<script src="assets/js/bootstrap4/bootstrap.min.js" type="text/javascript"></script>
<script>
    $('[data-toggle="tooltip"]').tooltip();
</script>
</body>
</html>
