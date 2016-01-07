<?php exit; ?>
1452051812
SELECT m.*, u.user_colour, g.group_colour, g.group_type FROM (stockphpbb_moderator_cache m) LEFT JOIN stockphpbb_users u ON (m.user_id = u.user_id) LEFT JOIN stockphpbb_groups g ON (m.group_id = g.group_id) WHERE m.display_on_index = 1
6
a:0:{}