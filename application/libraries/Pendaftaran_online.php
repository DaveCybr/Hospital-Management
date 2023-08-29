<?php
  /**
   *
   */
  class Pendaftaran_online
  {

    public function fixnorm($norm,$digit=8)
    {
      $lnorm = strlen($norm);
      $sisa = $digit - $lnorm;
      for ($i=0; $i < $sisa; $i++) {
        $norm = "0".$norm;
      }
      return $norm;
    }

    public function generate($digit=8)
    {
      $set = '123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
      $code = substr(str_shuffle($set), 0, $digit);
      return $code;
    }

  }

 ?>
