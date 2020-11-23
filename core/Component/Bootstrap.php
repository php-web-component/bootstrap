<?php namespace PWC\Component;

use PWC\AssetsManager\Config as AssetConfig;
use PWC\BuilderTrait;
use PWC\Component;
use PWC\Component\Html\Meta;
use PWC\Component\Html\Script;
use PWC\Component\Html\Style;

class Bootstrap extends Component
{
    protected $_ID = 'pwc-bootstrap';
    protected $title = 'Bootstrap';
    protected $html = [];
    protected $head = [];
    protected $body = [];
    protected $jquery = [];

    public function render(): string
    {
        return (string) JQuery::build(
            Meta::register([
                'charset' => 'utf-8',
            ]),
            Meta::register([
                'httpEquiv' => 'X-UA-Compatible',
                'content' => 'IE=edge'
            ]),
            Meta::register([
                'name' => 'viewport',
                'content' => 'width=device-width, initial-scale=1, shrink-to-fit=no'
            ]),
            Style::register(AssetConfig::get('dir') . 'php-web-component/bootstrap/css/bootstrap.min.css'),
            parent::render(),
            Script::register(AssetConfig::get('dir') . 'php-web-component/bootstrap/js/bootstrap.min.js'),
        )->config([
            'title' => $this->title,
            'html' => $this->html,
            'head' => $this->head,
            'body' => $this->body,
        ])->decorate($this->jquery);
    }

    use BuilderTrait;
}
