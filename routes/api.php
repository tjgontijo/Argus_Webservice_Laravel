<?php

$this->group(['namespace' => 'Admin'], function () {

    $this->post('user/login', 'UserController@login');
    $this->resource('users', 'UserController');
    $this->post('user/add-user-info', 'UserController@addUserInfo');

    $this->resource('user_infos', 'UserInfoController');

    $this->resource('genders', 'GenderController');

    $this->resource('breeds', 'BreedController');

    $this->resource('orientations', 'OrientationController');

});
