<?php
session_start();
$vacancy_name = $_POST['vacancy_name'];
$demand = $_POST['demand'];
$responsibilitys = $_POST['responsibilitys'];
$work_condition = $_POST['work_condition'];
$skill = $_POST['skill'];

include('connection.php');

if((empty($demand)) or (empty($vacancy_name)) or (empty($responsibilitys)) or (empty($work_condition)) or (empty($skill)))
{
    $_SESSION['message_1'] = 'Заполните все поля!';
    header('Location: ../pages/Staff_recruitment.php');
}else {
    $demandStr = implode(' ',$demand);
    $responsibilitysStr = implode(' ',$responsibilitys);
    $work_conditionStr = implode(' ',$work_condition);
    $skillStr = implode(' ',$skill);
    mysqli_query($connection, "INSERT INTO `vacancy` (`vacancy_name`, `demand_id`, `responsibility_id`, `key_skill_id`, `conditions_id`) VALUES ('$vacancy_name', '$demandStr', '$responsibilitysStr', '$skillStr', '$work_conditionStr')");
    header('Location: ../pages/vacations.php');
}


