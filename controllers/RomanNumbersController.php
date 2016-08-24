<?php
/**
 * RomanNumbersController File Doc Comment
 *
 * PHP version 7.1
 *
 * @category Controller
 * @package  Controllers
 * @author   Ignacio Jonas <ignaciojonas@gmail.com>
 * @license  GNU General Public License version 2 or later; see LICENSE
 * @link     https://github.com/ignaciojonas/roman-numbers-converter/
 */

/**
 * RomanNumbersController Class Doc Comment
 *
 * Roman Nubmers Controllers to manage the conversion.
 *
 * @category Class
 * @package  Controllers
 * @author   Ignacio Jonas <ignaciojonas@gmail.com>
 * @license  GNU General Public License version 2 or later; see LICENSE
 * @link     https://github.com/ignaciojonas/roman-numbers-converter/
 */
class RomanNumbersController
{
    private $_model;
    private $_view;


    /**
     * Constructor.
     */
    public function __construct()
    {
        $this->_model = new RomanNumbersModel();
        $this->_view  = new RomanNumbersView("Roman Number Converter");

    }//end __construct()


    /**
     * Show Page
     *
     * @param string $number the roman number to show.
     *
     * @return void
     */
    public function showPage($number = null)
    {
        $this->_view->show($number);

    }//end showPage()


     /**
      * Convert the arabic number to roman.
      *
      * @return void
      */
    public function convertNumber()
    {
        $romanNumber = null;
        if (isset($_POST['arabicNumber']) && $_POST['arabicNumber'] != '') {
            $arabicNumber = $_POST['arabicNumber'];
            $romanNumber  = $this->_model->getRomanNumber($arabicNumber);
        }

        $this->showPage($romanNumber);

    }//end convertNumber()


}//end class
