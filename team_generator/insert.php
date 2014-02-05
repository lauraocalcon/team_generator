<?php

    mysql_connect("localhost", "root") or die (mysql_error());

    mysql_select_db("players_db") or die(mysql_error());

    $f_name = $_POST["first_name_input"];
    $l_name = $_POST["last_name_input"];
    $p_age = $_POST["age_input"];
    $position_1 = $_POST["pos_1_input"];
    $position_2 = $_POST["pos_2_input"];
    $position_3 = $_POST["pos_3_input"];
    $position_4 = $_POST["pos_4_input"];
    $p_points = $_POST["points_scored_input"];
    $p_tackles = $_POST["tackles_input"];
    $p_assist = $_POST["assists_input"];
    $p_speed = $_POST["speed_input"];
    $p_fitness = $_POST["fitness_input"];
    //$p_available = $_POST["available_select_1"];

    $sql = "INSERT INTO player_details(`first_name`, `last_name`, `age`, `pos_1`, `pos_2`, `pos_3`, `pos_4`, `points_scored`, `tackling`, `assists`, `speed`, `fitness`, `available`) VALUES ('$f_name', '$l_name', '$p_age', '$position_1', '$position_2', '$position_3', '$position_4', '$p_points', '$p_tackles', '$p_assist', '$p_speed', '$p_fitness', true)";

    mysql_query($sql) or die(mysql_error());

    mysql_close();

?>
