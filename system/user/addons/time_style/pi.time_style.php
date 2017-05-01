<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class time_style
{

   public $return_data  = "";

   public function __construct()
   {
      $return = "";
      $am = array('am', 'AM', 'a.m.', 'A.M.');
      $pm = array('pm', 'PM', 'p.m.', 'P.M.');

      $string = ee()->TMPL->tagdata;

      $string = str_replace($am, ' a.m.', $string);

      $string = str_replace($pm, ' p.m.', $string);

      $return = $string;


      $this->return_data = $return;

   }

   /**
    * Plugin Usage
    */

   // This function describes how the plugin is used.
   //  Make sure and use output buffering

   public static function usage()
   {
      ob_start(); 
?>

Replaces every occurance of am, a.m., AM, A.M. with a.m. with a space in front.

Does the same with pm.

Tag is {exp:time_style parse="inward"}{/exp:time_style}

MUST USE parse="inward".

<?php
      $buffer         = ob_get_contents();

      ob_end_clean(); 

      return $buffer;
   }
   // END

}


/* End of file pi.time_style.php */
/* Location: ./system/user/time_style/pi.time_style.php */
