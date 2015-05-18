<?php

$images = glob('../assets/img/gallery/*.jpg');

foreach ($images as $path) {

    $title = iconv('ISO-8859-2', 'UTF-8', exif_read_data($path)['Title']);

    echo
    '<a href="' . $path . '" title="'. $title . '" data-gallery>
        <img src="' . $path . '" alt="' . $title . '" class="thumb-img thumbnail img-responsive">
    </a>
    ';
}