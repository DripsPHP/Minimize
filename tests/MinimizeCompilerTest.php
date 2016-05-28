<?php

namespace tests;

use PHPUnit_Framework_TestCase;
use Drips\MinimizeCompiler\MinimizeCompiler;

class MinimizeCompilerTest extends PHPUnit_Framework_TestCase
{
    public function testCSSMinifier()
    {
        $css_code = "body { background-color: red; }";
        $css_minified = "body{background-color:red}";
        $this->assertEquals(MinimizeCompiler::compile($css_code, MinimizeCompiler::CSS), $css_minified);
    }

    public function testJSMinifier()
    {
        $js_code = "var test = 123; alert(test * 24);";
        $js_minified = "var test=123;alert(test*24)";
        $this->assertEquals(MinimizeCompiler::compile($js_code, MinimizeCompiler::JS), $js_minified);
    }
}
