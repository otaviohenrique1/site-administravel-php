<?php
    if (resolve('/')) {
        echo 'home';
    } elseif (resolve('/contato')) {
        echo 'Página de contato';
    } else {
        echo 'Página não encontrada';
    }
