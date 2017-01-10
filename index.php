<?php
/**
 * Created by PhpStorm.
 * User: dmitry
 * Date: 1/10/17
 * Time: 10:00 AM
 */
require_once './vendor/autoload.php';

// define some variables for working with database
//$json_db_config = file_get_contents("./db_config_local.json");
//$db_config = (json_decode ($json_db_config, true));
//
//
//$db_host = $db_config["host"];
//$db_user = $db_config["user"];
//$db_password = $db_config["password"];
//$db_name = $db_config["db_name"];
//
//// -------------------------------------------------------------
//
//$mysqli = new mysqli($db_host, $db_user, $db_password, $db_name);
//if($mysqli->connect_error)
//    die($mysqli->connect_error);
//
//$query = "SELECT * FROM review";
//$result = $mysqli->query($query);
//$rows = $result->num_rows;
//
//for ($j = 0 ; $j < $rows ; ++$j) {
//    $result->data_seek($j);
//    $user_row = $result->fetch_assoc()['user'];
//    $comm_all[] = $user_row;
//    echo 'User: ' . $user_row . '<br>';
//}

// -------------------------------------------------------------

$loader = new Twig_Loader_Filesystem('./view/');
$twig = new Twig_Environment($loader);
$template = $twig->load('main.html');
echo $template->render(array('user' => 'hello'));

//$result->close();
//$mysqli->close();




    /*while($row = $stmt->fetch_assoc()){
    echo $row['user'] . '<br />';
}*/
