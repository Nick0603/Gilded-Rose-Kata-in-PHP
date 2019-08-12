<?php

namespace App;

use App\Bire;
use App\Normal;
use App\Item;
use App\BackstagePass;

class GildedRose
{
    public $name;

    public $quality;

    public $sellIn;

    public static $lookup = [
        'normal' => Normal::class,
        'Aged Brie' => Bire::class,
        'Backstage passes to a TAFKAL80ETC concert' => BackstagePass::class,
        'Conjured Mana Cake' => Conjured::class
    ];
    public static function of($name, $quality, $sellIn)
    {
        $class = isset(static::$lookup[$name])? static::$lookup[$name] : Item::class;
        return new $class($quality, $sellIn);
    }
}
