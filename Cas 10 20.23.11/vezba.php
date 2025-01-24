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


function kalkulatorKamate($kolikoKredita, $godina) {
    $kamata = 0;

    if ($godina < 2020) {
        $kamata = $kolikoKredita * 0.8; //
    } elseif ($godina >= 2000 && $godina < 2010) {
        $kamata = $kolikoKredita * 0.12;
    } else {
        $kamata = $kolikoKredita * 0.10;
    }

    return $kamata;
}

echo kalkulatorKamate(1000, 2020);





