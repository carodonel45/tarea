<?php

Route::get('/', function () {
    return view('welcome');
});


Route ::get('blog', function (){
return view('blog');

});

Route ::get('about', function (){
    return view('about');
});

Route ::get('proyectos', function (){
    return view('proyectos');
 });


