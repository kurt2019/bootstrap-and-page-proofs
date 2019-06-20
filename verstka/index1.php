<?php
/*
$arr = array(
//		id	parent_id	text
	array(1,	0,		'text_1'),
	array(4,	2,		'text_4'),
	array(8,	0,		'text_8'),
	array(3,	1,		'text_3'),
	array(10,	3,		'text_10'),
	array(5,	4,		'text_5'),
	array(7,	3,		'text_7'),
	array(2,	1,		'text_2'),
	array(9,	0,		'text_9'),
	array(11,	0,		'text_11'),
	array(6,	4,		'text_6'),
	array(12,	11,		'text_12')
);
*/


$arr = [[1, 0, "text_1"],
        [4, 2, "text_4"],
        [8, 0, "text_8"],
        [3, 1, "text_3"],
        [10, 3, "text_10"],
        [5, 4, "text_5"],
        [7, 3, "text_7"],
        [2, 1, "text_2"],
        [9, 0, "text_9"],
        [11, 0, "text_11"],
        [6, 4, "text_6"],
        [12, 11, "text_12"]
];
$count = count($arr);
sort($arr);
foreach ($arr as $arr2 => $value) {
    echo "<div> $value[2] " . "<br>";
}
if (count($arr) == 12) {
    for ($i = 1; $i <= count($arr); $i++) {
        echo "</div>";
    }
}



/*
******* Решение для 2 задания

SELECT a.*, GROUP_CONCAT(t.data) as tags FROM article a
JOIN article_hash_tag aht ON a.id=aht.article_id
JOIN tag t ON aht.tag_id=t.id
GROUP BY a.id
ORDER BY a.id
LIMIT 20*/

