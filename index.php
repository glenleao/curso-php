<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets\css\estilo.css">
    <title>Curso PHP</title>
</head>
<body>
    <header class="cabecalho">
        <h1>Curso PHP</h1>
        <h2>Índice de Exercícios</h2>
    </header>
    <main class="principal">
        <div class="conteudo">
            <nav class="modulos">
                <div class="modulo verde">
                    <h3>Básico</h3>
                    <ul>
                        <li><a href="exercicio.php?dir=basico&file=ola">Ola</a></li>
                        <li><a href="exercicio.php?dir=basico&file=html">Integracao Html</a></li>
                        <li><a href="exercicio.php?dir=basico&file=css">Integracao CSS</a></li>
                        <li><a href="exercicio.php?dir=basico&file=comentarios">Comentarios PHP</a></li>
                        <li><a href="exercicio.php?dir=basico&file=desafio">Desafio</a></li>
                    </ul>
                </div>

                <div class="modulo vermelho">
                    <h3>Tipos</h3>
                    <ul>
                        <li><a href="exercicio.php?dir=tipos&file=int">Tipo Inteiro</a></li>
                        <li><a href="exercicio.php?dir=tipos&file=aritmeticas">Aritmeticas</a></li>
                        <li><a href="exercicio.php?dir=tipos&file=desafio-precedencia">Desafio Precedencia</a></li>
                        
                    </ul>
                </div>
                             
            </nav>

        </div>
    </main>
    <footer class="rodape">
            COD3R & KG18STORE © <?= date('Y'); ?>
    </footer>

    
</body>
</html>