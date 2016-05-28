# MinimizeCompiler

[![Build Status](https://travis-ci.org/Prowect/MinimizeCompiler.svg)](https://travis-ci.org/Prowect/MinimizeCompiler)
[![Code Climate](https://codeclimate.com/github/Prowect/MinimizeCompiler/badges/gpa.svg)](https://codeclimate.com/github/Prowect/MinimizeCompiler)
[![Test Coverage](https://codeclimate.com/github/Prowect/MinimizeCompiler/badges/coverage.svg)](https://codeclimate.com/github/Prowect/MinimizeCompiler/coverage)
[![Latest Release](https://img.shields.io/packagist/v/drips/MinimizeCompiler.svg)](https://packagist.org/packages/drips/minimizecompiler)

## Beschreibung

Compiler basierend auf Minifier zum Komprimieren von CSS- und JavaScript-Dateien.

## Verwendung

### CSS

```php
<?php

use Drips\MinimizeCompiler\MinimizeCompiler;

$css = file_get_contents('path/to/style.css');
echo MinimizeCompiler::compile($css, MinimizeCompiler::CSS);
```

### JS

```php
<?php

use Drips\MinimizeCompiler\MinimizeCompiler;

$js = file_get_contents('path/to/app.js');
echo MinimizeCompiler::compile($js, MinimizeCompiler::JS);
```
