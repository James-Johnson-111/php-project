<nav class="navbar navbar-expand-lg navbar-light py-0 bg-white">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav mx-auto">
            <li class="nav-item active">
                <a class="nav-link d-block px-4" href="/admin/index.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link d-block px-4" href="/admin/dashboard_pricing.php">Pricing</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle d-block px-4" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Products
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="/admin/products.php">Add New Post</a>
                    <a class="dropdown-item" href="/admin/view_product.php">View All Post</a>
                </div>
            </li>
            <?php
            if (strlen($_SESSION['LoginRole']) !== 0 && $_SESSION['LoginRole'] === 'Admin') {
            ?>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle d-block px-4" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Category
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="/admin/products.php">Add New Category</a>
                        <a class="dropdown-item" href="/admin/view_product.php">View All Categories</a>
                    </div>
                </li>
            <?php
            }
            ?>
            <li class="nav-item">
                <a class="nav-link d-block px-4" href="/admin/dashboard_profile.php">Profile</a>
            </li>
        </ul>
    </div>
</nav>