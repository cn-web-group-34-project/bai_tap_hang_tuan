<?php
$hobby = array();
$name = $_POST['name'];
$class = $_POST['class'];
$university = $_POST['university'];
$animal = $_POST['Animal'];
$playGame = $_POST['playGame'];
$watchMovie = $_POST['watchMovie'];
$readBook = $_POST['readBook'];
$listenToMusic = $_POST['listenToMusic'];
$facebook = $_POST['Facebook'];
$fixBug = $_POST['fixBug'];
$coding = $_POST['Coding'];

if($animal) {
    array_push($hobby, 'Animals');
}
if($playGame) {
    array_push($hobby, 'Play Game');
}
if($watchMovie) {
    array_push($hobby, 'Watch Movie');
}
if($readBook) {
    array_push($hobby, 'Read Book');
}
if($listenToMusic) {
    array_push($hobby, 'Listen to Music');
}
if($facebook) {
    array_push($hobby, 'Facebook');
}
if($fixBug) {
    array_push($hobby, 'Fix Bug');
}
if($coding) {
    array_push($hobby, 'Coding');
}
print "Hello, $name <br />";
print "You are studing at $class, $university <br />";
print "Your hobby is :  <br />";
$i = 1;
foreach($hobby as $value){
    echo "$i. $value <br />";
    $i++;
}
?>