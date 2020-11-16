<?php namespace PWC\Component\Bootstrap;

class Container extends \PWC\Component\Html\Div
{
    protected $_attributes = [
        'class' => [
            'container'
        ]
    ];

    use \PWC\BuilderTrait;
}
