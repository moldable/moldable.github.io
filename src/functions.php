<?php


function draw_class($class)
{
    $file = __DIR__.'/classes/'.$class.'.php';
    $code = file_get_contents($file);

    echo '<pre><code class="php">';
    echo htmlentities(trim(str_replace('<?php', '', $code)));
    echo '</code></pre>';
}

function draw_block($file, $block)
{
    $code = file_get_contents($file);

    if (preg_match('#//@block:start\('.$block.'\)(.*)//@block:end#is', $code, $matchs)) {
        echo '<pre><code class="php">';
        echo htmlentities(trim($matchs[1]));
        echo '</code></pre>';
    }
}