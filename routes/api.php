<?php


$this->group(['namespace' => 'Admin'], function() {

    $this->resource('users', 'UserController');
    $this->post('user/login', 'UserController@login');
    $this->resource('events', 'EventController');
});
