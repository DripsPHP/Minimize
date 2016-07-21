<?php

namespace Drips\Minimize;

use Drips\MVC\CompileController;

class CssController extends CompileController
{
    protected $source_directory = "css";
    protected $file_extension = "css";
    protected $response_type = "text/css";

    public function compile($content)
    {
        return Compiler::compile($content, Compiler::CSS);
    }
}
