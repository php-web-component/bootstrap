<?php namespace PWC\Component;

use PWC\Component;
use PWC\Component\Html\Meta;
use PWC\Component\Html\Script;
use PWC\Component\Html\Style;
use PWC\Component\Html\Title;
use PWC\Config\Asset;

class Bootstrap extends Component
{
    protected $_ID = 'pwc-bootstrap';
    protected ?JQuery $jquery;

    protected function init()
    {
        parent::init();

        Meta::register([
            'charset' => 'utf-8',
        ]);
        Meta::register([
            'httpEquiv' => 'X-UA-Compatible',
            'content' => 'IE=edge'
        ]);
        Meta::register([
            'name' => 'viewport',
            'content' => 'width=device-width, initial-scale=1, shrink-to-fit=no'
        ]);
        Style::register(Asset::get('dir') . 'php-web-component/bootstrap/css/bootstrap.min.css');
        Script::register(Asset::get('dir') . 'php-web-component/bootstrap/js/bootstrap.min.js');
    }

    public function render(): string
    {
        return (string) ($this->jquery ?? JQuery::build(
            Title::build(
                Text::build('Bootstrap')
            )->withDecorators($this->_decorators)->asDecorator()->replace(),

            parent::render(),

            ...$this->_decorators->get(),
        ))->withDecorators($this->_decorators);
    }

    use BuilderTrait;
}
