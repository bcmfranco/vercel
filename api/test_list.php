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

    .btn a{
        text-decoration: none;
    }

    #about .btn{
        color: red;
    }

</style>
<body>

<h1>STAR WARS API REST</h1>

<div class="wizzard" id="">

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
        <div class="btn" id="home_btn">
            <a href="index.php">HOME</a>
        </div>
        <div class="btn" id="github_btn">
            <a href="https://github.com/bcmfranco/starwars">GITHUB</a>
        </div>
    </div>


</div>


</body>
</html>