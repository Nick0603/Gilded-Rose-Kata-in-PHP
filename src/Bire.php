<?php

namespace App;

use App\Item;

class Bire extends Item
{
    public function tick()
    {
        $this->sellIn -= 1;
        if ($this->quality >= 50) {
            return;
        }
        $this->quality += 1;
        if ($this->sellIn <= 0 && $this->quality < 50) {
            $this->quality += 1;
        }
    }
}
