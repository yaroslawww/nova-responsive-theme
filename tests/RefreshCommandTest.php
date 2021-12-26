<?php

namespace NovaResponsiveTheme\Tests;

class RefreshCommandTest extends TestCase
{

    /** @test */
    public function publish_files()
    {
        $filePath = public_path('vendor/nova/responsive-theme/css/theme.css');

        clearstatcache();
        if (file_exists($filePath)) {
            unlink($filePath);
        }
        $this->assertFalse(file_exists($filePath));

        $this->artisan('nova:responsive-theme:refresh')
             ->assertExitCode(0);

        clearstatcache();
        $this->assertTrue(file_exists($filePath));
    }
}
