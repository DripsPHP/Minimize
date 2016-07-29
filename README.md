# Minimize

[![Build Status](https://travis-ci.org/Prowect/Minimize.svg)](https://travis-ci.org/Prowect/Minimize)
[![Code Climate](https://codeclimate.com/github/Prowect/MinimizeCompiler/badges/gpa.svg)](https://codeclimate.com/github/Prowect/MinimizeCompiler)
[![Test Coverage](https://codeclimate.com/github/Prowect/MinimizeCompiler/badges/coverage.svg)](https://codeclimate.com/github/Prowect/MinimizeCompiler/coverage)
[![Latest Release](https://img.shields.io/packagist/v/drips/Minimize.svg)](https://packagist.org/packages/drips/minimize)

## Beschreibung

Compiler basierend auf Minifier zum Komprimieren von CSS- und JavaScript-Dateien.

## Verwendung

Die Datei musss im Verzeichnis ganz außen angelegt werden. Durch das Aufrufen der Seite wird die Datei komprimiert.


```php
<?php

/css/{file}.css ….
/blbla/{file}.abc

css/{file}.css
source_directory/{file}.file_extension
```


### CSS komprimieren

```php
<?php

use Drips\Minimize\Compiler;

$router->add('css', '/css/{file}.css', Drips\Minimize\CssController::class)
```

### JS komprimieren

```php
<?php

use Drips\Minimize\Compiler;

$router->add('js', '/js/{file}.js', Drips\Minimize\JsController::class)
```
