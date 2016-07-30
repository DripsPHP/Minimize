# Minimize

[![Build Status](https://travis-ci.org/Prowect/Minimize.svg)](https://travis-ci.org/Prowect/Minimize)
[![Code Climate](https://codeclimate.com/github/Prowect/MinimizeCompiler/badges/gpa.svg)](https://codeclimate.com/github/Prowect/MinimizeCompiler)
[![Test Coverage](https://codeclimate.com/github/Prowect/MinimizeCompiler/badges/coverage.svg)](https://codeclimate.com/github/Prowect/MinimizeCompiler/coverage)
[![Latest Release](https://img.shields.io/packagist/v/drips/Minimize.svg)](https://packagist.org/packages/drips/minimize)

## Beschreibung

Compiler basierend auf Minifier zum Komprimieren von CSS- und JavaScript-Dateien.

Durch den mitgelieferten Compiler kann ganz leicht CSS- und JavaScript-Code komprimiert werden.

**Beispiel: CSS komprimieren**

```php
<?php

use Drips\Minimize\Compiler;

$minimizedCSS = Compiler::compile($css, Compiler::CSS);
```

**Beispiel: JS komprimieren**

```php
<?php

use Drips\Minimize\Compiler;

$minimizedJS = Compiler::compile($js, Compiler::JS);
```

## Automatische Übersetzung

Zusätzlich wird ein Controller zum Automatischen Übersetzen und Ausliefern von CSS- und JavaScript-Dateien zur Verfügung gestellt. Dieser kann wie folgt verwendet werden.

### CSS-Komprimierung

In deinem `DRIPS` Verzeichnis legst du zunächst ein Verzeichnis `css` an. In diesem befinden sich alle deine CSS-Dateien, die du später gerne komprimiert ausliefern möchtest.
Anschließend musst du den jeweiligen Controller als Route registrieren, dass die Datei automatisch ausgeliefert werden kann.

```php
<?php

$router->add('css', '/css/{file}.css', Drips\Minimize\CssController::class)
```

### JS-Komprimierung

In deinem `DRIPS` Verzeichnis legst du zunächst ein Verzeichnis `js` an. In diesem befinden sich alle deine JavaScript-Dateien, die du später gerne komprimiert ausliefern möchtest.
Anschließend musst du den jeweiligen Controller als Route registrieren, dass die Datei automatisch ausgeliefert werden kann.


```php
<?php

use Drips\Minimize\Compiler;

$router->add('js', '/js/{file}.js', Drips\Minimize\JsController::class)
```
