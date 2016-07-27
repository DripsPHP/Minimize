<?php

namespace tests;

use Drips\Minimize\Compiler;
use PHPUnit_Framework_TestCase;

class MinimizeCompilerTest extends PHPUnit_Framework_TestCase
{
    public function testCSSMinifier()
    {
        $css_code = "body { background-color: red; }";
        $css_minified = "body{background-color:red}";
        $this->assertEquals(Compiler::compile($css_code, Compiler::CSS), $css_minified);
    }

    public function testJSMinifier()
    {
        $js_code = "var test = 123; alert(test * 24);";
        $js_minified = "var test=123;alert(test*24)";
        $this->assertEquals(Compiler::compile($js_code, Compiler::JS), $js_minified);
    }
}
