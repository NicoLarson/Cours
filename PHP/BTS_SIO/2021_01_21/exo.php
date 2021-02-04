<?php
//tableau
$produit = ([
    "marque"=>"Laden",
    "Capacité"=>25,
    "Consommation"=> 100,
    "Prix"=>300, 
    "photo"=>"https://image.darty.com/gros_electromenager/lavage_sechage/lave-linge_ouverture_dessus/proline_ptl5511_n_t2010124878493A_151655576.jpg"
]);
//foreach
print "<ul>";
foreach( $produit as $key => $value){
    //   if($key == "photo"){
    //      echo ('<img src="'.$value.'">' . "<br>");   
    //   }else{
    //      echo ($key . ": " . $value . "<br>");   
    //   }
    $key!="photo" ? print '<li>'.$key.' '.$value.'</li>': print '<li><img src="'.$value.'"alt="image"></li>';
}
print "</ul>";

?>
