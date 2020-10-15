<?php
session_start();
//FONCTION POUR GENERER UN VAR_DUMP PLUS SIMPLE A LIRE

function var_dump_pre($tab)
{
    echo '<pre>';
    var_dump($tab);
    echo '</pre>';
}

//FONCTION POUR GENERER UNE TABLE DE MULTIPLICATION DE 0 A 10

function table($multiple)
{
    for($i = 0; $i <= 10; $i++)
    {
         $result = $multiple * $i;
         echo "$multiple x $i = $result<br>";
    }
}

//FONCTION POUR GENERER DES CHECKBOX

function input_type($type)
{
    for($i = 0; $i <= 10; $i++)
    {
        echo "<input type='$type' name='multiple[]' value= $i>";
        echo "<label for='$type'>$i</label>";
    }
       
}

//FONCTION POUR GENERER LES OPTIONS DE SELECT

function choix_select()
{
    for($i = 0; $i <= 10; $i++)
    {
        echo "<option value='$i'>$i</option>";
    }
}

//FONCTION  POUR GENERER DES CHAMPS TYPE NUMBER

function table_rand()
{
    $rand1 = rand(0, 10);
    $rand2 = rand(1, 10);
    $result = $rand1 * $rand2;
    $tab = [$rand1, $rand2, $result];

    echo'<div class="div-test-unit">
            <label for="rand_multiple">' . $rand1 . ' x ' . $rand2 . ' = ' . ' </label> 
            <input type="number" name="rand_multiple[]" id="name">
        </div><br>';

    return $tab;
    
}

