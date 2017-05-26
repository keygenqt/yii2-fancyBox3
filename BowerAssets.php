<?php

namespace keygenqt\fancyBox3;

use \yii\web\AssetBundle;

/**
 * @author KeyGen <keygenqt@gmail.com>
 */
class BowerAssets extends AssetBundle
{
	public $sourcePath = '@bower/fancybox/dist';

	public $css = [
		'jquery.fancybox.css'
	];

	public $js = [
		'jquery.fancybox.js'
	];
}
