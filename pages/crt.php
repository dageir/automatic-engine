<?php
session_start();
unset($_SESSION['create']);
include('../phpScripts/connection.php');
?>
    <!doctype html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-CuOF+2SnTUfTwSZjCXf01h7uYhfOBuxIhGKPbfEJ3+FqH/s6cIFN9bGr1HmAg4fQ" crossorigin="anonymous">
        <title>Document</title>
    </head>
    <body>
    <?php
    include('header.php');
    ?>
    <div class="container-lg">
        <h1>Редактор элементов <a href="javascript:history.back()">Вернуться назад</a></h1>
        <hr><br>

        <section class="row" style="margin-top: 10px">
            <div class="col">
                <h2>Создание нового требования</h2>
                <form action="../phpScripts/create_script.php" method="post">
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Название требования</label>
                        <input type="" name="demand" class="form-control" id="" aria-describedby="">
                    </div>

                    <button type="submit" name="demand_S"  class="btn btn-primary">Добавить</button>
                </form>
                <?php
                if ($_SESSION['message_1'])
                {
                    echo '<br><div class="alert alert-warning alert-dismissible fade show" role="alert">
                              <strong></strong>' . $_SESSION['message_1'] .'
                              <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close"></button>
                            </div>';
                }
                unset($_SESSION['message_1']);
                ?>
                <br>
                <h2>Создание новой обязанности</h2>
                <form action="../phpScripts/create_script.php" method="post">
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Название обязанности</label>
                        <input type="" name="responsibility" class="form-control" id="" aria-describedby="">
                    </div>
                    <button type="submit" name="responsibility_S" class="btn btn-primary">Добавить</button>
                </form>
                <?php
                if ($_SESSION['message_2'])
                {
                    echo '<br><div class="alert alert-warning alert-dismissible fade show" role="alert">
                              <strong></strong>' . $_SESSION['message_2'] .'
                              <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close"></button>
                            </div>';
                }
                unset($_SESSION['message_2']);
                ?>
                <br>
                <h2>Создание нового условия работы</h2>
                <form action="../phpScripts/create_script.php" method="post">
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Условие работы</label>
                        <input type="" name="conditions" class="form-control" id="" aria-describedby="">
                    </div>
                    <button type="submit" name="conditions_S" class="btn btn-primary">Добавить</button>
                </form>
                <?php
                if ($_SESSION['message_3'])
                {
                    echo '<br><div class="alert alert-warning alert-dismissible fade show" role="alert">
                              <strong></strong>' . $_SESSION['message_3'] .'
                              <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close"></button>
                            </div>';
                }
                unset($_SESSION['message_3']);
                ?>
                <br>
                <h2>Создание ключевого навыка</h2>
                <form action="../phpScripts/create_script.php" method="post">
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Название навыка</label>
                        <input type="" name="key_skill" class="form-control" id="" aria-describedby="">
                    </div>
                    <button type="submit" name="key_skill_S"  class="btn btn-primary">Добавить</button>
                </form>
                <?php
                if ($_SESSION['message_4'])
                {
                    echo '<br><div class="alert alert-warning alert-dismissible fade show" role="alert">
                              <strong></strong>' . $_SESSION['message_4'] .'
                              <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close"></button>
                            </div>';
                }
                unset($_SESSION['message_4']);
                ?>
                <br>
            </div>

            <div class="col">
                <h2>Удаление требования</h2>
                <form action="../phpScripts/delete_dm_script.php" method="post">
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Выберите требование</label>
                        <select class="form-select" aria-label=".form-select-lg example">
                            <?php
                            $categories = mysqli_query($connection, "SELECT * FROM `demand`");
                            While($cat = mysqli_fetch_assoc($categories))
                            {
                                $cat_arr = $cat;
                                echo  '<div class="form-check">
                      <option value="'. $cat['id'] .'" id="flexCheckDefault" name="demands[]">
                      '
                                    .$cat['demands'] .
                                    '</label>
                   </div>';
                            }
                            ?>


                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Удалить</button>
                </form>
                <br>
                <h2>Удаление обязанности</h2>
                <form action="../phpScripts/delete_dm_script.php" method="post">
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Выберите обязанность</label>
                        <select class="form-select" aria-label=".form-select-lg example">
                            <?php
                            $categories = mysqli_query($connection, "SELECT * FROM `responsibility`");
                            While($cat = mysqli_fetch_assoc($categories))
                            {
                                $cat_arr = $cat;
                                echo  '<div class="form-check">
                      <option value="'. $cat['id'] .'" id="flexCheckDefault" name="responsibility[]">
                      '
                                    .$cat['responsibilitys'] .
                                    '</label>
                   </div>';
                            }
                            ?>


                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Удалить</button>
                </form>
                <br>
                <h2>Удаление условия работы</h2>
                <form action="../phpScripts/delete_dm_script.php" method="post">
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Выберите условие работы</label>
                        <select class="form-select" aria-label=".form-select-lg example">
                            <?php
                            $categories = mysqli_query($connection, "SELECT * FROM `conditions`");
                            While($cat = mysqli_fetch_assoc($categories))
                            {
                                $cat_arr = $cat;
                                echo  '<div class="form-check">
                      <option value="'. $cat['id'] .'" id="flexCheckDefault" name="work_condition[]">
                      '
                                    .$cat['work_condition'] .
                                    '</label>
                   </div>';
                            }
                            ?>


                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Удалить</button>
                </form>
                <br>
                <h2>Удаление ключевого навыка</h2>
                <form action="../phpScripts/delete_dm_script.php" method="post">
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Выберите ключевой навык</label>
                        <select class="form-select" aria-label=".form-select-lg example">
                            <?php
                            $categories = mysqli_query($connection, "SELECT * FROM `key_skill`");
                            While($cat = mysqli_fetch_assoc($categories))
                            {
                                $cat_arr = $cat;
                                echo  '<div class="form-check">
                      <option value="'. $cat['id'] .'" id="flexCheckDefault" name="skill[]">
                      '
                                    .$cat['skill'] .
                                    '</label>
                   </div>';
                            }
                            ?>


                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Удалить</button>
                </form>
            </div>

        </section>



    </div>

    <!-- JavaScript Bundle with Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-popRpmFF9JQgExhfw5tZT4I9/CI5e2QcuUZPOVXb1m7qUmeR2b50u+YFEYe1wgzy" crossorigin="anonymous"></script>
    </body>
    </html>
<?php

