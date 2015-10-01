<?php 


/* Detect Locations */
/* Detect Locations */
function detect_location() {
    $IPAddress = $_SERVER["REMOTE_ADDR"];
    $Details   = json_decode(file_get_contents("http://ipinfo.io/{$IPAddress}/json"));

    return($Details);
}

function is_rsa() {
    $Details = detect_location();

    if($Details->country == "ZA") {
        return(true);
        echo "South";
    }

    return(false);
}

function is_australia() {
    $Details = detect_location();

    if($Details->country == "AU") {
        return(true);
    }

    return(false);
}

function is_uk() {
    $Details = detect_location();

    if($Details->country == "GB") {
        return(true);
    }

    return(false);
}

function is_us() {
    $Details = detect_location();

    if($Details->country == "US") {
        return(true);
    }

    return(false);
}

function is_netherlands() {
    $Details = detect_location();

    if($Details->country == "NL") {
        return(true);
    }

    return(false);
}

function get_slide_suffix() {
    if(is_uk()) {
        return("");
    }
    else if(is_us()) {
        return("_us");
    }
    else if(is_australia()) {
        return("_aus");
    }
    else if(is_netherlands()) {
        return("_nl");
    }

    return("");
}
