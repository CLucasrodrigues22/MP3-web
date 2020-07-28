<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Albums</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <h1>Album</h1>
    <a href="?page=new_album" class="btn btn-primary">Novo Album</a>
    <div class="row">
        <?php 
            $albums = getAlbums();

            foreach ($albums as $album):
                $infoAlbum = explode('/', $album);
                $nameAlbum = $infoAlbum[1];
                $imgAlbum = $album . '/' . $nameAlbum . '.jpg';
                // var_dump($imgAlbum);
        ?>
        <div class="col-4 album">
            <a href="?page=musics&albums=<?=$nameAlbum?>">
                <img src="<?=$imgAlbum?>" alt="<?=$nameAlbum?>" class="img-album">
                <h4><?=$nameAlbum?></h4>
            </a>
        </div>
        <?php 
            endforeach;
        ?>
    </div>
</body>
</html>