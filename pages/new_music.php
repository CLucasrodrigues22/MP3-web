<h1>Nova Música para o album <?=$_GET['albums']?></h1><br><br>
<a class="btn btn-info" href="?page=albums">Voltar</a>
<br><br>
<form action="#" method="post" enctype="multipart/form-data">
    <div class="form=group">
        <input type="file" name="audio">
    </div><br>
    <button type="submit" class="btn btn-success">Cadastrar</button>
</form>

<?php 
    // verificar se o tipo de requisição é o metodo POST
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $album = $_GET['albums'];

        // indica o diretório para armazenar a musica
        $path = "albums/{$album}/musics/";

        //cria o diretório caso ele não exista
        if (!is_dir($path)) {
            mkdir($path);
        }

        // move a música para para o diretório especificado pela a variável $path, pegando o nome do audio
        if (move_uploaded_file($_FILES['audio']['tmp_name'], $path . $_FILES['audio']['name'])) {
            //se o upload funcionar, o usúario é movido para a listagem de músicas do respectivo álbum
            header("Location: ?page=musics&albums={$album}");
        } else {    
            echo 'Erro no upload da música :(';
        }
    }
?>