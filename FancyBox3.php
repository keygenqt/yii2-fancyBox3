<?php
/*
 * Copyright 2020 Vitaliy Zarubin
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

namespace keygenqt\fancyBox3;

use yii\base\Widget;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;

class FancyBox3 extends Widget
{
    public $animate = true;
    public $nameBtn = 'Open FancyBox';
    public $src = '';

    public $btnOption = [];
    public $divOption = [];
    public $jsOption = [];

    public function init()
    {
        ob_start();
        ob_implicit_flush(false);
    }

    public function run()
    {
        $content = ob_get_clean();

        BowerAssets::register($this->getView());
        ActiveAssets::register($this->getView());

        $response = '';

        if ($content) {
            $response = Html::a($this->nameBtn, 'javascript:;', ArrayHelper::merge([
                'data-src' => '#' . $this->getId() . '-block',
                'id' => $this->getId()
            ], $this->btnOption));

            $response .= Html::tag('div', $content, ArrayHelper::merge([
                'id' => $this->getId() . '-block',
                'style' => 'display: none;',
                'class' => $this->animate ? 'yii2-fancybox3-dialog' : ''
            ], $this->divOption));
        }
        else if ($this->src) {
            $response = Html::a($this->nameBtn, 'javascript:;', ArrayHelper::merge([
                'data-src' => $this->src,
                'id' => $this->getId()
            ], $this->btnOption));
        }

        $this->jsOption = \yii\helpers\Json::encode($this->jsOption);
        $this->getView()->registerJs("$('#{$this->getId()}').fancybox({$this->jsOption});");

        return $response;
    }

}