<?php

// namespace App\Library;
// echo "helper.php loaded ";

function cate_parent($data, $parent = 0, $str = '')
{

    foreach ($data as $item) {
        $id = $item['id'];
        $name = $item['name'];
        $parent_id = $item['parent_id'];
        if ($parent_id == $parent) {
            echo "<option value='$id'>$str $name</option>";
            cate_parent($data, $id, $str.'--');
        }
    }
}