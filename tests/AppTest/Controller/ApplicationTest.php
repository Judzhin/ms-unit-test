<?php
/**
 * Created by PhpStorm.
 * User: judzhin
 * Date: 6/16/16
 * Time: 4:57 PM
 */

namespace AppTest\Controller;

use App\Application;

/**
 * Class ApplicationTest
 * @package AppTest\Controller
 */
class ApplicationTest extends \PHPUnit_Framework_TestCase
{

    /**
     *
     */
    public function testCanBeCreateInstance()
    {
        /** @var Application $app */
        $app = new Application;
        $app->run();
        $this->assertTrue(true);
    }

}