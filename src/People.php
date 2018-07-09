<?php
## Define "People" model class
namespace World\Things;

use Javanile\Moldable\Storable;

class People extends Storable
{
    public $id = self::KEY;
    public $name = '';
}

