<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class clintcontroller extends Controller
{
   public function getAllPost(){


      $response = Http::get('https://jsonplaceholder.typicode.com/posts');
      return  $response->json();
   }

   public function getpostbyid($idnumber){

    $post=Http::get('https://jsonplaceholder.typicode.com/posts/'.$idnumber);
    return  $post->json();

   }

   public function addpost(){

    $postplate=Http::post('https://jsonplaceholder.typicode.com/posts',[
        'userid'=>1,
        'title'=>'i add new title',
        'body'=>'tanmoy details'
    ]);
    return $postplate->json();

   }

   public function updatedid(){

    $response = Http::put('https://jsonplaceholder.typicode.com/posts/1',[

        'username'=>'tanmoy',
        'title'=>'sikder',
        'body'=>'tanmoy info'

    ]);

        return    $response->json();

   }
   public function delete($id){

    $response = Http::delete('https://jsonplaceholder.typicode.com/posts/'.$id);

    return $response->json();

   }

}
