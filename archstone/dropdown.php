<?php
    $dbname = 'db1167423_archstonedb';

    if (!mysql_connect('localhost','u1167423_arch','GalaxyUniverse12')) {
        echo 'Could not connect to mysql';
        exit;
    }

    $sql = "SHOW TABLES FROM $dbname";
    $result = mysql_query($sql);

    if (!$result) {
        echo "DB Error, could not list tables\n";
        echo 'MySQL Error: ' . mysql_error();
        exit;
    }

    while ($row = mysql_fetch_row($result)) {


   $tables .='<option value="{$row[0]}">{$row[0]}</option>';

    }

    mysql_free_result($result);
    ?>