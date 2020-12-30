<?php

$xml = simplexml_load_file('movies_list.xml');

echo '<h2>Movies Listing</h2>';

$list = $xml->movie;

for ($i = 0; $i < count($list); $i++) {

    echo '<b>Movie ID:</b> ' . $list[$i]->attributes()->movie_id . '<br>';

    echo 'Title: ' . $list[$i]->Title . '<br>';

    echo 'Year: ' . $list[$i]->Year . '<br><br>';

}
?>