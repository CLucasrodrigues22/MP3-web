<h1>Cadastrar novo album</h1>
<a class="btn btn-info" href="?page=albums">Voltar</a>

<form action="#" method="post" enctype="multipart/form-data">
<br>
    <div class="form-group">
        <input type="text" name="name" placeholder="Nome">
        <input type="file" name="image">
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-success">Cadastrar</button>
    </div>
</form>

<?php
   if ($_SERVER['REQUEST_METHOD'] == 'POST') {
       $album = $_POST['name'];

       $path = "albums/{$album}";

       if (!is_dir($path)) {
           mkdir($path);
       }

       echo '<pre>';
       $file = $_FILES['image'];
       $fileInfo = explode('.', $file['name']);

       $extension = $fileInfo[1];
       $nameImage = $album . '.' . $extension;

       if(move_uploaded_file($file['tmp_name'], $path.'/'.$nameImage)) {
           header('Location: ?page=albums');
       } else {
           echo 'Erro ao fazer upload da imagem :(';
       }

   }
?>