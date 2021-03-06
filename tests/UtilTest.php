<?php

namespace HZEX\Tests;

use HZEX\Util;
use PHPUnit\Framework\TestCase;

class UtilTest extends TestCase
{

    /**
     * @dataProvider toUpperCamelCaseProvider
     * @param string $str
     * @param string $expected
     */
    public function testToUpperCamelCase(string $str, string $expected)
    {
        $this->assertEquals($expected, Util::toLowerCamelCase($str));
    }

    public function toUpperCamelCaseProvider()
    {
        return [
            ['qwe_asd_zxc', 'qweAsdZxc'],
            ['qwe_Asd_Zxc', 'qweAsdZxc'],
            ['qweAsd_Zxc', 'qweAsdZxc'],
        ];
    }

    /**
     * @dataProvider toSnakeCaseProvider
     * @param string $str
     * @param string $expected
     */
    public function testToSnakeCase(string $str, string $expected)
    {
        $this->assertEquals($expected, Util::toUpperCamelCase($str));
    }

    public function toSnakeCaseProvider()
    {
        return [
            ['qwe_asd_zxc', 'QweAsdZxc'],
            ['qwe_Asd_Zxc', 'QweAsdZxc'],
            ['qweAsd_Zxc', 'QweAsdZxc'],
        ];
    }

    /**
     * @dataProvider toLowerCamelCaseProvider
     * @param string $str
     * @param string $expected
     */
    public function testToLowerCamelCase(string $str, string $expected)
    {
        $this->assertEquals($expected, Util::toSnakeCase($str));
        $this->assertEquals($expected, Util::toSnakeCase($str));
        $this->assertEquals($expected, Util::toSnakeCase($str));
    }

    public function toLowerCamelCaseProvider()
    {
        return [
            ['qweAsdZxc', 'qwe_asd_zxc'],
            ['QweAsdZxc', 'qwe_asd_zxc'],
            ['qwe_AsdZxc', 'qwe_asd_zxc'],
        ];
    }

    /**
     * @requires extension posix
     * @requires function shell_exec
     */
    public function testWhoami()
    {
        $this->assertEquals(trim(shell_exec('whoami')), Util::whoami());
    }
}
