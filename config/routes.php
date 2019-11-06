<?php

use Cake\Routing\Route\DashedRoute;
use Cake\Routing\Router;

Router::defaultRouteClass(DashedRoute::class);

// 新しいルートをtaggedアクションのために追加します。
// 末尾の `*` は渡された引数を持っていることをcakePHPに伝えます
Router::scope(
    '/bookmarks',
    ['controller' => 'Bookmarks'],
    function ($routes) {
        $routes->connect('/tagged/*', ['action' => 'tags']);
    }
);

Router::scope('/', function ($routes) {
    // デフォルトのホームと /pages/*ルートへの接続
    $routes->connect('/', [
        'controller' => 'Pages',
        'action' => 'display', 'home'
    ]);
    $routes->connect('/pages/*', [
        'controller' => 'Pages',
        'action' => 'display'
    ]);

    // デフォルトのルートへ接続
    $routes->fallbacks();
});
