<?php

Class Virus
{

public $api = "https://api.apify.com/v2/key-value-stores/qAEsnylzdjhCCyZeS/records/LATEST?disableRedirect=true";

public function vsichni()
{

    $data = file_get_contents($this->api);
    $data_to_array = json_decode($data); //prevedeni do php z javascriptu
    $infikovani = 0;
    foreach ($data_to_array->data as $vsechny_dny) {
        foreach ($vsechny_dny as $kazdy_den) {
            $infikovani++;       
         }
    }
    return $infikovani;
}
public function pohlavi_infikovaneho()
{
    $data = file_get_contents($this->api);
    $data_to_array = json_decode($data);

    $prepinac = true;

    $pohlavi_infikovaneho = 0;
    foreach ($data_to_array->data as $vsechny_dny) {
        foreach ($vsechny_dny as $kazdy_den) {
           if($kazdy_den[1] == "muž" && $prepinac == true){
               $pohlavi_infikovaneho++;
           }else if($kazdy_den[1] == "žena" && $prepinac == false){
            $pohlavi_infikovaneho++;

           }
         }
    }
    if($prepinac == true){
        return $pohlavi_infikovaneho . " mužů";
    }elseif($prepinac == false){
        return $pohlavi_infikovaneho . " žen";
    }
    
    
}
  public function prumerny_vek()
  {
    $data = file_get_contents($this->api);
    $data_to_array = json_decode($data);

    $prumerny_vek = array();
    foreach ($data_to_array->data as $vsechny_dny) {
        foreach ($vsechny_dny as $kazdy_den) {
            $prumerny_vek[] .=  $kazdy_den[0] . ", ";
        }

     }
     return round(array_sum($prumerny_vek) / count($prumerny_vek));
  }
}
?>