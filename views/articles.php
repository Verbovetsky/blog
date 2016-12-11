<!DOCTYPE html>
<hmtl>
    <head>
        <meta charset="utf-8">
        <title>Home Page</title>
        <link rel="stylesheet" href="style.css">
		<script src="scripts/jquery.js"></script>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    </head>
    <body>
    <body>
        <div class="container">
            <!-- Header (navbar) -->
            <nav class="navbar navbar-default" >
                <div class="container-fluid">
                    <div class="navbar-header">
                        <a id="blog" class="navbar-brand" href="index.php">Home Page</a>
                    </div>
                    <ul class="nav navbar-nav">
                        <li><a href="admin">Post Creation page</a></li>
						<li><a href="text.php">Text</a></li>
                    </ul>
                </div>
            </nav> 
            <!-- END Header (navbar) -->
            <?php foreach($articles as $article): ?>
            <div class="article" >
                <h3><a href="article.php?id=<?=$article['id']?>"><?=$article['title']?></a></h3>
                <em>Public: <?=$article['date']?></em>
                <p><?=articles_intro($article['content'])?></p>
            </div>
            <?php endforeach ?>
	<footer>
		<div id="footerNav">
			<p>
				Блог<br>Copyright &copy; 2016
			</p>
		</div>
	</footer>
        </div>
    </body>
</hmtl>