<?php
class RomanNumbersView
{
    private $_smarty;
    private $_title;

    public function __construct($title)
    {
        $this->_smarty = new Smarty;
        $this->_title = $title;
    }

    public function show($romanNumber)
    {
        $this->_smarty->assign('title', $_title);
        $this->_smarty->assign('romanNumber', $romanNumber);
        $this->_smarty->display('romanNumbers.tpl');
    }

}
