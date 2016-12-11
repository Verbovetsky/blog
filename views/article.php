<!DOCTYPE html>
<hmtl>
    <head>
        <meta charset="utf-8">
        <title>Home Page</title>
        <link rel="stylesheet" href="style.css">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    </head>
    <body>
        <!-- Page div -->
        <div class="container">
            <!-- Header -->
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <div class="nav navbar-nav">
                        <a id="blog" class="navbar-brand" href="index.php">Home Page</a>
                    </div>
                    <ul class="nav navbar-nav">
                        <li><a href="admin">Post Creation page</a></li>
                        <li><a href="text.php">Text</a></li>
                    </ul>
                </div>
            </nav> 
            <!-- END Header -->
            <!-- Content -->
            <div class="article">
                <h3><?=$article['title']?></h3>
                <em>Public: <?=$article['date']?></em>
                <p><?=$article['content']?></p>
            </div>
            <!-- END Content -->
            <!-- Footer -->
            <footer>
                <p>
                    Блог<br>Copyright &copy; 2016
                </p>
            </footer>
            <!-- END Footer -->
        </div>
        <!-- END Page div -->
    </body>
</hmtl>