<?php namespace PWC\Component\Bootstrap;

use PWC\BuilderTrait;
use PWC\Component\Html\Div;

class Row extends Div
{
    protected $_ID = 'pwc-bootstrap-row';

    protected $_attributes = [
        'class' => [
            'row'
        ]
    ];

    use BuilderTrait;
}
