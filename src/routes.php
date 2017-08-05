<?php
/**
 * Created by PhpStorm.
 * User: Blaine
 * Date: 7/21/2017
 * Time: 8:49 PM
 */

/*
 * GET /chatrooms   this should list the chatrooms available
 * GET /chatroom/{id}  this should list all the messages from the chatroom
 * GET /user/id  this should be able to get the details of the user account
 * POST /chatroom/join/{id}  this joins a new chatroom for the user
 * POST /user/create   this creates a new users
 * POST /user/{id}        ths allows to update users
 * POST /chatroom/id?begin={begindate}?end={enddate}
 *
 */


$app->get('/chatrooms', function (Request $req, Response $resp) {
    //TODO
    $resp->withStatus(201);
    return $resp;
});

$app->get('/chatroom/{id}', function(Request $req, Resonse $resp){
    //TODO
    $resp->withStstus(201);
    return $resp;
});

$app->get('/user/id' , function (Request $req, Response $resp ){
    //TODo
    $resp->withStatus(201);
    return $resp;
});

$app->post('/chatroom/join/{id}' , function (Request $req, Response $resp){
    //TODO
    $resp->withStatus(201);
    return $resp;
});

$app->post('/user/create', function(Request $req, Response $resp){
    //TODO
    $resp->withStatus(201);
    return $resp;
});

$app->get('/chatroom/id?begin={begin}?end={end}', function(Request $req, Response $resp){
    //TODO
    $resp->withStatus(201);
    return $resp;
});