<?php 
require_once "header.php";
?>


<body>
    <div class="home-btn d-none d-sm-block">
        <a href="index.html" class="text-reset"><i class="fas fa-home h2"></i></a>
    </div>
    <div class="account-pages my-5 pt-sm-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-5">
                    <div class="card overflow-hidden">
                        <div class="bg-login text-center">
                            <div class="bg-login-overlay"></div>
                            <div class="position-relative">
                                <!-- <h5 class="text-white font-size-20">Welcome Back !</h5> -->
                                <p class="text-white-50 mb-0">Добро пожаловать!</p>
                                <a href="index.html" class="logo logo-admin mt-4">
                                    <img src="assets/images/logo-sm-dark.png" alt="" height="30">
                                </a>
                            </div>
                        </div>
                        <div class="card-body pt-5">
                            <div class="p-2">
                                <form class="form-horizontal" action="index.html">

                                    <div class="mb-3">
                                        <label class="form-label" for="username">Email</label>
                                        <input type="text" class="form-control" id="username" placeholder="Введите email">
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label" for="userpassword">Пароль</label>
                                        <input type="password" class="form-control" id="userpassword"
                                        placeholder="Введите пароль">
                                    </div>

                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="customControlInline">
                                        <label class="form-check-label" for="customControlInline">Запомнить
                                            меня</label>
                                    </div>

                                    <div class="mt-3">
                                        <button class="btn btn-primary w-100 waves-effect waves-light" type="submit">
                                            Войти</button>
                                    </div>

                                    <!-- <div class="mt-4 text-center">
                                        <a href="pages-recoverpw.html" class="text-muted"><i
                                                class="mdi mdi-lock me-1"></i> Forgot your password?</a>
                                    </div> -->
                                </form>
                            </div>

                        </div>
                    </div>
         
<?php 
require_once "footer.php";
?>
