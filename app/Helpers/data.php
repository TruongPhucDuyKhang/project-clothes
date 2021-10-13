<?php 
function data_tree($data, $parent_id = 0, $level = 0)
{
	$result = [];
	foreach ($data as $item) {
		if ($item['prarent_id'] == $parent_id) {
			$item['level'] = $level;
			$result[] = $item;
			$child = data_tree($data, $item['cat_id'], $level + 1);
			$result = array_merge($result, $child);
			// echo "<pre>";
			// 	print_r($result);
			// echo "</pre>";
		}
	}
	return $result;
}

function data_tree_shows($data, $parent_id = 0, $level = 0)
{
	$cate_child = array();
	foreach ($data as $key => $item) {
		if ($item['prarent_id'] == $parent_id) {
			$item['level'] = $level;
			$cate_child[] = $item;
		}
	}
	if($cate_child){
		foreach($cate_child as $item){
			$child = data_tree_shows($data, $item['cat_id'], $level + 1);
		    $cate_child = array_merge($cate_child, $child);
		}
	}
	return $cate_child;
}
?>