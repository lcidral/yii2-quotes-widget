<?php
/**
 * @link https://github.com/lcidral/yii2-quotes-widget
 */
namespace lcidral;

use yii\base\InvalidConfigException;
use yii\base\Widget;

class Quotes extends Widget
{
    /**
     * @var array the HTML attributes for the widget container tag.
     */
    public $options = [];

    public function init()
    {
        parent::init();
    }

    /**
     * Renders the widget.
     */
    public function run()
    {
        $content = file_get_contents('quotes.json');
        $quotes = json_decode($content);
        $items = count($quotes);
        $index = rand(0, $items);
        $quote = $quotes[$index];

        return $this->render('quote',[
            'quote' => $quote
        ]);
    }
}