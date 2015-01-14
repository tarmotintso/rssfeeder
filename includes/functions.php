<?php

function getFeed($feed_url)
{

    $content = file_get_contents($feed_url);
    $x = new SimpleXmlElement($content);

    foreach ($x->channel->item as $entry) {
        echo "<div>";
        echo "<div class='col-md-4 col-sm-5 col-xs-10 table-bordered clickable' href='.$entry->guid '>";
        echo "<li><a href='$entry->link' title='$entry->title'>" . $entry->title . "</a></li>" .
            "<p>" . $entry->description . "<a href='$entry->guid'>Continue reading.</a>" . "<br>" . "Date published: " . $entry->pubDate;// . $entry->guid . "</p>";
        echo "</div>";
        echo "</div>";
    }

}

function getFeedTitle($feed_url)
{

    $content = file_get_contents($feed_url);
    $x = new SimpleXmlElement($content);

    foreach ($x->channel as $entry) {
        echo "$entry->title";
    }
}

?>