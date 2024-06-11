<?php
const ALL_DRAWINGS = 80;
const FELT_DRAWINGS = 23;
const PANCILE_DRAWINGS = 40;

$paintsDrawing = ALL_DRAWINGS - FELT_DRAWINGS -PANCILE_DRAWINGS;

echo 'Рисунки сделанные красками: ' . $paintsDrawing;