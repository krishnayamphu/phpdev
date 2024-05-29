    <header>
        <nav class="navbar navbar-expand-lg bg-dark" data-bs-theme="dark">
            <div class="container">
                <a class="navbar-brand" href="#">PHPDEV</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="users.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="users.php">Users</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="user-create.php">Create User</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="search.php">Search User</a>
                        </li>
                    </ul>

                    <div class="d-flex align-items-center">
                        <a class="nav-link text-white me-2 text-uppercase" href="#"><?php echo $_SESSION['user'] ?></a>
                        <form action="logout.php" method="post">
                            <button class="btn btn-secondary">Logout</button>
                        </form>
                    </div>
                </div>
            </div>
        </nav>
    </header>