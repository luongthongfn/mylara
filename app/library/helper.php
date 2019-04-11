<?php

// namespace App\Library;
// echo "helper.php loaded ";

function cate_parent($data, $parent = 0, $str = '', $selected_id = null)
{

    foreach ($data as $item) {
        $id = $item['id'];
        $name = $item['name'];
        $parent_id = $item['parent_id'];
        $selected = !is_null($selected_id) && $selected_id == $id ? 'selected' : '';

        if ($parent_id == $parent) {
            echo "<option value='$id' $selected >$str $name</option>";
            cate_parent($data, $id, $str.'--', $selected_id);
        }
    }
}