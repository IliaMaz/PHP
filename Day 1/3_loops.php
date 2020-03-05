<?php

// ? FOR loop
$fruits = array('apple', 'mango', 'kiwi');
$size = count($fruits);
for ($i = 0; $i < $size; $i++) {
    echo $fruits[$i]  . '<br>';
};
// ? WHILE loop
$number = 10;
while ($number > 1) {
    echo $number . '<br>';
    $number--;
}
// ? Do...While
$number = 10;
do {
    echo $number . '<br>';
    $number--;
} while ($number > 1);
// ? ForEach
$fruits = array('apple', 'orange', 'memes');
foreach ($fruits as $key => $value) {
    echo $key . ' : ' . $value . '<br>';
};

echo '<hr>';

$movieType = array(
    'Thriller' => 'NightCrawler',
    'SciFi' => 'Star Wars'
);

foreach ($movieType as $genre => $title) {
    echo "$title is of genre $genre. <br>";
};
