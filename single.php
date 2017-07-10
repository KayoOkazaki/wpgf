<?php

if (in_category(news)) {
	/* カテゴリスラッグ news */
	include(TEMPLATEPATH . '/single-news.php');
}
elseif (in_category(trouble)) {
	/* カテゴリスラッグ trouble */
	include(TEMPLATEPATH . '/single-trouble.php');
}
elseif (in_category(voice)) {
	/* カテゴリスラッグ voice */
	include(TEMPLATEPATH . '/single-voice.php');
}
else {
	/* 他のカテゴリの投稿 */
	include(TEMPLATEPATH . '/single-org.php');
}
?>
