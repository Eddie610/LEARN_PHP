<?php

$F_name="Edward";
echo "My name is", $F_name;
echo "<br>";
echo "<br>";
echo "His name has",  strlen($F_name),  "characters";
echo "<br>";
echo "<br>";
$Content="Professional PHP tooling for any Language Server Protocol capable editor.";
echo $Content;
echo "<br>";
echo "<br>";
echo "There are", str_word_count($Content),"words in the content above";
echo "<br>";
echo "<br>";
echo "Let us revers his name";
echo "<br>";
echo strrev($F_name);
