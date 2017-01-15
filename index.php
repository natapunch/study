<?php
echo 'YYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYY';

require 'Classes/Person.php';
require ('Classes/Student.php');
require ('Classes/Prepod.php');
require ('Classes/group.php');
require ('Classes/Interf.php');

$stud=new Student();
$stud->speciality = 'Кибернетика';
$stud->facultet = 'Экономика';
$stud->group='A45';

$prep=new Prepod();
$prep->discipline = 'Физика';
echo $stud->display_info_stud();
echo $prep->display_info_prepod();
?>





