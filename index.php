<?php declare(strict_types=1);
use Ghostff\TextToImage\Text;
use Ghostff\TextToImage\TextToImage;
require_once __DIR__ . '/src/TextToImage.php';
require_once __DIR__ . '/src/Text.php';
// $text1 = Text::from('ravi kuarm dubey')->color(231, 81, 0);

// $text2 = Text::from('ravi kuarm dubey')->color(130, 146, 145)->position(260, 35);

// $text3 = (new Text('ravi kuarm dubey'))->set(150, 0, [0, 0, 252], '', 10, 1, 1, [50, 205, 50]);
$text  = Text::from('Ravi kumar dubey!')
            ->position(500, 450)
            ->font(50, __DIR__ . '/sweet purple.otf')
            ->color(43,54, 0)
            ->rotate(0);

header("Content-Type: image/png");
echo (new TextToImage(__DIR__ . '/cp.jpeg'))->addTexts( $text)->render();











