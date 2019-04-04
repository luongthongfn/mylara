<?php

namespace App\Library;

function cate_parent($data)
{

    foreach ($data as $item) {
        echo "<option value='$item->id'>$item->name</option>";
    }
}