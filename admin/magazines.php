

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
    <!-- CSS -->
    <link rel="stylesheet" href="css/style.css" />
    <title>E-Library</title>
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark py-3">
        <div class="container">
            <a href="#" class="navbar-brand" style="font-family: algerian; ">E-Library</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navItems">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navItems">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a href="index.php" class="nav-link">Home</a>
                    </li>
                    
                </ul>
            </div>
        </div>
    </nav>

    <!-- Header -->
    <section class="bg-light text-dark p-5 p-lg-0 pt-lg-5 text-center text-sm-start">
        <div class="container">
            <div class="d-sm-flex align-items-center justify-content-between">
                <div>
                    <h1> <span class="text-warning">Magazines</span></h1>
                    <p class="lead my-4">
                        Find the most popular magazines here
                    </p>
                    
                </div>
                <img class="image-fluid w-50 d-none d-sm-block" src="images/m.jpg" alt="" />
            </div>
        </div>
    </section>



<!-- Cards Section -->
<section class="p-5">
    <div class="container">
        <div class="row text-center g-4">
            <!-- Card-1 -->
            <div class="col-md">
                <div class="card bg-dark text-light">
                    <div class="card-body text-center">
                        <div class="h1 mb-3">
                            <i class="bi bi-book"></i>
                        </div>
                        <h3 class="card-title mb-3">India Today</h3>
                       
                        <a href="https://drive.google.com/file/d/145oaXeN2wg8MbCWOw4Ae87jqk_f2xH3R/view?usp=sharing" class="btn btn-primary">Click here</a>
                    </div>
                </div>
            </div>
            <!-- Card-2 -->
            <div class="col-md">
                <div class="card bg-light text-dark">
                    <div class="card-body text-center">
                        <div class="h1 mb-3">
                            <i class="bi bi-book"></i>
                        </div>
                        <h3 class="card-title mb-3">Time</h3>

                        <a href="https://time.com/" class="btn btn-primary">Click here</a>
                    </div>
                </div>
            </div>
            <!-- Card-3 -->
            <div class="col-md">
                <div class="card bg-dark text-light">
                    <div class="card-body text-center">
                        <div class="h1 mb-3">
                            <i class="bi bi-book"></i>
                        </div>
                        <h3 class="card-title mb-3">Outlook Magazine</h3>
                        
                        <a href="https://www.outlookindia.com/" class="btn btn-primary">Click here</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>




 <!-- Javascript -->
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
 integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
 crossorigin="anonymous"></script>

</body>
</html>

