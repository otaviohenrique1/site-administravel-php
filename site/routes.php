<?php
    if (resolve('/')) {
        // echo 'home';
        render('site/home', 'site');
    } elseif (resolve('/contato')) {
        // echo 'Página de contato';
        render('site/contato', 'site');
    } else {
        echo 'Página não encontrada';
    }
