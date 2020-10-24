<?php
$topTenLang = [
    ["Python" => "Web & application"],
    ["C++" => "Application"],
    ["Node js" => "Web & application"],
    ["PHP" => "Web & application"]
];

foreach ($topTenLang as $key => $index) {
    echo "<tr>";
    foreach ($index as $key_1 => $value) {
        $numClass = $key + 1;
        echo "<td>" . $numClass .  "</td>\n";
        echo "<td>" . $key_1 .  "</td>\n";
        echo "<td>" . $value .  "</td>\n";
    };
    echo "</tr>";
};
