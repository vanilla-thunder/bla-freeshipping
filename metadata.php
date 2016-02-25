<?php

/**
 *	###_COMPANY_### - ###_MODULE_###
 *  Copyright (C) ###_YEAR_###  ###_COMPANY_###
 *  info:  ###_EMAIL_###
 *
 *  This program is free software: you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation, either version 3 of the License, or
 *  (at your option) any later version.
 *
 *  This program is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  You should have received a copy of the GNU General Public License
 *  along with this program.  If not, see <http://www.gnu.org/licenses/>.
 **/

$sMetadataVersion = '1.1';
$aModule          = array(
    'id'          => 'bla-vskfreiab',
    'title'       => '<strong style="color:#95b900;font-size:125%;">best</strong><strong style="color:#c4ca77;font-size:125%;">life</strong> <strong>VSK-frei ab ...</strong>',
    'description' => 'blendet dezente Hinweise für den Shopbesucher ein, dass der Versand ab einem bestimmten Wert des Warenkorbs kostenlos ist.',
    'thumbnail'   => 'bestlife.png',
    'version'     => '1.0.0 (2016-02-25)',
    'author'      => 'Marat Bedoev, bestlife AG',
    'email'       => 'oxid@bestlife.ag',
    'url'         => 'http://www.bestlife.ag',
    'extend'      => array(
        'oxviewconfig' => 'bla/bla-vskfreiab/extend/blavskfreioxviewconfig'
    ),
    'files'       => array(),
    'templates'   => array(),
    'blocks'      => array(
        array(
            'template' => 'widget/minibasket/minibasket.tpl',
            'block'    => 'widget_minibasket_total',
            'file'     => '/application/views/blocks/widget_minibasket.tpl'
        ),
        array(
            'template' => 'page/checkout/basket.tpl',
            'block'    => 'checkout_basket_next_step_top',
            'file'     => '/application/views/blocks/checkout_basket_next_step_top.tpl'
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
        )
    )
);
