<?php

/**
 * Sekumpulan Script Helper PHP yang biasa di gunakan
 * 
 * Author :Muhamad Reza Abdul Rohim <reza.wikrama3@gmail.com>
 * 
 */


function formatMoney($money)

{
  /**
     * Convert number ke format Uang 
     * Penggunaan : formatMoney(1000)
     * output : 1.000
  */

	if(is_numeric($money))
	{
		$changeFormat = number_format($money);
  	$replace = str_replace(",", ".", $changeFormat);
  	$fixMoney = $replace;
  }else{
  	$fixMoney = $money.' not number';
	}
  
  return $fixMoney;
}

?>
