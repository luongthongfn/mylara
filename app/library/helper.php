<?php

// namespace App\Library;
// echo "helper.php loaded ";
function select_recursive($data, $parent = 0, $str = '', $selected_id = null, $parent_prop_name = '')
{
    foreach ($data as $item) {
        $item = (array) $item;
        $id = $item['id'];
        $name = $item['name'];
        $parent_id = $item[$parent_prop_name];
        $selected = !is_null($selected_id) && $selected_id == $id ? 'selected' : '';

        if ($parent_id == $parent) {
            echo "<option value='$id' $selected >$str $name</option>";
            cate_parent($data, $id, $str.'--', $selected_id);
        }
    }
}

function cate_parent($data, $parent = 0, $str = '', $selected_id = null) {
    return select_recursive($data, $parent, $str, $selected_id, $parent_prop_name = 'parent_id');
}

function cate_parent_product($data, $parent = 0, $str = '', $selected_id = null) {
    return select_recursive($data, $parent, $str, $selected_id, $parent_prop_name = 'cate_id');
}