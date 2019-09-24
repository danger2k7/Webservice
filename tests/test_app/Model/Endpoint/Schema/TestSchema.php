<?php

namespace Muffin\Webservice\Test\test_app\Model\Endpoint\Schema;

use Muffin\Webservice\Model\Schema;

class TestSchema extends Schema
{

    public function initialize(): void
    {
        $this->addColumn('id', [
            'type' => 'int'
        ]);
        $this->addColumn('title', [
            'type' => 'string'
        ]);
        $this->addColumn('body', [
            'type' => 'string'
        ]);
    }
}
