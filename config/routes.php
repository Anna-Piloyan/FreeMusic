<?php

return [ 
    
    'playlist/add/([0-9]+)' => 'playlist/add/$1',
    'playlist/addAjax/([0-9]+)' => 'playlist/addAjax/$1',
    'playlist/delete/([0-9]+)' => 'playlist/delete/$1',
    'playlist' => 'playlist/index',
    'user/register' => 'user/register',
    'user/login' => 'user/login',
    'user/logout' => 'user/logout',
    'cabinet/edit' => 'cabinet/edit',
    'cabinet' => 'cabinet/index',
    'admin/track/create' => 'adminTrack/create',
    'admin/track/update/([0-9]+)' => 'adminTrack/update/$1',
    'admin/track/delete/([0-9]+)' => 'adminTrack/delete/$1',
    'admin/track' => 'adminTrack/index',
    'admin/category/create' => 'adminCategory/create',
    'admin/category/update/([0-9]+)' => 'adminCategory/update/$1',
    'admin/category/delete/([0-9]+)' => 'adminCategory/delete/$1',
    'admin/category' => 'adminCategory/index',
    'admin' => 'admin/index',
    'register' => 'user/register', //UserController,
    'category/([0-9]+)/page-([0-9]+)' => 'catalog/category/$1/$2', //CatalogController, actionCategory
    'category/([0-9]+)' => 'catalog/category/$1', //CatalogController, actionCategory
    'catalog' => 'catalog/index', // CatalogController, actionIndex
    'track/([0-9]+)' => 'track/view/$1', //TrackController, actionView
    '' => 'site/index' //SiteController, actionList

];
