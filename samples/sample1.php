<?php
/**
 *
 *
 */

require_once __DIR__.'/../bootstrap.php';

use World\Things\People;

draw_class('People');

//@block:start(insert)
## Insert one record
People::insert([
    'name' => 'ciao'
]);
//@block:end

draw_block(__FILE__, 'insert');

People::desc();
People::dump();