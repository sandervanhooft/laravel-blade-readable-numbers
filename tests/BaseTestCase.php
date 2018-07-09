<?php

namespace SanderVanHooft\Tests\ReadableNumbers;

use Orchestra\Testbench\TestCase;
use SanderVanHooft\Tests\ReadableNumbers\Concerns\RendersBlade;

abstract class BaseTestCase extends TestCase
{
    use RendersBlade;

    protected function getPackageProviders($app)
    {
        return ['SanderVanHooft\ReadableNumbers\ReadableNumbersServiceProvider'];
    }

    protected function withPackageMigrations()
    {
        // Example migration run
        // include_once __DIR__.'/database/migrations/CreateUsersTable.php';
        // (new \SanderVanHooft\Tests\Skeleton\Database\Migrations\CreateUsersTable())->up();
    }

    /**
     * Assert that blade markup and view data render HTML markup.
     *
     * @param string $expectedHtml
     * @param string $viewContent blade markup
     * @param array $viewData
     * @return void
     */
    protected function assertBladeRenders($expectedHtml, $viewContent, $viewData = [])
    {
        $this->assertEquals($expectedHtml, $this->renderBlade($viewContent, $viewData));
    }
}
