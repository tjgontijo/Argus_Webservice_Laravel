<?php

$this->group(['namespace' => 'Admin'], function () {


    /**
     * Users
     */
    $this->post('user/login', 'UserController@login');
    
    $this->resource('users', 'UserController');
    
    $this->resource('genders', 'GenderController');

    $this->resource('breeds', 'BreedController');

    $this->resource('type_units', 'TypeUnitController');

});
