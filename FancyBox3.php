<?php

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