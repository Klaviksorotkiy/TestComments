<?

// параметры подключения к БД
$dbhost="host.ru";
$dbusername="test_usa";
$dbpassword="12341234";
$dbname="test_comments";

// создаем коннект
$mysqli = new mysqli($dbhost , $dbusername , $dbpassword , $dbname);


// проверяем коннект
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}



?>