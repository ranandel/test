<?php
$file=fopen('rezult.txt','w+'); //создание файла с ключом перезаписи
fputs($file,$_POST['#formx']);
$data ="Имя: ". $_POST['name'] . "  Телефон: ".$_POST['number']."\n"; //что записываем
fwrite($file, $data); //запись
fclose($file); //закрытие файла
$fileTmpPath = $_FILES['uploadedFile']['tmp_name'];
$fileName = $_FILES['uploadedFile']['name'];
$uploadFileDir = '/'; //путь сохранения файла
$dest_path = $uploadFileDir . $fileName;
if(move_uploaded_file($fileTmpPath, $dest_path)) //сохраняем файл
{
    echo ' Данные успешно отправлены! ';
}
else
{
    echo ' Данные не отправлены! ';
}