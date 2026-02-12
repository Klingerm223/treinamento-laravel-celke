<?php

namespace Tests\Feature;

use Tests\TestCase;

class LocaleTest extends TestCase
{
    /**
     * Test that the application locale is set to Portuguese (Brazil).
     */
    public function test_application_locale_is_portuguese(): void
    {
        $locale = config('app.locale');
        
        $this->assertEquals('pt_BR', $locale);
    }

    /**
     * Test that the application fallback locale is set to Portuguese (Brazil).
     */
    public function test_application_fallback_locale_is_portuguese(): void
    {
        $fallbackLocale = config('app.fallback_locale');
        
        $this->assertEquals('pt_BR', $fallbackLocale);
    }

    /**
     * Test that the application timezone is set to São Paulo.
     */
    public function test_application_timezone_is_sao_paulo(): void
    {
        $timezone = config('app.timezone');
        
        $this->assertEquals('America/Sao_Paulo', $timezone);
    }

    /**
     * Test that Portuguese language files exist.
     */
    public function test_portuguese_language_files_exist(): void
    {
        $langPath = lang_path('pt_BR');
        
        $this->assertDirectoryExists($langPath);
        $this->assertFileExists($langPath . '/auth.php');
        $this->assertFileExists($langPath . '/pagination.php');
        $this->assertFileExists($langPath . '/passwords.php');
        $this->assertFileExists($langPath . '/validation.php');
    }
}
