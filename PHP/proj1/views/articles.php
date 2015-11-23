<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf8">
        <title>Мой первый блог</title>
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">
              
    </head>
    <body>
        <div class="container">
            <h1>Мой первый блог</h1>
            <a href="admin">Панель Администратора</a>
            <div>
                <?php foreach($articles as $a):?>
            <div class="article">
                <h3><a href="article.php?id=<?=$a['id']?>"><?=$a['title']?></a></h3>
                <em> Опубликованно:<?=$a['date']?></em>
                <p><?=$a['content']?></p>
            </div>
                <?php endforeach ?>
            </div>
            <footer>
                <p>Мой первый блог <br>
                    Copyright &copy; 2015</p>
            </footer>
        </div> 
    </body>
    
</html>