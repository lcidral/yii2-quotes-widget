<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace lcidral\widgets;

use yii\web\AssetBundle;
use yii\web\View;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class QuoteAsset extends AssetBundle
{
    public $sourcePath = '@vendor/lcidral/yii2-quotes-widget/src/assets';

    public $css = [
        'css/dist/quotes.min.css',
    ];

    public $js = [];
}
