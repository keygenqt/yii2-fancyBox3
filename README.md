yii2-fancyBox3
===================

Wrap on a wonderful library [FancyBox](https://github.com/fancyapps/fancybox).

## Installation

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either add

```
"require": {
    "keygenqt/yii2-fancybox3": "@dev"
}
```

of your `composer.json` file.

## Latest Release

The latest version of the module is v0.5.0 `BETA`.

## Usage

```php
use keygenqt\fancyBox3\FancyBox3;
```

```php
<?php FancyBox3::begin([

    'nameBtn' => 'Open FancyBox3',

    'btnOption' => [
        'class' => 'btn'
    ],
    'jsOption' => [
        'focus' => false,
    ]
]) ?>

    <div>
        <h2>Hello!</h2>
        <p>This is animated content! Cool, right?</p>
    </div>

<?php FancyBox3::end() ?>
```

```php
<?= FancyBox3::widget([

    'nameBtn' => 'Open YouTube',
    'src' => 'https://www.youtube.com/watch?v=SRnzisLnnUo',

    'btnOption' => [
        'class' => 'btn'
    ],
    'jsOption' => [
        'focus' => false,
    ]
]) ?>
```

```php
<?php FancyBox3::begin([

    'nameBtn' => 'Submit',

    'btnOption' => [
        'class' => 'btn'
    ],
    'jsOption' => [
        'focus' => false,
        'closeTpl' => false,
    ]
]) ?>
```

## License

**yii2-highcharts** is released under the BSD 3-Clause License. See the bundled `LICENSE.md` for details.


