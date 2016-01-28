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


function timeComment($ptime)
{
  /**
   * Bikin Waktu Mundur Kayak Facebook bray, 
   * Cara Penggunaan : timeComment("2001-01-01 : 12:00:00")
   */

      $estimate_time = time() - $ptime;

      if( $estimate_time < 1 )
      {
          return 'less than 1 second ago';
      }

      $condition = array( 
                  12 * 30 * 24 * 60 * 60  =>  'year',
                  30 * 24 * 60 * 60       =>  'month',
                  24 * 60 * 60            =>  'day',
                  60 * 60                 =>  'hour',
                  60                      =>  'minute',
                  1                       =>  'second'
      );

      foreach( $condition as $secs => $str )
      {
          $d = $estimate_time / $secs;

          if( $d >= 1 )
          {
              $r = round( $d );
              return 'about ' . $r . ' ' . $str . ( $r > 1 ? 's' : '' ) . ' ago';
          }
      }
}
