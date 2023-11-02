<div id="layoutSidenav_nav">
    <?php $page = substr($_SERVER['SCRIPT_NAME'], strrpos($_SERVER['SCRIPT_NAME'],"/")+1); ?>
                
    <nav class="sb-sidenav accordion sb-sidenav-primary" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <div class="sb-sidenav-menu-heading">Core</div>
                <a class="nav-link <?= $page == 'index.php' ? 'active' : '' ?>" href="index.php">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    Dashboard
                </a>
                <a class="nav-link <?= $page == 'view-register.php' ? 'active' : '' ?>" href="view-register.php">
                    <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                    Registered Users
                </a>

                <div class="sb-sidenav-menu-heading">Interface</div>
                <a class="nav-link collapsed <?= $page == 'category-add.php' || $page == 'category-view.php' ? 'active' : '' ?>" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                    Category
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse <?= $page == 'category-add.php' || $page == 'category-view.php' ? 'show' : '' ?>" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link <?= $page == 'category-add.php' ? 'active' : '' ?>" href="category-add.php">Add Category</a>
                        <a class="nav-link <?= $page == 'category-view.php' ? 'active' : '' ?>" href="category-view.php">View Category</a>
                    </nav>
                </div>

                <a class="nav-link collapsed <?= $page == 'post-add.php' || $page == 'post-view.php' ? 'active' : '' ?>" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePosts" aria-expanded="false" aria-controls="collapsePosts">
                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                    Posts about Animals
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse <?= $page == 'post-add.php' || $page == 'post-view.php' ? 'show' : '' ?>" id="collapsePosts" aria-labelledby="Posts" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link <?= $page == 'post-add.php' ? 'active' : '' ?>" href="post-add.php">Add Post</a>
                        <a class="nav-link <?= $page == 'post-view.php' ? 'active' : '' ?>" href="post-view.php">View Post</a>
                    </nav>
                </div>
                <a class="nav-link collapsed <?= $page == 'location-add.php' || $page == 'location-view.php' ? 'active' : '' ?>" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLocation" aria-expanded="false" aria-controls="collapsePosts">
                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                    Location
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse <?= $page == 'location-add.php' || $page == 'location-view.php' ? 'show' : '' ?>" id="collapseLocation" aria-labelledby="Location" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link <?= $page == 'location-add.php' ? 'active' : '' ?> " href="location-add.php">Add Location</a>
                        <a class="nav-link <?= $page == 'location-view.php' ? 'active' : '' ?>" href="location-view.php">View Location</a>
                    </nav>
                </div>

                <a class="nav-link collapsed <?= $page == 'img-add.php' || $page == 'img-view.php' ? 'active' : '' ?>" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLocation" aria-expanded="false" aria-controls="collapsePosts">
                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                    Picture
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse <?= $page == 'img-add.php' || $page == 'img-view.php' ? 'show' : '' ?>" id="collapseLocation" aria-labelledby="Location" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link <?= $page == 'img-add.php' ? 'active' : '' ?> " href="img-add.php">Add Pictures</a>
                        <a class="nav-link <?= $page == 'img-view.php' ? 'active' : '' ?>" href="img-view.php">View Pictures</a>
                    </nav>
                </div>

                <div class="sb-sidenav-menu-heading">Addons</div>
               
                <a class="nav-link" href="tables.html">
                    <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                    Tables
                </a>
            </div>
        </div>
        <div class="sb-sidenav-footer">
            <div class="small">Logged in as:</div>
            <?= isset($_SESSION['auth_user']['username']) ? $username = $_SESSION['auth_user']['username'] : 'Anonymous' ?>
        </div>
    </nav>
</div>