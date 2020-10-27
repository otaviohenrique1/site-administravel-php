<?php
    if (resolve('/admin')) {
        // echo 'Administração';
        render('admin/home', 'admin');
    } elseif (resolve('/admin/pages')) {
        // echo 'Administração de paginas';
        render('admin/pages', 'admin');
    } else {
        echo 'Página não encontrada';
    }
