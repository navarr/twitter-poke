<?php

function jmp_shorten($url)
{
    $user = JMP_USER;
    $key = JMP_KEY;

    $url = "http://api.j.mp/shorten?version=2.0.1&longUrl=".urlencode($url)."&login=".$user."&apiKey=".$key;

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
    curl_setopt($ch, CURLOPT_URL, $url);
    $content = curl_exec($ch);
    $json = json_decode($content, TRUE);
    foreach ($json["results"] as $ra)
    {
        return $ra["shortUrl"];
    }
}
