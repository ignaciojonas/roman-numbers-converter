<?php
class RomanNumbersView {
  private $smarty;
  private $title;

  public function __construct($title){
    $this->smarty = new Smarty;
    $this->title = $title;
  }

  public function show($romanNumber){
    $this->smarty->assign('title',$title);
    $this->smarty->assign('romanNumber',$romanNumber);
    $this->smarty->display('romanNumbers.tpl');
  }

}


?>
