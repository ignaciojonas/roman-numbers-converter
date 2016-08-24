<?php
/**
 * RomanNumbersView File Doc Comment
 *
 * PHP version 7.1
 *
 * @category View
 * @package  Views
 * @author   Ignacio Jonas <ignaciojonas@gmail.com>
 * @license  GNU General Public License version 2 or later; see LICENSE
 * @link     https://github.com/ignaciojonas/roman-numbers-converter/
 */

/**
 * RomanNumbersView Class Doc Comment
 *
 * Roman Nubmers Model to convert the arabic numbers to roman numbers.
 *
 * @category Class
 * @package  Views
 * @author   Ignacio Jonas <ignaciojonas@gmail.com>
 * @license  GNU General Public License version 2 or later; see LICENSE
 * @link     https://github.com/ignaciojonas/roman-numbers-converter/
 */
class RomanNumbersView
{
    private $_smarty;
    private $_title;


    /**
     * Constructor
     *
     * @param string $title the title of the page.
     */
    public function __construct($title)
    {
        $this->_smarty = new Smarty;
        $this->_title  = $title;

    }//end __construct()


    /**
     * Show the template.
     *
     * @param string $romanNumber the roman number to show.
     *
     * @return void
     */
    public function show($romanNumber)
    {
        $this->_smarty->assign('title', $_title);
        $this->_smarty->assign('romanNumber', $romanNumber);
        $this->_smarty->display('romanNumbers.tpl');

    }//end show()


}//end class
