<?php



function kalkulatorPopusta($cena2)
{
    return $cena2 * 0.1;

}


$popustisvi = [];

$brojevi = [250, 330, 1000, 2000, 5000];

foreach ($brojevi as $broj) {
    $popusti_dva = kalkulatorPopusta($broj);

    array_push($popustisvi, $popusti_dva);
}

//var_dump($popustisvi);

$ukuonoPopusta_dva = 0;

$ukuonoPopusta = array_sum($popustisvi);
echo "ukuono ima $ukuonoPopusta din popusta";



function kalkulatorKamate ($kamata, $godina){


    if ($godina < 2020){
        $kamate = $kamata * 0.14;
        return $kamate;
    }
    else if ($godina >= 2000 && $godina < 2010){
        $kamate = $kamata * 0.12;
        return $kamate;
    }

};

echo kalkulatorKamate(5000 , 2020);