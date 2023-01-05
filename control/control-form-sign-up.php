<?php
    require_once '../app/connection.php';
    $connection = connection_db();
    // mysqli::real_escape_string(): Escapa los caracteres especiales de una cadena para usarla en una sentencia SQL, tomando en cuenta el conjunto de caracteres actual de la conexión.
    // htmlentities(): Esta función es útil para evitar que el texo introducido por el usuario contenga código HTML. 
    $data = array(
        $connection->real_escape_string(htmlentities($_POST['form_user_names'])),
        $connection->real_escape_string(htmlentities($_POST['form_user_first_surname'])),
        $connection->real_escape_string(htmlentities($_POST['form_user_second_surname'])),
        $connection->real_escape_string(htmlentities($_POST['form_user_birthday'])),
        $connection->real_escape_string(htmlentities($_POST['form_user_phone_number'])),
        $connection->real_escape_string(htmlentities($_POST['form_user_carrer'])),
        $connection->real_escape_string(htmlentities($_POST['form_user_email'])),
        $connection->real_escape_string(htmlentities($_POST['form_user_password']))
    );
    $sql = 'INSERT INTO users_table(u_names, u_first_surname, u_second_surname, u_birthday, u_phone_number, u_carrer, u_email, u_password) VALUES (?, ?, ?, ?, ?, ?, ?, ?)';
    $query = $connection->prepare($sql); //mysqli::prepare(): Prepara una consulta SQL.
    $query->bind_param('ssssssss', $data[0], $data[1], $data[2], $data[3], $data[4], $data[5], $data[6], $data[7]);
    echo $query->execute();
    $connection->close();
?>