<?php
 
dmr();
 
function dmr() {
    $url = "https://track.trackingabc.com/eb464543-481f-49c9-92a5-c5b1825ffe54?campaignid={campid}&device={device}&network={network}&placements={placement}&target={target}&keyword={keyword}&gclid={gclid}";
 
    if ( $_SERVER['HTTP_REFERER'] == "" ) {
        refresh($url);
        die();
    } else if ( $_GET['redir'] == '1' ) {
        refresh($url);
    } else {
        refresh( "offer.php?url=" . urlencode($url) . 
            "&redir=1" );
    }
}
 
function refresh($url) {
    echo "<meta http-equiv='refresh' content='0; url=$url'>";
}
 
?>