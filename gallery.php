<?php

$images = glob('assets/img/gallery/*.jpg');

var_dump($images);

foreach ($images as $path) {
    echo
    '<a href="' . $path . '" title="TODO" data-gallery>
        <img src="' . $path . '" alt="TODO" class="thumb-img thumbnail img-responsive">
    </a>
    ';
}