<?php

namespace Muffin\Webservice\Test\test_app\Webservice\Driver;

use Muffin\Webservice\AbstractDriver;
use Muffin\Webservice\Test\test_app\Webservice\EndpointTestWebservice;
use Muffin\Webservice\Webservice\WebserviceInterface;

class Test extends AbstractDriver
{

    /**
     * Initialize is used to easily extend the constructor.
     *
     * @return void
     */
    public function initialize()
    {
    }

    /**
     * @inheritDoc
     */
    protected function _createWebservice($className, array $options = []): WebserviceInterface
    {
        return new EndpointTestWebservice($options);
    }
}
