<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Store</title>
    <!-- boostrap css  -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- js and jquery  -->

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- external css  -->
    <link rel="stylesheet" href="style.css">

    <style>
        @media only screen and (min-width: 667px) {
            .dropdown-menu {
                left: -100px;
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
                    <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="book.php">Book</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="people.php">People</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="advertisement.php">Advertisement</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Problem</a>
                </li>
            </ul>
            <div class="dropdown">
                <img src="img/b10.jpg" width="30" height="30" class="rounded profilephoto my-2 my-sm-0  dropdown-toggle mr-5" alt="Cinque Terre" data-toggle="dropdown">
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Name</a>
                    <a class="dropdown-item" href="#">Setting</a>
                    <a class="dropdown-item" href="logout.php">Logout</a>
                </div>
            </div>
    </nav>

    <div class="container">
        <div class="input-group mb-3 mt-3 col-sm-12">
            <input type="text" class="form-control" placeholder=" Search : Enter Name/Mobile " id="search_text" name="search">
            <div class="input-group-append">
                <button class="btn btn-success" type="submit" name="submit">Go</button>
            </div>
        </div>
        <div class="alert alert-danger mt-3 mb-3" role="alert">
            <p>Person Name</p>
            <p>Mobile</p>
            A simple danger alert—check it out!
            <div>
                <button>Replay</button>
            </div>
        </div>
        <div class="alert alert-danger mt-3 mb-3" role="alert">
            <p>Person Name</p>
            <p>Mobile</p>
            A simple danger alert—check it out!
            <div>
                <button>Replay</button>
            </div>
        </div>
    </div>

    <nav aria-label="Page navigation example">
        <ul class="pagination">
            <li class="page-item"><a class="page-link" href="#">Previous</a></li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item"><a class="page-link" href="#">Next</a></li>
        </ul>
    </nav>

</body>

</html>