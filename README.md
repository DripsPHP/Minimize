# Minimize

[![Build Status](https://travis-ci.org/Prowect/Minimize.svg)](https://travis-ci.org/Prowect/Minimize)
[![Code Climate](https://codeclimate.com/github/Prowect/MinimizeCompiler/badges/gpa.svg)](https://codeclimate.com/github/Prowect/MinimizeCompiler)
[![Test Coverage](https://codeclimate.com/github/Prowect/MinimizeCompiler/badges/coverage.svg)](https://codeclimate.com/github/Prowect/MinimizeCompiler/coverage)
[![Latest Release](https://img.shields.io/packagist/v/drips/Minimize.svg)](https://packagist.org/packages/drips/minimize)

## Beschreibung

Compiler basierend auf Minifier zum Komprimieren von CSS- und JavaScript-Dateien.

## Verwendung

### CSS komprimieren

```php
<?php

use Drips\Minimize\Compiler;

$minified = Compiler::compile($css_code, Compiler::CSS);
```

### JS komprimieren

```php
<?php

use Drips\Minimize\Compiler;

$minified = Compiler::compile($js_code, Compiler::JS);
```
