<?php

class HelloWorldController extends BaseController {

    public static function index() {
        // make-metodi renderöi app/views-kansiossa sijaitsevia tiedostoja
        //View::make('home.html');
        echo 'Tämä on etusivu!';
    }

    public static function sandbox() {
        View::make('helloworld.html');
    }

    public static function askareiden_listaus() {
        View::make('suunnitelmat/Askareiden_listaus.html');
    }

    public static function askareen_muokkaus() {
        View::make('suunnitelmat/Askareen_muokkaus.html');
    }

    public static function kirjautuminen() {
        View::make('suunnitelmat/Kirjautuminen.html');
    }

}
