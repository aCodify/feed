<?php


    /**
    *
    *** START CONFIG SQL
    *
    **/
    
        include 'database/database/DB.php';

        $ci_db = DB(array(
            'dbdriver' => 'mysql',
            'char_set' => 'utf8',
            'dbcollat' => 'utf8_general_ci',
            'hostname' => 'localhost',
            'username' => $info['username'],
            'password' => $info['password'],
            'database' => $info['database']

        ));
    
    /** END CONFIG SQL **/

    