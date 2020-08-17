<?php
//var_dump($_FILES);
if (!empty($_FILES['file']['tmp_name'])) {
    if ($_FILES['file']['type'] == "application/vnd.ms-excel") {
        $uploaded = file_get_contents($_FILES['file']['tmp_name'], $_FILES['file']['tmp_name']);
    }else{
        die("Wrong file format! Please upload .csv ! <a href='.'>Go to main</a>");
    }
}
$strToArr = explode("\n", $uploaded);

foreach ($strToArr as $key => $value) {
    $formatedArr[] = explode(",", $value);
}

$encodedFile = json_encode($formatedArr);

file_put_contents("encoded.json", $encodedFile);

$decodedFile = json_decode(file_get_contents("encoded.json"));

function tableDraw($file){
foreach ($file as $values){
    echo "<tr>";
    foreach ($values as $value){
        echo "<td>".$value."</td>";
    }
    echo "</tr>";
}
}