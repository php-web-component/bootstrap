<?php namespace PWC\Component\Bootstrap;

class Column extends \PWC\Component\Html\Div
{
    protected $_colIndex = 0;

    protected $_attributes = [
        'class' => [
            'col'
        ]
    ];

    public function col()
    {
        $this->_attributes['class'][] = 'col';
        $this->_colIndex = count($this->_attributes['class']) - 1;
        return $this;
    }

    public function xSmall()
    {
        $this->_attributes['class'][$this->_colIndex] .= '-xs';
        return $this;
    }

    public function small()
    {
        $this->_attributes['class'][$this->_colIndex] .= '-sm';
        return $this;
    }

    public function medium()
    {
        $this->_attributes['class'][$this->_colIndex] .= '-md';
        return $this;
    }

    public function large()
    {
        $this->_attributes['class'][$this->_colIndex] .= '-lg';
        return $this;
    }

    public function size(int $size = 0)
    {
        if ($size > 0 && $size <= 12) {
            $this->_attributes['class'][$this->_colIndex] .= "-{$size}";
        }
        return $this;
    }

    public function render(): string
    {
        $this->_attributes['class'] = array_map(function ($item) {
            return $item == 'col' ? '' : trim($item);
        }, $this->_attributes['class']);

        return parent::render();
    }

    use \PWC\BuilderTrait;
}
