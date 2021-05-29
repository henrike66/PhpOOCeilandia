<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>


        <form method="get" action="<?php htmlspecialchars($_SERVER["PHP_SELF"])?>">

            <label>Valor 1:</label>
            <input  type="number" name="numero1">
            <br>
            <label>Valor 2:</label>
            <input  type="number" name="numero2">
            <br>
            <input type="submit" value="Enviar">

        </form>


    </body>
</html>
