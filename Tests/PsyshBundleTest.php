<?php

namespace Navitronic\PsyshBundle\Tests;

use Navitronic\PsyshBundle\PsyshBundle;

/**
 * Class PsyshBundleTest.
 *
 * @see     PsyshBundle
 */
class PsyshBundleTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test that the bundle loads and compiles.
     */
    public function testBundle()
    {
        new PsyshBundle();
    }
}
