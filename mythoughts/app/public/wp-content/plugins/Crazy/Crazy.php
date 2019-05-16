<?php
/**
 * Plugin Name:       Craziness
 *
 */

$apodapiKey = "GYwdYkzmcHViNzlzA3KphW1GBKZsITMOrMVjtwYl";


function myplugin_filture($content){
    $link="location='somethingodd.php'";
    echo "<script>console.log(\"Crazy go nutz\")</script>";

    $content = $content . '<p> Custom content..something crazy</p>'
    . "<div><button onclick=$link>Crazy Button</button>";
    return $content;
}

add_filter('the_content', 'myplugin_filture');


function getApod(){
    echo "<script>console.log(\"Crazy go nutz\")</script>";
}

