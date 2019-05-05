<?php
/**
 * Lib name: Greek Convert
 * 
 * Author: Harrys Revisios
 * 
 * Email: hrevisios@gmail.com
 *
 * Created on:  02-05-2019
 *
 * 
 * 
 * Description:  Change greek character case
 *
 *
 * @package    Greek-convert
 * @author     Harrys Revisios
 * @link       https://github.com/harrysrevis/greek_convert.git
 */
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Call class Greek_convert
 */
class Greek_convert{

    /**
	 * Lowercase letters array
	 *
	 * @var array
	 **/
    protected $lowercase_letters = ['α', 'β', 'γ', 'δ', 'ε', 'ζ', 'η', 'θ', 'ι', 'κ', 'λ', 'μ', 'ν', 'ξ', 'ο', 'π', 'ρ', 'σ', 'τ', 'υ', 'φ', 'χ', 'ψ', 'ω', 'ά', 'έ', 'ή', 'ί', 'ό', 'ύ', 'ώ', 'ϊ', 'ϋ', 'ΐ', 'ΰ', 'ς'];
   
    /**
	 * Upppercase letters array
	 *
	 * @var array
	 **/
    protected $uppercase_letters = ['Α', 'Β', 'Γ', 'Δ', 'Ε', 'Ζ', 'Η', 'Θ', 'Ι', 'Κ', 'Λ', 'Μ', 'Ν', 'Ξ', 'Ο', 'Π', 'Ρ', 'Σ', 'Τ', 'Υ', 'Φ', 'Χ', 'Ψ', 'Ω', 'Ά', 'Έ', 'Ή', 'Ί', 'Ό', 'Ύ', 'Ώ', 'ϊ', 'ϋ', 'ΐ', 'ΰ', 'ς'];

    /**
	 * Convert string to uppercase
	 *
	 **/
    public function to_upper($string){

        $uppercase_string = str_replace($this->lowercase_letters, $this->uppercase_letters, $string);
        return $uppercase_string;
    }

    /**
	 * Convert string to lowercase
	 *
	 **/
    public function to_lower($string){

        $lowercase_string = str_replace($this->uppercase_letters, $this->lowercase_letters, $string);
        return $lowercase_string;
    }

    /**
	 * Capitalize first letter of string
	 *
	 **/
    function to_proper($string, $encoding){

        $length = mb_strlen($string, $encoding);
        $firstChar = mb_substr($string, 0, 1, $encoding);
        $rest = $this->to_lower(mb_substr($string, 1, $length - 1, $encoding));
        $finalstring = mb_strtoupper($firstChar, $encoding) . $rest;
        return $finalstring;
    }

}
