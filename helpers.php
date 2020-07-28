<?php 

function getAlbums() {
    $albums = glob('albums/*');

    return $albums;
}

function getMusics($albums) {
    $musics = glob("albums/{$albums}/musics/*.mp3");

    return $musics;
}