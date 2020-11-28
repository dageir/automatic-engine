<?php
session_start();

if (!$_SESSION['user']) {
    header('Location: ../index.php');
}
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

<?php
include('header.php');
?>
<br><br>
<div class="container-lg">
    <h1>Карточка соискателя </h1>
    <hr>
    <div class="row">
        <div class="col">
            <h4>Отклик по вакансии: <?php  ?></h4>
            <br>
            <h4>Отправить тест: <button type="submit" class="btn btn-primary">Отправить</button> <?php  ?></h4>
            <br>
            <h4>Посмотреть результаты тестирования: <button type="submit" class="btn btn-primary">Посмотреть</button></h4>


        </div>
        <div class="col">
            <div class="col-md-6">
                <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static">
                        <strong class="d-inline-block mb-2 text-primary"></strong>
                        <h3 class="mb-0">Резюме</h3>
                        <h5 class="mb-0">Трудолюбивый оптимист со знанием php!</h5>
                        <div class="mb-1 text-muted"></div>
                        <p class="card-text mb-auto"></p>
                    </div>
                </div>
            </div>
        </div>
    </div>


        <?php



        /* // подключаем загрузчик
    include '../vendor/autoload.php';

    // Создаем объект для парсинга PDF
    $parser = new \Smalot\PdfParser\Parser();


    // парсим PDF файл
    $pdf = $parser->parseFile('../uploads/src/123.pdf');

    // выводим текст из файла
    print $pdf -> getText();
    echo $pdf -> getText();

        include('../phpScripts/class.pdf2text.php');
        $a = new PDF2Text();
        $a->setFilename('Videographer_RFP.pdf'); //grab the test file at http://www.newyorklivearts.org/Videographer_RFP.pdf
        $a->decodePDF();
        echo $a->output();*/
    ?>






    </div>


<!-- JavaScript Bundle with Popper.js -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-popRpmFF9JQgExhfw5tZT4I9/CI5e2QcuUZPOVXb1m7qUmeR2b50u+YFEYe1wgzy" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-t6I8D5dJmMXjCsRLhSzCltuhNZg6P10kE0m0nAncLUjH6GeYLhRU1zfLoW3QNQDF" crossorigin="anonymous"></script>
<script class="hh-script" src="https://api.hh.ru/widgets/vacancies/search?count=6&locale=RU&links_color=1560b2&border_color=1560b2&text=%D1%80%D0%B0%D0%B7%D1%80%D0%B0%D0%B1%D0%BE%D1%82%D1%87%D0%B8%D0%BA&area=113&specialization=1&specialization=10&currency=AZN&only_with_salary=false&salary=10000&employment=full&employment=part&employment=project&employment=volunteer&employment=probation&schedule=shift&schedule=flexible&label=with_address&label=accept_handicapped"></script>
</body>
</html>
<?php


?>
