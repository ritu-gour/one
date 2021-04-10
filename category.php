<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Profile Seting</title>

    <!-- bootstrap css -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />

    <style>
        @media only screen and (max-width: 640px) {
            .hr1 {
                margin-top: 50px;
                background-color: blue;
            }
        }
    </style>
</head>

<body>

    <!-- navbar  -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Order</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="contact.php">Contact Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="detail.html">Product Detail</a>
                </li>

            </ul>
            <div class="dropdown">
                <img src="https://avatars2.githubusercontent.com/u/48873989?s=400&u=e84b2fdeb89ab044c8700c0ecffae801a26bedaa&v=4" width="30" height="30" class="rounded profilephoto my-2 my-sm-0  dropdown-toggle mr-5" alt="Cinque Terre" data-toggle="dropdown">
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#"> <?php echo $name ?> </a>
                    <a class="dropdown-item" href="#"> <?php echo $user ?> </a>
                    <a class="dropdown-item" href="#">Setting</a>
                    <a class="dropdown-item" href="logout.php">Logout</a>
                </div>
            </div>
    </nav>
    <h4 class="mt-2 text-center">Total Result <b class="badge badge-primary">12</b>
    </h4>

    <div class="container ">
        <div class="row  ">
            <div class="col-sm-4 mb-2">
                <div class="card ml-auto mr-auto" style="width: 18rem;">
                    <img src="https://avatars2.githubusercontent.com/u/48873989?s=400&u=e84b2fdeb89ab044c8700c0ecffae801a26bedaa&v=4" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <div class="d-flex justify-content-between ">
                            <div >Flex item 1</div>
                            <div >Flex item 2</div>
                            <div >Flex item 3</div>
                        </div>
                        <a href="#" class="btn btn-primary mt-2">Add to cart</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 mb-2 ">
                <div class="card ml-auto mr-auto" style="width: 18rem;">
                    <img src="https://avatars2.githubusercontent.com/u/48873989?s=400&u=e84b2fdeb89ab044c8700c0ecffae801a26bedaa&v=4" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <div class="d-flex justify-content-between ">
                            <div >Flex item 1</div>
                            <div >Flex item 2</div>
                            <div >Flex item 3</div>
                        </div>
                        <a href="#" class="btn btn-primary mt-2">Add to cart</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 mb-2">
                <div class="card ml-auto mr-auto" style="width: 18rem;">
                    <img src="https://avatars2.githubusercontent.com/u/48873989?s=400&u=e84b2fdeb89ab044c8700c0ecffae801a26bedaa&v=4" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Product Name</h5>
                        <div class="d-flex justify-content-between ">
                            <div >Flex item 1</div>
                            <div>Flex item 2</div>
                            <div>Flex item 3</div>
                        </div>
                        <a href="#" class="btn btn-primary mt-2">Add to cart</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- js and jquery  -->

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>