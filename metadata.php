<?php

/**
 *	[bla] VSK-frei ab ..€ MOdule for OXID eShop
 *  Hinweis über den fehlenden Restbetrag für den kostenlosen Versand
 *  Copyright (C) 2015  bestlife AG
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
        )
    )
);
