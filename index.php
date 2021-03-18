<?php
$str = 'Устало все кругом: устал и цвет небес,
И ветер, и река, и месяц, что родился,
И ночь, и в зелени потусклой спящий лес,
И желтый тот листок, что наконец свалился.

Лепечет лишь фонтан средь дальней темноты,
О жизни говоря незримой, но знакомой…
О ночь осенняя, как всемогуща ты
Отказом от борьбы и смертною истомой!';


$words = str_word_count($str, 1, 'АаБбВвГгДдЕеЁёЖжЗзИиЙйКкЛлМмНнОоПпРрСсТтУуФфХхЦцЧчШшЩщЪъЫыЬьЭэЮюЯя');
$words = array_unique($words);

$count = count($words);

$words_count = [];

foreach ($words as $word) {

    preg_match_all('~\b' . $word . '\b~iu', $str, $words_count[$word]);
}


foreach ($words_count as $word => $word_count) {
    $entry_count = count($word_count[0]);
    echo "{$word}: {$entry_count}" . '<br>';
}

echo "Всего слов: {$count}";