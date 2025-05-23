<?php
/* ====================
[BEGIN_COT_EXT]
Hooks=forums.newtopic.newtopic.done
[END_COT_EXT]
==================== */

/**
 * Adds tags when creating a new topic
 *
 * @package Tags
 * @copyright (c) Cotonti Team
 * @license https://github.com/Cotonti/Cotonti/blob/master/License.txt
 */

use cot\modules\forums\inc\ForumsDictionary;

defined('COT_CODE') or die('Wrong URL');

if (Cot::$cfg['plugin']['tags']['forums'] && cot_auth('plug', 'tags', 'W')) {
	require_once cot_incfile('tags', 'plug');
	$item_id = $q;
	$rtags = cot_import('rtags', 'P', 'TXT');
	$tags = cot_tag_parse($rtags);
	$cnt = 0;
	foreach ($tags as $tag) {
		cot_tag($tag, $item_id, ForumsDictionary::SOURCE_TOPIC);
		$cnt++;
		if (Cot::$cfg['plugin']['tags']['limit'] > 0 && $cnt == Cot::$cfg['plugin']['tags']['limit']) {
			break;
		}
	}
}
