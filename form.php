<html>
<head>
<head><meta charset=utf-8></head>
<style>
body{
width:50%;
height:50%;
padding:0 auto;
margin:0 auto;
overflow:scroll;
background:#115098;
}
.clar{
overflow:scroll;
height:100%;
background:#D3D3D3;
}
</style>
</head>
<body>
<div class=clar>
<?php
$nameIC = $_POST['101']; // 1.01 ИМЯ: 
$nameIC = htmlspecialchars($nameIC);
$FamilyIC = $_POST['103']; //  1.03 ФАМИЛИЯ:
$FamilyIC = htmlspecialchars($FamilyIC);


$ICgender = $_POST['104'];// 1.04 ПОЛ:
$ICgender = htmlspecialchars($ICgender);
//data
$ICday = $_POST['day'];
$ICday = htmlspecialchars($ICday);
$ICmonth = $_POST['month'];  
$ICday = htmlspecialchars($ICmonth);
$ICyear = $_POST['year']; 
$ICyear = htmlspecialchars($ICyear);
$rasa = $_POST['107']; //  1.07 РАСА:  
$rasa = htmlspecialchars($rasa);
$nacional = $_POST['108']; //   1.08 НАЦИОНАЛЬНОСТЬ:
$nacional= htmlspecialchars($nacional);   
$a18 = $_POST['125'];//  1.25 ССЫЛКА НА ПРОФИЛЬ: 
$a18 = htmlspecialchars($a18);
echo "
[block=#003566][center][img]http://i.imgur.com/OOgw5lO.png[/img]<br>
<br>
[color=#FFFFFF]ДЕПАРТАМЕНТ ПОЛИЦИИ ЛОС САНТОСА<br>
ЗАЯВЛЕНИЕ НА ВСТУПЛЕНИЕ В ОТДЕЛ ДОРОЖНОЙ ПОЛИЦИИ[/color][/center][divbox=white]<br>
[hrc=#003566]4[/hrc][textarea][b]ИМЯ:[/b] ".$nameIC."<br>
[b]ФАМИЛИЯ:[/b] ".$FamilyIC."<br>
[b]ДАТА ПОЛУЧЕНИЯ ЗВАНИЯ [color=#0080FF]ОФИЦЕР I[/color]:[/b] ".$ICday.".".$ICmonth.".".$ICyear." <br>
[b]ССЫЛКА НА ЛИЧНОЕ ДЕЛО:[/b] [url=".$a18."]****[/url]<br>
[b]Почему Вы хотите вступить именно в отдел дорожной полиции?:[/b] ".$rasa."<br>
[b]Чем вы будете полезны отделу?:[/b] ".$nacional." [/textarea][hrc=#003566]4[/hrc][/divbox][/block]<br>
";



