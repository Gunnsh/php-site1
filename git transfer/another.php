<?php
$fd = fopen("hello.txt", 'r+') or die("Ошибка открытия файла");
$str = "Hello World!";
 
if (flock($fd, LOCK_EX)) // установка исключительной блокировки на запись
{
    ftruncate($fd, 0); // очищаем файл
    fwrite($fd, "$str") or die("Ошибка записи"); // запись
    flock($fd, LOCK_UN); // снятие блокировки
}
fclose($fd);
?>