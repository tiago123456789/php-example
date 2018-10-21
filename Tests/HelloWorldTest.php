<?php

namespace Test;

use PHPUnit\Framework\TestCase;

class HelloWorldTest extends TestCase
{
    /**
     * @var PDO
     */
    private $pdo;

    public function setUp()
    {
        parent::setUp();
    }

    public function testWhat()
    {
        $this->assertTrue(true);
    }
}

