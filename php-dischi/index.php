<?php
include 'dischi.php';
?>
<!DOCTYPE html>
 <html lang="it" dir="ltr">
     <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" integrity="sha384-KA6wR/X5RY4zFAHpv/CnoG2UW1uogYfdnP67Uv7eULvTveboZJg0qUpmJZb5VqzN" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Noto+Sans+TC:700&display=swap" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="main.js" charset="utf-8"></script>
        <link rel="stylesheet" href="style.css">
        <title>Musica</title>
     </head>
     <body>
        <div class="layout">
            <p>Music</p>
        </div>
        <header>
            <i class="fas fa-drum"></i>
            <ul>
                <li>home</li>
                <li>songs</li>
                <li>author</li>
                <li>contacts</li>
            </ul>
        </header>

        <main>
            <select class="generi">
                <option value="">Select a genre</option>
                <option value="pop">Pop</option>
                <option value="rock">Rock</option>
                <option value="metal">Metal</option>
                <option value="jazz">Jazz</option>
            </select>

            <div class="container-songs">
                <?php foreach ($dischi as $value) { ?>
                    <div class="song" data-genere="<?php echo $value['genre']; ?>">
                        <div class="img-container">
                            <img src="<?php echo $value['poster']; ?>" alt="">
                            <i class="fas fa-play"></i>
                        </div>
                        <div class="info">
                            <h2><?php echo $value['title']; ?></h2>
                            <span><?php echo $value['author']; ?> , <?php echo $value['year']; ?></span>
                        </div>
                    </div>
            <?php } ?>
            </div>
        </main>
    </body>
</html>
