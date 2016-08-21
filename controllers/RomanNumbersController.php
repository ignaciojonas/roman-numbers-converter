<?php
class RomanNumbersController
{
    private $model;
    private $view;

    public function __construct()
    {
        $this->model = new RomanNumbersModel();
        $this->view = new RomanNumbersView("Roman Number Converter");
    }

    public function showPage($number = null)
    {
        $this->view->show($number);
    }

    public function convertNumber()
    {
        $romanNumber=null;
        if (isset($_POST['arabicNumber']) && $_POST['arabicNumber']!='') {
            $arabicNumber = $_POST['arabicNumber'];
            $romanNumber=$this->model->getRomanNumber($arabicNumber);
        }
        $this->showPage($romanNumber);
    }

}


