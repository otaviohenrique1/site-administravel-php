<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Painel administrativo</title>
        <link rel="stylesheet" href="/css/bootstrap.min.css">
        <link rel="stylesheet" href="/resources/trix/trix.css">
        <link rel="stylesheet" href="/css/style.css">
    </head>
    <body class="d-flex flex-column">
        <!-- <h1>Administração</h1> -->
        <div id="header">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <a href="" class="navbar-brand">AdminSON</a>
                <span class="navbar-text">
                    Painel administrativo
                </span>
            </nav>
        </div>
        <div id="main">
            <div class="row">
                <div class="col">
                    <ul id="main-menu" class="nav flex-column nav-pills bg-secondary text-white p-2">
                        <li class="nav-item">
                            <span class="nav-link text-white-50"><small>Menu</small></span>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link active">Páginas</a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link">Usuários</a>
                        </li>
                    </ul>
                </div>
                <div id="content" class="col-10">
                    <?php include $content ?>
                </div>
            </div>
        </div>
        <script src="/js/jquery-3.5.1.min.js"></script>
        <script src="https://unpkg.com/@popperjs/core@2"></script>
        <script src="/js/bootstrap.min.js"></script>
        <script src="/resources/trix/trix.js"></script>
    </body>
</html>