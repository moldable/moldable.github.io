<?php

namespace Moldable\Moldable.github.io\Tests;

use Javanile\Producer;
use PHPUnit\Framework\TestCase;
use Moldable\Moldable.github.io\Moldable.github.io;

Producer::addPsr4([
    'Moldable\Moldable.github.io\\' => __DIR__.'/../src',
    'Moldable\Moldable.github.io\\Tests\\' => __DIR__,
]);

final class Moldable.github.ioTest extends TestCase
{
    public function testCreateAnInstance()
    {
        $object = new Moldable.github.io();
        $this->assertInstanceOf('Moldable\Moldable.github.io\Moldable.github.io', $object);

        $output = "Hello World!";
        $this->assertRegexp('/World/i', $output);
    }
}
