<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset='utf-8'>
    <title>Тестовое задание</title>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script type="text/javascript" src="send.js"></script>
</head>
<body>
<form method="POST" id="formx"  enctype="multipart/form-data" onsubmit="rez()" action="action_form.php">
    Имя: <input type="text" name="name" />
    Телефон: <input type="text" name="number" />
    <input type='file' name='uploadedFile' size='10' />
    <input type="submit" onClick='rez()'/>
</form>
</body>
</html>