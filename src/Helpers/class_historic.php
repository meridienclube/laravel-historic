<?php
if (! function_exists('class_historic')) {

    function class_historic($obj, $class_basename = 'HistoricCreated', $nameSpaceHistoric = 'ConfrariaWeb\\Historic\\Historics\\'){
        $get_class_basename = class_basename(get_class($obj));
        return $nameSpaceHistoric . $get_class_basename . $class_basename . 'Historic';
     }

}
