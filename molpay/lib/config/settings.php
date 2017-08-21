<?php
/**
 * Массив, описывающий настройки плагина в формате
 * array(
 * '%setting_key%'=>array(
 * 'value'=>'',//значение по умолчанию
 * 'title'=>'Setting title',
 * 'description'=>'Setting description',
 * 'control_type'=>waHtmlControl::INPUT, //тип элемента ввода значений настроек
 * ),
 * )
 * Подробнее TODO ссылка на описание настроек плагинов.
 */

return array(
    'currency' => array(
        'value'            => array('MYR' => 1),
        'title'            => /*_wp*/('Transaction currency'),
        'description'      => /*_wp*/('Must be acceptable at merchant settings'),
        'control_type'     => waHtmlControl::GROUPBOX,
        'options_callback' => array('molpayPayment', 'settingCurrencySelect'),
    ),
    'merchantID' => array(
        'title'            => /*_wp*/('Merchant ID'),
        'description'      => /*_wp*/('Merchant ID'),
        'control_type'     => waHtmlControl::INPUT
    ),
    
    
//    'buyerName' => array(
//        'title'            => /*_wp*/('Buyer Full Name'),
//        'description'      => /*_wp*/('Buyer Full Name'),
//        'control_type'     => waHtmlControl::INPUT
//    ),
//    
//    'buyerMobile' => array(
//        'title'            => /*_wp*/('Buyer Mobile Number'),
//        'description'      => /*_wp*/('Buyer Mobile Number'),
//        'control_type'     => waHtmlControl::INPUT
//    ),
                          
    
    'verifyKey' => array(
        'title'            => /*_wp*/('Verify Key'),
        'description'      => /*_wp*/('Verify Key'),
        'control_type'     => waHtmlControl::INPUT
    ),
);
