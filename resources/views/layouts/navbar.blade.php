<!DOCTYPE html>
<html data-bs-theme="light" lang="en" style="width: 1440px;height: 1248px;box-shadow: 0px 0px 0px;">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>DDRI Dashboard</title>
    <link rel="stylesheet" href="{{asset('cssfile/bootstrap.min.css')}}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins&amp;display=swap">
    <link rel="stylesheet" href="{{asset('cssfile/aos.min.css')}}">
    <link rel="stylesheet" href="{{asset('cssfile/Bold-BS4-Footer-Big-Logo.css')}}">
    <link rel="stylesheet" href="{{asset('cssfile/Navbar-Right-Links-icons.css')}}">
    <link rel="stylesheet" href="{{asset('cssfile/styles.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/i18n/defaults-*.min.js"></script> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</head>

<body style="border-color: rgb(46,127,208);color: rgb(255,255,255);">
    <nav class="navbar navbar-expand-md fixed-top py-3 navbar-light" data-aos="slide-down" data-aos-duration="1000" style="background: var(--bs-body-bg);height: 115px;box-shadow: 0px 0px rgb(99,84,84), 0px 0px 4px 5px var(--bs-secondary-bg-subtle);">
        <div class="container-fluid"><a class="navbar-brand d-flex align-items-center" href="#"></a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-2"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-2" style="width: 1440px;text-align: left;font-family: Poppins, sans-serif;"><img src="{{asset('img/duallogo-white-icta%201(1).png')}}">
                <ul class="navbar-nav ms-auto"></ul>
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link active" href="#" style="margin-left: 50px;width: 150px;">ICTA Digital Hub</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Capacity Building Drive</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Downloads</a></li>
                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link active" href="#">Our Volunteers</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Events</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Contact Us</a></li>
                    <li class="nav-item" style="margin-left: -50px;"><a class="nav-link" href="#" style="margin-left: 70px;margin-right: 20px;background: url(&quot;assets/img/Screenshot%20(561)%205.png&quot;);color: var(--bs-body-bg);">Get Involved</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <section>
        @yield('content')
    </section>
    <footer data-aos="slide-up" data-aos-duration="1000" id="myFooter" style="width:100%;background: #C1C2DA;">
        <div class="container-fluid">
            <div class="row footer-copyright" style="background: var(--bs-body-bg);">
                <div class="col" style="background: rgb(7,35,77);height: 77px;margin-top: -30px;">
                    <p style="text-align: left;font-family: Poppins, sans-serif;font-size: 14px;color: var(--bs-body-bg);margin-top: 30px;">Copyright @ 2023 <span style="color: rgb(255, 0, 0);">ICT Agency of Sri Lanka</span>. All rights reserved&nbsp;</p>
                </div>
            </div>
        </div>
    </footer>
    <footer class="text-white bg-dark"></footer>
    <script src="{{asset('jsfile/bootstrap.min.js')}}"></script>
    <script src="{{asset('jsfile/aos.min.js')}}"></script>
    <script src="{{asset('jsfile/bs-init.js')}}"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
</body>

</html>