<?php
$json = file_get_contents("http://www.artic.edu/events-json/7174");
$data = json_decode($json);

foreach ($data as $event) {
    $yaml = "---\n";
    $yaml .= "extends: _partials.event\n";
    $yaml .= "title: \"" .$event->title ."\"\n";
    if ($event->body != $event->summary) {
        $yaml .= "description: " .$event->summary ."\n";
    }
    else {
        $yaml .= "description: \n";
    }
    $yaml .= "type: " .$event->type ."\n";

    $dates = strtotime($event->dates);
    $yaml .= "date: " .date('l, F j, Y', $dates) ."\n";
    $yaml .= "time: " .strtolower($event->start_time ."–" .$event->end_time) ."\n";
    $yaml .= "link: " .$event->url ."\n";
    $yaml .= "sortOrder: " .$event->dates ."\n";
    $yaml .= "---\n";

    $filename = $event->dates ."-" .strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $event->title))) .".md";
    file_put_contents("source/_events/" .$filename, $yaml);
}
