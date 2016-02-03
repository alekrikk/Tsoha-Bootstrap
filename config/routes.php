<?php

$routes->get('/', function() {
    HelloWorldController::index();
});

$routes->get('/hiekkalaatikko', function() {
    HelloWorldController::sandbox();
});

$routes->get('/askareet', function() {
    HelloWorldController::askareiden_listaus();
});

$routes->get('/askareen_muokkaus', function() {
    HelloWorldController::askareen_muokkaus();
});

$routes->get('/kirjautuminen', function() {
    HelloWorldController::kirjautuminen();
});

