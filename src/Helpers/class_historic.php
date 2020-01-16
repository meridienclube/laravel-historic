<?php
if (! function_exists('class_historic')) {

    /**
     * @param $obj
     * @param string $class_basename 'HistoricCreated'
     * @param string $nameSpaceHistoric 'ConfrariaWeb\\Historic\\Historics\\'
     * @return string
     */
    function class_historic($obj, $class_basename = NULL, $nameSpaceHistoric = NULL){
        $get_class_basename = class_basename(get_class($obj));
        return $nameSpaceHistoric . $get_class_basename . $class_basename . 'Historic';
     }

}
