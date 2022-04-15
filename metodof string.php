<?php
echo strlen("Hello world!");#It ALSO counts spaces and speacial signs!
echo " Count is:".str_word_count("Hello world!"); // outputs 2
echo " Reverse is:".strrev("Hello world!"); // outputs !dlrow olleH
echo " Checks the word:",strpos("Hello world!", "world"); // outputs 6
echo " Replace:",str_replace("world", "Dolly", "Hello world!"); // outputs Hello Dolly!
?>