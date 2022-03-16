<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link
        rel="shortcut icon"
        href={{asset("images/favicon.svg")}}
            type="image/x-icon"
    />
    <title>Login</title>

    <!-- ========== All CSS files linkup ========= -->
    <link rel="stylesheet" href={{asset("css/bootstrap.min.css")}} />
    <link rel="stylesheet" href={{asset("css/lineicons.css")}} />
    <link rel="stylesheet" href={{asset("css/materialdesignicons.min.css")}} />
    <link rel="stylesheet" href={{asset("css/fullcalendar.css")}} />
    <link rel="stylesheet" href={{asset("css/fullcalendar.css")}} />
    <link rel="stylesheet" href={{asset("css/main.css")}} />
</head>
<body>
<div class="row g-0 auth-row">
    <div class="col-lg-6">
        <div class="auth-cover-wrapper bg-primary-100">
            <div class="auth-cover">
                <div class="title text-center">
                    <h1 class="text-primary mb-10">Welcome Back</h1>
                    <p class="text-medium">
                        Sign in to your Existing account to continue
                    </p>
                </div>
                <div class="cover-image">
                    <img src="../../../public/images/auth/signin-image.svg" alt=""/>
                </div>
                <div class="shape-image">
                    <img src="../../../public/images/auth/shape.svg" alt=""/>
                </div>
            </div>
        </div>
    </div>
    <!-- end col -->
    <div class="col-lg-6">
        <div class="signin-wrapper">
            <div class="form-wrapper">
                <h6 class="mb-15">Sign In Form</h6>
                <p class="text-sm mb-25">
                    Start creating the best possible user experience for you
                    customers.
                </p>
                <form action="{{route('login')}}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-12">
                            <div class="input-style-1">
                                <label>Email</label>
                                <input name="email" type="email" placeholder="Email"/>
                            </div>
                        </div>
                        <!-- end col -->
                        <div class="col-12">
                            <div class="input-style-1">
                                <label>Password</label>
                                <input name="password" type="password" placeholder="Password"/>
                            </div>
                        </div>
                        <!-- end col -->
                        <div class="col-xxl-6 col-lg-12 col-md-6">
                            <div class="form-check checkbox-style mb-30">
                                <input
                                    class="form-check-input"
                                    type="checkbox"
                                    value=""
                                    id="checkbox-remember"
                                />
                                <label
                                    class="form-check-label"
                                    for="checkbox-remember"
                                >
                                    Remember me next time</label
                                >
                            </div>
                        </div>
                        <!-- end col -->
                        <div class="col-xxl-6 col-lg-12 col-md-6">
                            <div
                                class="
                            text-start text-md-end text-lg-start text-xxl-end
                            mb-30
                          "
                            >
                                <a href="#0" class="hover-underline"
                                >Forgot Password?</a
                                >
                            </div>
                        </div>
                        <!-- end col -->
                        <div class="col-12">
                            <div
                                class="
                            button-group
                            d-flex
                            justify-content-center
                            flex-wrap
                            "
                            >
                                <button class="main-btn primary-btn btn-hover w-100 text-center">
                                    Sign In
                                </button>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->
                </form>
                <div class="singin-option pt-40">
                    <p class="text-sm text-medium text-center text-gray">
                        Easy Sign In With
                    </p>
                    <div
                        class="
                        button-group
                        pt-40
                        pb-40
                        d-flex
                        justify-content-center
                        flex-wrap
                      "
                    >
                        <button class="main-btn primary-btn-outline m-2">
                            <i class="lni lni-facebook-filled mr-10"></i>
                            Facebook
                        </button>
                        <button class="main-btn danger-btn-outline m-2">
                            <i class="lni lni-google mr-10"></i>
                            Google
                        </button>
                    </div>
                    <p class="text-sm text-medium text-dark text-center">
                        Don’t have any account yet?
                        <a href="{{route('showRegister')}}">Create an account</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- end col -->
</div>
<main class="main-wrapper">
    <!-- ========== footer start =========== -->
    <footer class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 order-last order-md-first">
                    <div class="copyright text-center text-md-start">
                        <p class="text-sm">
                            Designed and Developed by
                            <a
                                href="https://plainadmin.com"
                                rel="nofollow"
                                target="_blank"
                            >
                                PlainAdmin
                            </a>
                        </p>
                    </div>
                </div>
                <!-- end col-->
                <div class="col-md-6">
                    <div
                        class="
                  terms
                  d-flex
                  justify-content-center justify-content-md-end
                "
                    >
                        <a href="#0" class="text-sm">Term & Conditions</a>
                        <a href="#0" class="text-sm ml-15">Privacy & Policy</a>
                    </div>
                </div>
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </footer>
    <!-- ========== footer end =========== -->
</main>
<!-- ======== main-wrapper end =========== -->

<!-- ========= All Javascript files linkup ======== -->
<script src={{asset("js/bootstrap.bundle.min.js")}}></script>
<script src={{asset("Chart.min.js")}}></script>
<script src={{asset("js/dynamic-pie-chart.js")}}></script>
<script src={{asset("js/moment.min.js")}}></script>
<script src={{asset("js/fullcalendar.js")}}></script>
<script src={{asset("js/jvectormap.min.js")}}></script>
<script src={{asset("js/world-merc.js")}}></script>
<script src={{asset("js/polyfill.js")}}></script>
<script src={{asset("js/main.js")}}></script>

</body>
</html>

