<?php

/**
 * ###LICENCE###
 **/

$sMetadataVersion = '1.1';
$aModule          = array(
    'id'          => 'bla-vskfreiab',
    'title'       => '<strong style="color:#95b900;font-size:125%;">best</strong><strong style="color:#c4ca77;font-size:125%;">life</strong> <strong>VSK-frei ab ...</strong>',
    'description' => 'blendet dezente Hinweise für den Shopbesucher ein, dass der Versand ab einem bestimmten Wert des Warenkorbs kostenlos ist.',
    'thumbnail'   => 'bestlife.png',
    'version'     => '0.9.0 (2015-06-02)',
    'author'      => 'Marat Bedoev, bestlife AG',
    'email'       => 'oxid@bestlife.ag',
    'url'         => 'http://www.bestlife.ag',
    'extend'      => array(
        'oxviewconfig' => 'bla/bla-vskfreiab/core/blavskfreioxviewconfig'
    ),
    'files'       => array(),
    'templates'   => array(),
    'blocks'      => array(
        array(
            'template' => 'widget/minibasket/minibasket.tpl',
            'block'    => 'widget_minibasket',
            'file'     => '/application/views/blocks/widget_minibasket.tpl'
        ),
        array(
            'template' => 'page/checkout/basket.tpl',
            'block'    => 'basket_vskfrei',
            'file'     => '/application/views/blocks/basket_vskfrei.tpl'
        ),
    ),
    'settings'    => array(
        array(
            'group'    => 'vskfreiMain',
            'name'     => 'iBlaVSKfreiAb',
            'type'     => 'str',
            'value'    => '80',
            'position' => 0
        ),
        array(
            'group'    => 'vskfreiMain',
            'name'     => 'iBlaVSKfreiAbStart',
            'type'     => 'str',
            'value'    => '50',
            'position' => 1
        ),
        array(
            'group'    => 'vskfreiMain',
            'name'     => 'sBlaVSKfreiVersandkosten',
            'type'     => 'str',
            'value'    => '4,95',
            'position' => 2
        )
    )
);
