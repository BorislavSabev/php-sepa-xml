<?php

namespace Digitick\Sepa\Tests\Unit\Util;

use Digitick\Sepa\Util\StringHelper;
use PHPUnit\Framework\TestCase;

/**
 * Unit test for StringHelper
 */
class StringHelperTest extends TestCase
{
    /**
     * Tests german characters' translation
     */
    public function testGermanCharacters(): void
    {
        $string = 'ÄÖÜäöüß';

        $this->assertEquals('AeOeUeaeoeuess', StringHelper::sanitizeString($string));
    }

    /**
     * Tests some special characters' translation
     */
    public function testSpecialCharacters(): void
    {
        $string = "Az09#_<&*:?,-/(+.)' ";

        $this->assertEquals("Az09     :?,-/(+.)' ", StringHelper::sanitizeString($string));
    }
}
