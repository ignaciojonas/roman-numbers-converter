<?php
class RomanNumbersController
{
    private $_model;
    private $_view;

    public function __construct()
    {
        $this->_model = new RomanNumbersModel();
        $this->_view = new RomanNumbersView("Roman Number Converter");
    }

    public function showPage($number = null)
    {
        $this->_view->show($number);
    }

    public function convertNumber()
    {
        $romanNumber=null;
        if (isset($_POST['arabicNumber']) && $_POST['arabicNumber']!='') {
            $arabicNumber = $_POST['arabicNumber'];
            $romanNumber=$this->_model->getRomanNumber($arabicNumber);
        }
        $this->showPage($romanNumber);
    }

}
