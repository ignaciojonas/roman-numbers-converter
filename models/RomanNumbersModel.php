<?php
/**
 * RomanNumbersModel File Doc Comment
 *
 * PHP version 7.1
 *
 * @category Model
 * @package  Models
 * @author   Ignacio Jonas <ignaciojonas@gmail.com>
 * @license  GNU General Public License version 2 or later; see LICENSE
 * @link     https://github.com/ignaciojonas/roman-numbers-converter/
 */

/**
 * RomanNumbersModel Class Doc Comment
 *
 * Roman Nubmers Model to convert the arabic numbers to roman numbers.
 *
 * @category Class
 * @package  Models
 * @author   Ignacio Jonas <ignaciojonas@gmail.com>
 * @license  GNU General Public License version 2 or later; see LICENSE
 * @link     https://github.com/ignaciojonas/roman-numbers-converter/
 */
class RomanNumbersModel
{


    /**
     * Retrive the Roman Number from an Arabic One.
     *
     * @param integer $arabic the number to convert.
     *
     * @return String
     */
    function getRomanNumber($arabic)
    {
        $return = "";
        if ($arabic == 9) {
            return "IXI";
        }

        if ((($arabic % 50) >= 0) && ($arabic >= 50)) {
             $return = $return.'L';
             $arabic = ($arabic - 50);
        }

        while ((($arabic % 10) >= 0) && ($arabic >= 10)) {
            $return = $return.'X';
            $arabic = ($arabic - 10);
        }

        if ((($arabic % 9) >= 0) && ($arabic >= 9)) {
            $return = $return.'IX';
            $arabic = ($arabic - 9);
        }

        if ((($arabic % 5) >= 0) && ($arabic >= 5)) {
            $return = $return.'V';
            $arabic = ($arabic - 5);
        }

        if ((($arabic % 4) >= 0) && ($arabic >= 4)) {
            $return = $return.'IV';
            $arabic = ($arabic - 4);
        }

        while ($arabic > 0) {
            $return = $return."I";
            $arabic--;
        }

        return $return;

    }//end getRomanNumber()


}//end class
