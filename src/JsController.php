<?php

namespace Drips\MinimizeCompiler;

use Drips\MVC\CompileController;

class JsController extends CompileController
{
    protected $source_directory = "js";
    protected $file_extension = "js";
    protected $response_type = "application/javascript";

    public function compile($content)
    {
        return MinimizeCompiler::compile($content, MinimizeCompiler::JS);
    }
}
