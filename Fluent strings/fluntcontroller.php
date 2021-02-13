<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;//str avabe likhe run korte hobe

class fluntcontroller extends Controller
{
   function index(){

    echo "<h1>hey this is fluint controller</h1>".'<br>';
    $slice= str::of('welcome to my youtube channel')->after('welcome to');//welcome to er por show hobe
    echo $slice.'<br>';

    $slice2=str::of('app\http\tanmoy\sikder')->afterLast('\\');//duita \\ er por theke show hobe
    echo $slice2.'<br>';

    $slice3= Str::of('hellow')->append(' tanmoy');//hello er pore kicu show korle avabe likhte hoy
    echo $slice3.' <br>';
    $slice4=Str::of('LARAVEL')->lower();//ata likhle lowercase letter hobe
    echo $slice4.'<br>';
    $slice5=str::of('laravel 7.5')->replace('7.5','8.0');//kono lekha replace korte hole
    echo $slice5.'<br>';
    $slice6=str::of('this is title of tanmoy')->title();//title er moto kore dekhabe
    echo $slice6.'<br>';
    $slice7= str::of('this is tanmoy sikder')->slug('-');//slug er vitor ja dibo -/* tai word er pore show hobe
    echo $slice7.'<br>';
    $slice8= Str::substr('The Laravel Framework', 6, 7);//laravel 8 er str lekhar new method
    echo $slice8.'<br>';
    $slice9 = Str::ucfirst('foo bar');//uppercase first er ta hobe
    echo $slice9.'<br>';
    $slice10=str::of('/tanmoy sikder/')->trim('/');// /remove korte caile
    echo $slice10.'<br>';

    $slice11=str::of('tanmoy sikder')->upper('');// /remove korte caile
    echo $slice11.'<br>';
   }
}
