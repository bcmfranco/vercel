Entorno: Requiere PHP 4.7

Es una API Rest construida en PHP 4.7 con el framework Slim:
https://www.slimframework.com/docs/v3/

----

En un cliente de api como Postmand o ThunerClient, correr:
Method: GET
URL: http://fuelomejordelamor.loc/fuelomejordelamor/api/welcome/

---
Rutas:

GET
http://fuelomejordelamor.loc/fuelomejordelamor/api/welcome/

GET
http://fuelomejordelamor.loc/fuelomejordelamor/api/locations/

GET
http://fuelomejordelamor.loc/fuelomejordelamor/api/location/

POST
http://fuelomejordelamor.loc/fuelomejordelamor/api/message/

----

Cuenta con un Middleware que impide el request si la credencial
del usuario no coincide con el nivel de permiso del servicio.
Los perfiles requeridos según cada servicio son:

	'welcome'=>[],
	'locations'=>[],
	'location'=>['superuser'],
    'message'=>['admin']

Al momento de realizar un request a un servicio que requiera un perfil
determinado, en headers, pasar la key con el perfil necesario.

Ej: al enviar un request a /location/kenobi para solicitar la ubicación
del satélite Kenobi, es necesario que en Headers ingrese un row:
key: superuser

Los servicios que no tienen perfil de seguridad, no requieren ninguna key,
como son /welcome/ y /locations/