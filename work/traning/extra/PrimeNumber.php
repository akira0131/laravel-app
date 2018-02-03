<?php
define('LOOP_START_NUMBER', 2);
define('NO_CHECK_NUMBER', 3);

/**
 * isPrimeNumber 
 *  - 素数チェック
 * 
 * @param int $number 
 * @access public
 * @return boolean
 */
function isPrimeNumber($number) {
    if ($number < 0) {
        throw new Exception('minus error.');
    }
    if ($number <= NO_CHECK_NUMBER) {
        return true;
    }
    for ($i = LOOP_START_NUMBER; $i <= $number / 2; $i++) {
        if ($number % $i === 0) {
            return false;
        }
    }
    return true;
}

define('START_FIBONATI_NUMBER', 0);
define('ADD_FIBONATI_NUMBER', 1);

/**
 * getFibonatiNumber 
 *  - フィボナッチ数列値取得
 * 
 * @param int $number 
 * @access public
 * @return int
 */
function getFibonatiNumber($number) {
    if ($number <= 0) {
        throw new Exception('zero or minus error.');
    }
    switch ($number) {
        case 1 :
            return START_FIBONATI_NUMBER;
        case 2 :
            return ADD_FIBONATI_NUMBER;
        default :
            return getFibonatiNumber($number - 2) + getFibonatiNumber($number - 1);
    }
}
