<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - E-Project</title>

    <!-- Index.css File -->
    <link rel="stylesheet" type="text/css" href="css/index.css" />

    <!-- Fonts.css File -->
    <link rel="stylesheet" type="text/css" href="css/fonts.css" />

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- Lineawesome icons link -->
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">

</head>
<body>

    <!-- TopBar section start from here which holds some basic functionalities -->
    
    <div class="top_bar">
        <div class="left_side d-flex justify-content-between align-items-center">
            <a href="##" class="d-flex justify-content-center align-items-center mr-3"><i class="d-mobile-600-none lar la-question-circle"></i><span class="d-mobile-600-none pl-2">Can we help you?</span></a>
            <a href="##" class="d-flex justify-content-center align-items-center"><i class="las la-mobile"></i><span class="pl-2">+92 330 3744620</span></a>
        </div>
        <div class="right_side">
            <a href="##" class="px-2"><i class="las la-map-marker"></i></a>
            <a href="##" class="px-2"><i class="las la-book"></i></a>
            <a href="##" class="px-2"><i class="lar la-user"></i></a>
        </div>
    </div>

    <!-- TopBar section end -->

    <!-- Navbar start from here -->
    <div class="container-fluid navbar_container">
    <nav class="navbar navbar-expand-xl navbar-light">
        <a class="navbar-brand" href="#">
            <img src="images/logo2.PNG" width="170" />
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item active">
                    <a class="nav-link d-block px-4" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link d-block px-4" href="#">Featured Books</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link d-block px-4" href="#">About Us</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link d-block px-4 dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Products
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">CDs</a>
                        <a class="dropdown-item" href="#">Hard Copy</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li>
            </ul>
            <form class="btn-group">
                <button class="btn" type="submit"><i class="las la-search"></i></button>
                <input class="form-control" type="search" placeholder="Search" aria-label="Search">
            </form>
        </div>
    </nav>
    </div>
    <!-- Navbar end here -->

    <!-- Main slider Start From Here -->
    <div class="slider">
        <div class="slider_content d-flex justify-content-center align-items-center">
            <div class="left_side d-flex justify-content-left align-items-center">
                <div>
                    <h6 class="font-weight-bold mb-0">THE BOOKWORMS EDITORS</h6>
                    <h1>
                        Featured Books of the <br />
                        <b>
                            <script> 
                                const monthNames = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
                                const date = new Date();
                                document.write( monthNames[ date.getMonth() ] );
                            </script>
                        </b>
                    </h1>
                    <button class="btn mt-3">See More</button>
                </div>
            </div>
            <div class="right_side">
                <img src="images/pngtree-purple-novel-coronavirus-pneumonia-prevention-and-control-leaflet-png-image_5564246.png" width="100%" />
            </div>
        </div>
    </div>
    <!-- Main slider End Here -->

    <!-- Categories section start from here -->
    <div class="featured_categories">
        <div class="d-flex justify-content-between align-items-center">
            <h2>Fetaured Categories</h2>
            <a href="##"><h6 class="d-flex align-items-center justify-content-center"><span>All Categories</span><i class="categories_icons las la-angle-right"></i></h6></a>
        </div>

        <div class="container-fluid mt-4 px-0">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="divs" style="background-color: #FAF1FF;">
                        <div>
                            <img src="images/icons8-professional-photographer-48.png" width="50" class="mb-4" />
                            <h5>Arts & Photography</h5>
                            <a href="##" class="text-secondary">View Details</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="divs" style="background-color: #FAF4EB;">
                        <div>
                            <img src="images/icons8-spaghetti-48.png" width="50" class="mb-4" />
                            <h5>Food & Drink</h5>
                            <a href="##" class="text-secondary">View Details</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="divs" style="background-color: #F4E6E5;">
                        <div>
                            <img src="images/icons8-romance-48.png" width="50" class="mb-4" />
                            <h5>Romance</h5>
                            <a href="##" class="text-secondary">View Details</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="divs" style="background-color: #E6F2F4;">
                        <div>
                            <img src="images/icons8-stethoscope-48.png" width="50" class="mb-4" />
                            <h5>Health</h5>
                            <a href="##" class="text-secondary">View Details</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Categories section end here -->

    <!-- Best Selling books Section Start Here -->
    <div class="bestSellingBook">
        <div class="d-flex justify-content-between align-items-center">
            <h2>Best Selling Books</h2>
            <a href="##"><h6 class="d-flex align-items-center justify-content-center"><span>View All</span><i class="categories_icons las la-angle-right"></i></h6></a>
        </div>

        <div class="container-fluid px-0 mt-4">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="divs">
                        <div class="px-5 py-3">
                            <img src="images/img1.jpg" width="100%" height="192" />
                        </div>
                        <div>
                            <p class="mb-0" style="color: #f9ad45;">3rd Edition</p>
                            <p class="text-justify">
                                Here is some desscription for a particular item book
                            </p>
                            <div class="d-flex justify-content-between align-items-center mb-0 pb-0">
                                <p class="text-secondary mb-0 pb-0">Auther Name</p>
                                <p class="mb-0 pb-0">$29</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="divs">
                        <div class="px-5 py-3">
                            <img src="images/img4.jpg" width="100%" height="192" />
                        </div>
                        <div>
                            <p class="mb-0" style="color: #f9ad45;">3rd Edition</p>
                            <p class="text-justify">
                                Here is some desscription for a particular item book
                            </p>
                            <div class="d-flex justify-content-between align-items-center mb-0 pb-0">
                                <p class="text-secondary mb-0 pb-0">Auther Name</p>
                                <p class="mb-0 pb-0">$29</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="divs">
                        <div class="px-5 py-3">
                            <img src="images/img5.jpg" width="100%" height="192" />
                        </div>
                        <div>
                            <p class="mb-0" style="color: #f9ad45;">3rd Edition</p>
                            <p class="text-justify">
                                Here is some desscription for a particular item book
                            </p>
                            <div class="d-flex justify-content-between align-items-center mb-0 pb-0">
                                <p class="text-secondary mb-0 pb-0">Auther Name</p>
                                <p class="mb-0 pb-0">$29</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="divs">
                        <div class="px-5 py-3">
                            <img src="images/img6.jpg" width="100%" height="192" />
                        </div>
                        <div>
                            <p class="mb-0" style="color: #f9ad45;">3rd Edition</p>
                            <p class="text-justify">
                                Here is some desscription for a particular item book
                            </p>
                            <div class="d-flex justify-content-between align-items-center mb-0 pb-0">
                                <p class="text-secondary mb-0 pb-0">Auther Name</p>
                                <p class="mb-0 pb-0">$29</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Best Selling books Section End Here -->

    <!-- New Release books Section Start Here -->
    <div class="NewRelease">
        <div class="d-flex justify-content-between align-items-center">
            <h2>New Releases</h2>
            <a href="##"><h6 class="d-flex align-items-center justify-content-center"><span>View All</span><i class="categories_icons las la-angle-right"></i></h6></a>
        </div>

        <div class="container-fluid px-0 mt-4">
            <div class="row">
                <div class="col-lg-4 col-md-12 col-sm-12">
                    <div class="offerRelease">
                        <img src="images/new-released.png" width="100%" />
                        <div>
                            <h1>Get Extra</h1>
                            <h1 class="font-weight-bold" style="color: #F75454;">Sale - 25%</h1>
                            <h2 class="text-uppercase" style="color: #BEB4B4;">
                                on order over $100
                            </h2>
                            <button class="btn">View More</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-12 col-sm-12">
                    <nav>
					    <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
						    <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">History</a>
						    <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Science</a>
						    <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">News</a>
						    <a class="nav-item nav-link" id="nav-about-tab" data-toggle="tab" href="#nav-about" role="tab" aria-controls="nav-about" aria-selected="false">Social</a>
					    </div>
				    </nav>
				    <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
					    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
						    <div class="row">
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="divs">
                                <div class="px-3 py-3">
                                    <img src="images/img1.jpg" width="100%" height="192" />
                                </div>
                                <div>
                                    <p class="mb-0" style="color: #f9ad45;">3rd Edition</p>
                                    <p class="text-justify">
                                        Here is some desscription for a particular item book
                                    </p>    
                                    <div class="d-flex justify-content-between align-items-center mb-0 pb-0">
                                        <p class="text-secondary mb-0 pb-0">Auther Name</p>
                                        <p class="mb-0 pb-0">$29</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="divs">
                                <div class="px-3 py-3">
                                    <img src="images/img10.jpg" width="100%" height="192" />
                                </div>
                                <div>
                                    <p class="mb-0" style="color: #f9ad45;">3rd Edition</p>
                                    <p class="text-justify">
                                        Here is some desscription for a particular item book
                                    </p>    
                                    <div class="d-flex justify-content-between align-items-center mb-0 pb-0">
                                        <p class="text-secondary mb-0 pb-0">Auther Name</p>
                                        <p class="mb-0 pb-0">$29</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="divs">
                                <div class="px-3 py-3">
                                    <img src="images/img5 (1).jpg" width="100%" height="192" />
                                </div>
                                <div>
                                    <p class="mb-0" style="color: #f9ad45;">3rd Edition</p>
                                    <p class="text-justify">
                                        Here is some desscription for a particular item book
                                    </p>    
                                    <div class="d-flex justify-content-between align-items-center mb-0 pb-0">
                                        <p class="text-secondary mb-0 pb-0">Auther Name</p>
                                        <p class="mb-0 pb-0">$29</p>
                                    </div>
                                </div>
                            </div>
                        </div>    
                    </div>
					    </div>
					    <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
						    <div class="row">
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="divs">
                                <div class="px-3 py-3">
                                    <img src="images/img1.jpg" width="100%" height="192" />
                                </div>
                                <div>
                                    <p class="mb-0" style="color: #f9ad45;">3rd Edition</p>
                                    <p class="text-justify">
                                        Here is some desscription for a particular item book
                                    </p>    
                                    <div class="d-flex justify-content-between align-items-center mb-0 pb-0">
                                        <p class="text-secondary mb-0 pb-0">Auther Name</p>
                                        <p class="mb-0 pb-0">$29</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="divs">
                                <div class="px-3 py-3">
                                    <img src="images/img10.jpg" width="100%" height="192" />
                                </div>
                                <div>
                                    <p class="mb-0" style="color: #f9ad45;">3rd Edition</p>
                                    <p class="text-justify">
                                        Here is some desscription for a particular item book
                                    </p>    
                                    <div class="d-flex justify-content-between align-items-center mb-0 pb-0">
                                        <p class="text-secondary mb-0 pb-0">Auther Name</p>
                                        <p class="mb-0 pb-0">$29</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="divs">
                                <div class="px-3 py-3">
                                    <img src="images/img5 (1).jpg" width="100%" height="192" />
                                </div>
                                <div>
                                    <p class="mb-0" style="color: #f9ad45;">3rd Edition</p>
                                    <p class="text-justify">
                                        Here is some desscription for a particular item book
                                    </p>    
                                    <div class="d-flex justify-content-between align-items-center mb-0 pb-0">
                                        <p class="text-secondary mb-0 pb-0">Auther Name</p>
                                        <p class="mb-0 pb-0">$29</p>
                                    </div>
                                </div>
                            </div>
                        </div>    
                    </div>
					    </div>
					    <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
						    <div class="row">
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="divs">
                                <div class="px-3 py-3">
                                    <img src="images/img1.jpg" width="100%" height="192" />
                                </div>
                                <div>
                                    <p class="mb-0" style="color: #f9ad45;">3rd Edition</p>
                                    <p class="text-justify">
                                        Here is some desscription for a particular item book
                                    </p>    
                                    <div class="d-flex justify-content-between align-items-center mb-0 pb-0">
                                        <p class="text-secondary mb-0 pb-0">Auther Name</p>
                                        <p class="mb-0 pb-0">$29</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="divs">
                                <div class="px-3 py-3">
                                    <img src="images/img10.jpg" width="100%" height="192" />
                                </div>
                                <div>
                                    <p class="mb-0" style="color: #f9ad45;">3rd Edition</p>
                                    <p class="text-justify">
                                        Here is some desscription for a particular item book
                                    </p>    
                                    <div class="d-flex justify-content-between align-items-center mb-0 pb-0">
                                        <p class="text-secondary mb-0 pb-0">Auther Name</p>
                                        <p class="mb-0 pb-0">$29</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="divs">
                                <div class="px-3 py-3">
                                    <img src="images/img5 (1).jpg" width="100%" height="192" />
                                </div>
                                <div>
                                    <p class="mb-0" style="color: #f9ad45;">3rd Edition</p>
                                    <p class="text-justify">
                                        Here is some desscription for a particular item book
                                    </p>    
                                    <div class="d-flex justify-content-between align-items-center mb-0 pb-0">
                                        <p class="text-secondary mb-0 pb-0">Auther Name</p>
                                        <p class="mb-0 pb-0">$29</p>
                                    </div>
                                </div>
                            </div>
                        </div>    
                    </div>
					    </div>
					    <div class="tab-pane fade" id="nav-about" role="tabpanel" aria-labelledby="nav-about-tab">
						    <div class="row">
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="divs">
                                <div class="px-3 py-3">
                                    <img src="images/img1.jpg" width="100%" height="192" />
                                </div>
                                <div>
                                    <p class="mb-0" style="color: #f9ad45;">3rd Edition</p>
                                    <p class="text-justify">
                                        Here is some desscription for a particular item book
                                    </p>    
                                    <div class="d-flex justify-content-between align-items-center mb-0 pb-0">
                                        <p class="text-secondary mb-0 pb-0">Auther Name</p>
                                        <p class="mb-0 pb-0">$29</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="divs">
                                <div class="px-3 py-3">
                                    <img src="images/img10.jpg" width="100%" height="192" />
                                </div>
                                <div>
                                    <p class="mb-0" style="color: #f9ad45;">3rd Edition</p>
                                    <p class="text-justify">
                                        Here is some desscription for a particular item book
                                    </p>    
                                    <div class="d-flex justify-content-between align-items-center mb-0 pb-0">
                                        <p class="text-secondary mb-0 pb-0">Auther Name</p>
                                        <p class="mb-0 pb-0">$29</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="divs">
                                <div class="px-3 py-3">
                                    <img src="images/img5 (1).jpg" width="100%" height="192" />
                                </div>
                                <div>
                                    <p class="mb-0" style="color: #f9ad45;">3rd Edition</p>
                                    <p class="text-justify">
                                        Here is some desscription for a particular item book
                                    </p>    
                                    <div class="d-flex justify-content-between align-items-center mb-0 pb-0">
                                        <p class="text-secondary mb-0 pb-0">Auther Name</p>
                                        <p class="mb-0 pb-0">$29</p>
                                    </div>
                                </div>
                            </div>
                        </div>    
                    </div>
					    </div>
				    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- New Release books Section End Here -->

</body>
</html>