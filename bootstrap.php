<?php
    function resolve($route) {
        $path = $_SERVER['PATH_INFO'] ?? '/';

        // $route = '/^\/([a-z]+)$/';
        $route = '/^' . str_replace('/', '\/', $route) . '$/';
        
        if (preg_match($route, '/')) {
            echo 'encontrou';
        } else {
            echo 'não encontrou';
        }
    }
    
    resolve('/');
    resolve('/admin');

    // if ($path == '/') {
    //     require __DIR__ . '/site/routes.php';
    // } elseif ($path == '/admin') {
    //     require __DIR__ . '/admin/routes.php';
    // } else {
    //     echo 'Página não encontrada';
    // }
