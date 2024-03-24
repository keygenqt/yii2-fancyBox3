FancyBox3
===================

![Packagist Downloads](https://img.shields.io/packagist/dt/keygenqt/yii2-fancyBox3?label=Packagist%20Downloads)

Extension yii2 allowing to use library [FancyBox3](http://fancyapps.com/fancybox/3/).

<p>
    <a href="https://old.keygenqt.com/work/yii2-fancyBox3">
        <img src="data/demo_button.gif" width="136px"/>
    </a>
</p>

#### Installation

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

```
"require": {
    "keygenqt/yii2-fancybox3": "@dev"
}
```

#### Usage

Html example

```php
use keygenqt\fancyBox3\FancyBox3;

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

Youtube example

```php
use keygenqt\fancyBox3\FancyBox3;

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

#### License

```
Copyright 2017-2024 Vitaliy Zarubin

Licensed under the Apache License, Version 2.0 (the "License");
you may not use this file except in compliance with the License.
You may obtain a copy of the License at

    http://www.apache.org/licenses/LICENSE-2.0

Unless required by applicable law or agreed to in writing, software
distributed under the License is distributed on an "AS IS" BASIS,
WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
See the License for the specific language governing permissions and
limitations under the License.
```
