<?php


$favouriteAnime = "Bleach";
$numberOfEpisodes = 365;
$viewers = 79.8;
$isBleachTheBest = true;
$array = [
    $favouriteAnime,
    $numberOfEpisodes,
    $viewers,
    $isBleachTheBest
];
$assocArray = [
    "title" => $favouriteAnime,
    "number" => $numberOfEpisodes,
    "viewers" => $viewers,
    "isBleachTheBest" => $isBleachTheBest
];

//for ($i = 0; $i <= 3; $i++) {
//    echo $array[$i];
//    echo "<br>";
//}

//$counter = 0;
//while ($counter < sizeof($array)) {
//    echo $array[$counter];
//    echo "<br>";
//    $counter++;
//}
//
//foreach ($assocArray as $key => $item) {
//    echo $key;
//    echo "<br>";
//    echo $item;
//    echo "<br>";
//}

function whatIsMyFavouriteAnime($personName)
{
    $favouriteAnime = "";
    echo $personName;
    $personName = strtolower($personName);
    echo "<br>";
    echo $personName;
    echo "<br>";
    switch ($personName) {
        case "dilyan":
            $favouriteAnime = "Dilyans...";
            break;
        case "marin":
            $favouriteAnime = "Marins...";
            break;
        case "simona":
            $favouriteAnime = "Simonas...";
            break;
        default:
            $favouriteAnime = "Not found";
            break;
    }
    return $favouriteAnime;
}

echo whatIsMyFavouriteAnime("Marin");

//======================================================================================================================

//
//$welcomeMessage = "Hello world";
//$year = 25;
//$temperature = 16.5;
//$todayIsMonday = true;
//$array = [
//    $welcomeMessage,
//    $year,
//    $todayIsMonday,
//    $temperature
//];
//
////for ($i = 0; $i <= 3; $i++) {
////    print_r($array[$i]);
////    echo "<br>";
////}
//
////$i = 0;
////while ($i <= 3) {
////    print_r($array[$i]);
////    echo "<br>";
////    $i++;
////}
//
//$assocArray = [
//    "welcome" => $welcomeMessage,
//    "year" => $year,
//    "isTodayMonday" => $todayIsMonday,
//    "temp" => $temperature,
//];
////
////foreach ($assocArray as $key => $item) {
////    print_r($key);
////    echo "<br>";
////    print_r($item);
////    echo "<br>";
////}
//$myAge = 25; // int
//$friendAge = "25"; // str
//
////if ($username === "ivan") {
////    echo "You are called Ivan";
////} elseif ($username === "dilyan") {
////    echo "You are called Dilyan";
////} else {
////    echo "I don't know who you are";
////}
//
////$username = "ivan";
////switch ($username) {
////    case "dilyan":
////        echo "You are called Dilyan";
////        break;
////    case "ivan":
////        echo "You are called Ivan";
////        break;
////    default:
////        echo "I don't know who you are";
////}
////
//function whatIsMyDogName($name) {
//    $dogName = "";
//    switch ($name) {
//        case "dilyan":
//            $dogName = "Rex";
//            break;
//        default:
//            $dogName = "Unknown";
//            break;
//    }
//    return $dogName;
//}
//
//$myName = "dilyan2";
//echo whatIsMyDogName($myName);
//
//
//
////$multiDiamantionalArray = [
////    "one",
////    [
////        "four",
////        "five"
////    ],
////    "three"
////];
////$multiDimentionalAssocArray = [
////    "title" => "hello",
////    "description" => "welcome to php",
////    "links" => [
////        "wiki" => "http://wiki.com",
////        "udemy" => "http://udemy.com",
////        "random" => [
////            "http://google.com"
////        ]
////    ]
////];
