<?php

namespace App;

use App\Bire;
use App\Normal;
use App\Sulfuras;
use App\BackstagePass;

class GildedRose
{
    public $name;

    public $quality;

    public $sellIn;

    public static function of($name, $quality, $sellIn)
    {
        $lookup = [
            'normal' => Normal::class,
            'Aged Brie' => Bire::class,
            'Sulfuras, Hand of Ragnaros' => Sulfuras::class,
            'Backstage passes to a TAFKAL80ETC concert' => BackstagePass::class
        ];
        return new $lookup[$name]($quality, $sellIn);
    }
}
