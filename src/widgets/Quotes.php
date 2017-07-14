<?php
/**
 * @link https://github.com/lcidral/yii2-quotes-widget
 */
namespace lcidral\widgets;

use yii\base\InvalidConfigException;
use yii\base\Widget;

class Quotes extends Widget
{
    /**
     * @var array the HTML attributes for the widget container tag.
     */
    public $options = [];

    /**
     * Renders the widget.
     */
    public function run()
    {
        $content = file_get_contents(__DIR__ . '/quotes.json');
        $quotes = json_decode($content);
        $items = count($quotes)-1;
        $index = rand(0, $items);
        $quote = $quotes[$index];

        $colors = [
            'red-card',
            'green-card',
            'blue-card',
            'yellow-card',
            'white-card',
        ];
        $total = count($colors)-1;
        $color = rand(0, $total);

        QuoteAsset::register($this->getView());

        echo $this->render('quote',[
            'quote' => $quote,
            'color' => $colors[$color]
        ]);
    }
}
