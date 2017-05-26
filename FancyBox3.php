<?php

namespace keygenqt\fancyBox3;

class FancyBox3 extends \yii\base\Widget
{
    public $option = [];
    public $jsOption = [];

    public function run()
    {
        BowerAssets::register($this->getView());



//        $this->jsOption = \yii\helpers\Json::encode($this->jsOption);
//        $this->getView()->registerJs("$('#{$this->getId()}').highcharts({$this->jsOption});");
//        return \yii\helpers\Html::tag('div', '', \yii\helpers\ArrayHelper::merge($this->option, [
//            'id' => $this->getId(),
//        ]));
    }
}