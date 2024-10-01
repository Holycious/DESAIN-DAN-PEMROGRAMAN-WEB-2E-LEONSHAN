<?php
$loremIpsum = "Lorem ipsum dolor sit amet consectetur adipisicing elit. 
            Doloribus voluptatum quam magni veniam qui nam ex illo maxime aliquid quisquam aliquam, sequi fuga molestiae assumenda quasi totam? 
            Quo, laudantium quisquam!";         
echo "<p>{$loremIpsum}</p>";
echo "Panjang karakter: " . strlen($loremIpsum) . "<br>";
echo "Panjang kara: " . str_word_count($loremIpsum) . "<br>";
echo "<p>" . strtoupper($loremIpsum) . "</p>";
echo "<p>" . strtoupper($loremIpsum) . "</p>";

?>