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
        QuoteAsset::register($this->getView());

        $color = $this->getColor();

        echo $this->render('quote',[
            'quote' => $this->getQuote($color)
        ]);
    }

    public function getRand($subject) {
        $total = count($subject)-1;
        $index = rand(0, $total);
        return $index;
    }

    public function getColor() {
        $colors = [
            'red-card',
            'green-card',
            'blue-card',
            'yellow-card',
            'white-card',
        ];
        $colorIndex = $this->getRand($colors);
        $color = $colors[$colorIndex];

        return $color;
    }

    public function getQuote($color = 'white-card') {
        $content = file_get_contents(__DIR__ . '/quotes.json');
        $quotes = json_decode($content);

        $quote = $this->getRand($quotes);
        $quote->color = $color;

        return $quote;
    }
}
