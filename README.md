[FancyBox3](https://keygenqt.com/work/yii2-fancyBox3)
===================

![GitHub](https://img.shields.io/github/license/keygenqt/yii2-fancyBox3)
![Packagist Downloads](https://img.shields.io/packagist/dt/keygenqt/yii2-fancyBox3)

Extension yii for library [FancyBox3](http://fancyapps.com/fancybox/3/)

## Installation

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either add

```
"require": {
    "keygenqt/yii2-fancybox3": "@dev"
}
```

of your `composer.json` file.

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

<div>
    <h2>Are you sure?</h2>
    <p>Save this model?</p>

    <div class="btn" onclick="$.fancybox.close();"> Cancel</div>
    <div class="btn" onclick="$(this).closest('form').submit()">Save</div>
</div>

<?php FancyBox3::end() ?>
```