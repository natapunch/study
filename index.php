<?php

//function__autoload ($classname){
//    $filename=__DIR__."/Classes/".$classname .".php";
//    require ($filename);
//}

require ('Classes/Student.php');
require ('Classes/Prepod.php');
require ('Classes/Group.php');
//require ('Classes/Interf.php');

echo "Новый студент ";
echo "<br>";
$stud=new Student("Иванов "," 2222222 "," user@mail "," Экономический ", " К-23 ", " Физика");
echo "<br><br>";
echo "Преподаватель  ";
echo "<br>";
$prep=new Prepod("Петрова "," 323232 "," petrova@mail "," К.т.н. ", " Физика ", " ассистент ", " Прикладніх наук");
echo "<br><br>";
echo "Группа  ";
echo "<br>";
$gropp=new Group("К-23 "," Международная экономика "," 1 курс");
echo "<br>";

echo "<pre>";
echo print_r ($stud);
echo print_r ($prep);
echo print_r($gropp);
echo "</pre>";

?>

r



