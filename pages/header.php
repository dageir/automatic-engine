<header>
    <nav class="navbar navbar-expand-lg navbar-light alert-secondary">
        <div class="container-xxl">
            <a class="navbar-brand" href="/">#Главная</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto mb-2 mb-lg-0">
                    <li class="nav-item">

                    </li>
                    <li class="nav-item dropdown">


                    </li>

                </ul>
                <?php
                if($_SESSION['user'])
                {
                    echo ' <a href="profile.php" class="btn  btn-primary">Профиль</a>';
                    echo ' <a href="" class="btn "></a>';
                    echo ' <a href="../phpScripts/logout.php" class="btn  btn-primary">Выход</a>';

                }else {
                    echo ' <a href="/" class="btn  btn-primary">Войти </a>';
                }

                ?>

            </div>
        </div>
    </nav>
</header>
