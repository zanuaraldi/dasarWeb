<?php
    $pattern = '/[a-z]/'; // Cocokkan huruf kecil.
    $text = 'This is a Sample Text';
    if(preg_match($pattern, $text)){
        echo "huruf kecil ditemukan!";
    } else{
        echo "Tidak ada huruf kecil!";
    }
    
    echo "<br>";
    
    $pattern = '/[0-9]+/'; // Cocokkan satu atau lebih digit.
    $text = 'There are 123 apples';
    if(preg_match($pattern, $text, $matches)){
        echo "Cocokkan: ".$matches[0];
    } else{
        echo "Tidak ada yang cocok!";
    }
    
    echo "<br>";
    
    $pattern = '/apple/';
    $replacement = 'banana';
    $text = 'I like apple pie.';
    $new_text = preg_replace($pattern, $replacement, $text);
    echo $new_text; // Output " "I like banana pie."

    echo "<br>";

    $pattern = '/go*d/'; // Cocokkan "god", "good", "goood", dll.
    $text = 'god is good';
    if(preg_match($pattern, $text, $matches)){
        echo "Cocokkan: ".$matches[0];
    } else{
        echo "Tidak ada yang cocok!";
    }

    echo "<hr>";
    echo "Soal 5.5<br>";
    $pattern = '/go?d/'; // Cocokkan "god", "good", "goood", dll.
    $text = 'god is good';
    if(preg_match($pattern, $text, $matches)){
        echo "Cocokkan: ".$matches[0];
    } else{
        echo "Tidak ada yang cocok!";
    }
    
    echo "<hr>";
    echo "Soal 5.6<br>";
    $pattern = '/go{2,2}d/'; // Cocokkan "god', "good", "goood", dll.
    $text = 'god is good';
    if (preg_match($pattern, $text, $matches)) {
        echo "Cocokkan : " . $matches[0];
    } else {
        echo "Tidak ada yang cocok";
    }
?>