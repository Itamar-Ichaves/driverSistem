<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Sistema Api Com laravel 10, Docker, Git, cache no linux Ubuntu

Pra Rodar baixar e configure o arquivo .envExemplo para ".env" rodando o comando docker-composer up -d.

Route::get('/getorderservice') -> Buscar todos os dados
   - http://localhost:8002/v1/createorderservice
 
Route::get('/getorderservice/{identify} -> buscar intem especifico
   - http://localhost:8002/v1/getorderservice/ad0e7168-acd9-4d56-9ef3-d7cb977ae1f5
   
Route::post('/createorderservice') -> criar dados
   - http://localhost:8002/v1/createorderservice
{
            "vehiclePlate": "jps1890",
            "entryDateTime": "27/05/2022",
            "exitDateTime": "30/06/2022",
            "priceType": "10,50",
            "price": "10,50",
            "userId": 1
}
