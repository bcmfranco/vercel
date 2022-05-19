<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Star Wars ApiRest</title>
</head>
<style>

    body{
        font-family: system-ui;
        width: 80%;
        margin: 0 auto;
    }

    a{
        color: inherit;
        text-decoration: underline;
    }

    h1{
        text-align: center;
        font-size: 34px;
    }

    div{
        margin: 30px 0px;
        padding: 10px;/* border: 1px solid red; */
        box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
    }

    h2{
        margin: 0;
        font-size: 28px;
        line-height: 34px;
    }

    p{
        margin: 0;
        font-size: 18px;
        line-height: 22px;
    }

    ul{
        list-style: none;
    }

    #tools{
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        justify-items: center;
    }

    .btn{
        color: inherit;
        width: 100px;
        height: 50px;
        text-align: center;
        font-size: 18px;
        line-height: 50px;
        cursor: pointer;
    }

    #about .btn{
        color: red;
    }

    #wizzard_2{
        display: none;
    }


</style>
<body>

<h1>STAR WARS API REST</h1>

<div class="wizzard" id="">

    <div id="about">
        <h2>Entorno</h2>
        <p>Requiere PHP 4.7 y Slim 3</p>
        <p>Es una API Rest construida en PHP 4.7 con el framework <a href="https://www.slimframework.com/docs/v3/">Slim</a></p>
    </div>

    <div id="run">
        <h2>Run</h2>
        <p>En un cliente de api como Postmand o ThunerClient, correr:</p>
        <p>Method: GET</p>
        <p>URL: starwars/api/welcome/</p>
    </div>

    <div id="routing">
        <h2>Rutas</h2>
        <p>GET</p>
        <p>/api/welcome/</p>

        <p>GET</p>
        <p>/api/locations/</p>

        <p>GET</p>
        <p>/api/location/</p>

        <p>POST</p>
        <p>/api/message/</p>
    </div>

    <div id="extra">
        <h2>Extra</h2>
        <p>Cuenta con un Middleware que impide el request si la credencial
        del usuario no coincide con el nivel de permiso del servicio.</p>
        <p>Los perfiles requeridos según cada servicio son:</p>
        <ul>
            <li>'welcome'=>[],</li>
            <li>'locations'=>[],</li>
            <li>'location'=>['superuser'],</li>
            <li>'message'=>['admin'],</li>
        </ul>
    </div>

    <div id="tools">
        <div class="btn" id="test_btn">
            <a href="test_listp.php">TEST</a>
        </div>
        <div class="btn" id="github_btn">
            <a href="https://github.com/bcmfranco/starwars">GITHUB</a>
        </div>
    </div>

</div>
<script>

</script>

</body>
</html>