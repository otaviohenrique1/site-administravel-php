<?php
    if (resolve('/admin')) {
        echo 'Administração';
    } elseif (resolve('/admin/pages')) {
        echo 'Administração de paginas';
    } else {
        echo 'Página não encontrada';
    }
