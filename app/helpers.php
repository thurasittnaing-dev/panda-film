<?php

use App\Models\VideoQuality;

if (!function_exists('menuOpen')) {
  function menuOpen($module)
  {

    $routes = [
      'dashboard' => [
        'dashboard'
      ],
      'configuration' => [
        'users.index',
        'users.create',
      ],
      'movie' => [
        'videos.index',
        'videos.create',
      ]
    ];

    $searchData =  $routes[$module];
    return in_array(request()->route()->getName(), $searchData)  ? "menu-open" : "";
  }
}

if (!function_exists('isActive')) {
  function isActive($route)
  {
    return request()->route()->getName() == $route ? 'active' : '';
  }
}

if (!function_exists('isResourceActive')) {
  function isResourceActive($module)
  {
    $routes = [
      $module => [
        $module . '.index',
        $module . '.create',
        $module . '.edit',
        $module . '.show',
      ]
    ];

    $searchData =  $routes[$module];
    return in_array(request()->route()->getName(), $searchData)  ? "active" : "";
  }
}

if (!function_exists('getIndexer')) {
  function getIndexer($paginate = 15)
  {
    return (request()->input('page', 1) - 1) * $paginate;
  }
}

if (!function_exists('getVideoQualities')) {
  function getVideoQualities()
  {
    return VideoQuality::all();
  }
}
