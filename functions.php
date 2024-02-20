<?php

    //require MySQL Connection
    require ('database/DBcontroller.php');

    //requir recipe class
    require('database/recipe.php');

    //DBcontroller Object
    $db = new DBcontroller();

    //recipe object
    $recipes = new recipe($db);

    print_r($recipes->getData());

    

