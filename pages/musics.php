<h1>Músicas de <?=$_GET['albums']?></h1> <br>
<a class="btn btn-info" href="?page=albums">Voltar</a>
<a href="?page=new_music&albums=<?=$_GET['albums']?>" class="btn btn-success">Nova música</a>

<hr>

<?php 
    // echo '<pre>';
// var_dump($_GET);
    // echo '<pre>';
    $album = $_GET['albums'];
    
    $musics = getMusics($album);
   

    foreach ($musics as $music):
?>


<div class="col-12">
    <audio src="<?=$music?>" controls></audio>
</div>

<?php 
    endforeach;
?>