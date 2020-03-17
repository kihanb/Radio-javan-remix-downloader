<?php
/*
 * Radio Javan Remix Downloader v1.0
 * Coded By kihanb
 * Website: kihanb.ir
 * Telegram: @kihanb_ir
 */
 
$link = 'https://www.radiojavan.com/podcasts/podcast/Dor-Dor-5'; // Put Remix Page Link here

$download = false; // True = Download in your Host / False = Just show download link

$source = file_get_contents($link);

preg_match('/RJ.currentMP3Url = \'(.*?)\';/',$source,$id);

$url = "https://host2.rj-mw1.com/media/$id[1].mp3";

if($download){
    
    preg_match('/RJ.currentMP3Perm = \'(.*?)\';/',$source,$name);
    $file = file_get_contents($url);
    file_put_contents($name[1].'.mp3',$file);
    echo 'downloaded!';
    
}else{
    
    echo $url;
    
}

?>
