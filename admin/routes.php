<?php
    if (resolve('/admin')) {
        // echo 'Administração';
        render('admin/home', 'admin');
    } elseif (resolve('/admin/pages')) {
        // echo 'Administração de paginas';
        render('admin/pages', 'admin');
    } else {
        http_response_code(404);
        echo 'Página não encontrada';
    }
