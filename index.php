<?php
    include_once("head.php");
?>

<h1>STAR WARS API REST</h1>

<!----------------- WIZARD 1 ------------>
<div class="wizzard" id="wizzard_1">

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
        <div class="btn" id="test_btn">TEST</div>
        <div class="btn" id="github_btn">GITHUB</div>
    </div>

</div>
<!----------------- /WIZARD 1 ------------>

<!----------------- WIZARD 2 ------------>
<div class="wizzard" id="wizzard_2">

    <div id="test_record">
        <h2>Test realizados</h2>

        <div>
            <h3>GET</h3>
            <p>http://fuelomejordelamor.loc/fuelomejordelamor/api/locations/</p>
            <p>Response:</p>
            <div class=response>
                {
                    "KENOBI": [
                        -500,
                        -200
                    ],
                    "SKYWALKER": [
                        100,
                        -100
                    ],
                    "SATO": [
                        500,
                        100
                    ]
                }
            </div>
        </div>

        <div>
            <h3>GET</h3>
            <p>http://fuelomejordelamor.loc/fuelomejordelamor/api/location/</p>
            <p>Response:</p>
            <div class=response>
                {
                    "name": "KENOBI",
                    "position": {
                        "x": -500,
                        "y": -500
                    }
                }
            </div>
        </div>

        <div>
            <h3>GET</h3>
            <p>http://fuelomejordelamor.loc/fuelomejordelamor/api/location/</p>
            <p>Response:</p>
            <div class=response>
                {
                    "name": "KENOBI",
                    "position": {
                        "x": -500,
                        "y": -500
                    }
                }

            </div>
        </div>

        <div>
            <h3>GET</h3>
            <p>http://fuelomejordelamor.loc/fuelomejordelamor/api/location/</p>
            <p>body -> form-encode:</p>
            <p>name: xhshd</p>
            <p>Response:</p>
            <div class=response>
            {
                "code": 404,
                "msj": "Satelite not founded"
            }
            </div>
        </div>

        <div>
            <h3>POST</h3>
            <p>http://fuelomejordelamor.loc/fuelomejordelamor/api/message/</p>
            <p>body -> form-encode:</p>
            <p>message: hola mundo</p>
            <p>header:</p>
            <p>key: admin</p>
            <p>Response:</p>
            <div class=response>
                {
                    "message": [
                        "hola,mundo"
                    ]
                }

            </div>
        </div>

        <div>
            <h3>POST</h3>
            <p>http://fuelomejordelamor.loc/fuelomejordelamor/api/message/</p>
            <p>body -> form-encode:</p>
            <p>message: hola mundo</p>
            <p>Response:</p>
            <div class=response>
            stdClass Object
                (
                    [withStatus] => 401
                    [withJson] => Array
                    (
                    [code] => 401
                    [msj] => Unauthorized
                    )

                )

            </div>
        </div>


    </div>

    <div id="tools">
        <div class="btn" id="home">HOME</div>
        <div class="btn" id="github_btn">GITHUB</div>
    </div>

</div>
<!----------------- /WIZARD 2 ------------>

<script>

    $$('#test_btn').addEvent('click', function(){
        $$('#wizzard_1').setStyle('display', 'none');
        $$('#wizzard_2').setStyle('display', 'grid');
    })

    $$('#home').addEvent('click', function(){
        $$('#wizzard_2').setStyle('display', 'none');
        $$('#wizzard_1').setStyle('display', 'grid');
    })

    $$('#github_btn').addEvent('click', function(){
        window.location.href = "https://github.com/bcmfranco/starwars";
    })



</script>

</body>
</html>