<?php
namespace Muffin\Webservice\Test\TestCase;

use Cake\TestSuite\TestCase;
use Muffin\Webservice\Connection;

class ConnectionTest extends TestCase
{

    /**
     * @var Connection
     */
    public $connection;

    public function setUp(): void
    {
        parent::setUp();

        $this->connection = new Connection([
            'name' => 'test',
            'service' => 'Test'
        ]);
    }

    /**
     * @expectException \Muffin\Webservice\Exception\MissingDriverException
     */
    public function testConstructorMissingDriver(): void
    {
        new Connection([
            'name' => 'test',
            'service' => 'MissingDriver'
        ]);
    }

    /**
     * @expectException \Muffin\Webservice\Exception\MissingConnectionException
     */
    public function testConstructorNoDriver()
    {
        new Connection([
            'name' => 'test',
        ]);
    }
}
