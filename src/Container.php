<?php namespace PWC\Component\Bootstrap;

use PWC\Component\BuilderTrait;
use PWC\Component\Html\Div;

class Container extends Div
{
    protected $_ID = 'pwc-bootstrap-container';

    protected $_attributes = [
        'class' => [
            'container'
        ]
    ];

    use BuilderTrait;
}
