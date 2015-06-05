<?php
/**
 * @link https://github.com/MadAnd/yii2-clockpicker
 * @copyright Copyright (c) 2015 Andriy Kmit' <dev@madand.net>
 * @license http://opensource.org/licenses/BSD-3-Clause
 */

namespace madand\clockpicker;

use yii\web\AssetBundle;

class ClockPickerAsset extends AssetBundle
{
    public $sourcePath = '@vendor/bower/clockpicker/dist';
    public $css = [
        'bootstrap-clockpicker.min.css',
    ];
    public $js = [
        'bootstrap-clockpicker.min.js',
    ];
    public $depends = [
        'yii\web\JqueryAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
