<?php

// ДЗ-1 Задание #2

const PICTURES_COUNT = 80;
const PICTURES_FLOMASTER_COUNT = 23;
const PICTURES_KARANDASH_COUNT = 40;

$flomasterAndKarandashPictures = PICTURES_FLOMASTER_COUNT + PICTURES_KARANDASH_COUNT;
$paintPictures = PICTURES_COUNT - $flomasterAndKarandashPictures;

echo '<h1>Задача</h1>';
echo '<h2>Условия задачи:</h2>';
echo '<p>На школьной выставке <b>' . PICTURES_COUNT . '</b> рисунков. <b>' . PICTURES_FLOMASTER_COUNT . '</b> из них выполнены <b>фломастерами</b>, <b>' . PICTURES_KARANDASH_COUNT . ' карандашами</b>, а остальные — <b>красками</b>. Сколько рисунков, выполненные красками, на школьной выставке?</p>';
echo '<h2>Решение задачи:</h2>';
echo '<p>' . PICTURES_FLOMASTER_COUNT . ' + ' . PICTURES_KARANDASH_COUNT . ' = ' . $flomasterAndKarandashPictures . ' - число рисунков, выполненных фломастерами и карандашами вместе.</p>';
echo '<p>' . PICTURES_COUNT . ' - ' . $flomasterAndKarandashPictures . ' = ' . $paintPictures . ' - число рисунков, выполненных красками.</p>';
echo '<h2>Ответ:</h2>';
echo '<p>На школьной выставке <b>' . $paintPictures . ' рисунков выполненных красками</b></p>.';