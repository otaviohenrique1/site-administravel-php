<?php
    if (resolve('/')) {
        // echo 'home';
        render('site/home', 'site');
    } elseif (resolve('/contato')) {
        // echo 'Página de contato';
        render('site/contato', 'site');
    } else {
        http_response_code(404);
        echo 'Página não encontrada';
    }
