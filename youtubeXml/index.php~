<?php

$channel = simplexml_load_file('https://www.youtube.com/feeds/videos.xml?channel_id=UCsT0YIqwnpJCM-mx7-gSA4Q');

foreach($channel->entry as $entry){

	echo 'Id: '.$entry->id.' title: '.$entry->title.'<br>';

}

?>
