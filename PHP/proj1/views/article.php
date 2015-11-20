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
            <div>
            <div class="article">
                <h3><?=$article['title']?></h3>
                <em> Опубликованно:<?=$article['date']?></em>
                <p><?=$article['content']?></p>
            </div>
            </div>
            <footer>
                <p>Мой первый блог <br>
                    Copyright &copy; 2015</p>
            </footer>
        </div> 
    </body>
    
</html>