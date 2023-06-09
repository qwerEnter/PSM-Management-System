<section class="menu-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="navbar-collapse collapse ">
                        <ul id="menu-top" class="nav navbar-nav navbar-right">
                              <li><a href="titleproject.php?User=".$User;>Title Book</a></li>
                              <li><a href="titleStatus.php?User=".$User;>Book Result</a></li>
                               <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="mdi fa-lg mdi-account-circle"></i> <?php echo $User ?>
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <li class="nav-item dropdown">
                                            <a href="/psm_system/logout.php?logout">Logout</a>
                                        </li>
                                    </ul>
                                 </li>

                            <li><a href="/psm_system/logout.php?logout">Logout</a></li>

                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>