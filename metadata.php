<?php

/**
 *	bla-freeshipping
 *  Copyright (C) 2017  bestlife AG
 *  info:  oxid@bestlife.ag
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
$aModule          = [
    'id'          => 'bla-freeshipping',
    'title'       => '<strong style="color:#95b900;font-size:125%;">best</strong><strong style="color:#c4ca77;font-size:125%;">life</strong> <strong>VSK-frei ab ...</strong>',
    'description' => 'displays configurable "free shipping for orders over ...€" notice in basket and minibasket',
    'thumbnail'   => 'application/bestlife.png',
    'version'     => '0.1.1 ( 2017-8-24 )',
    'author'      => 'Marat Bedoev, bestlife AG',
    'email'       => 'oxid@bestlife.ag',
    'url'         => 'https://github.com/vanilla-thunder/bla-freeshipping',
    'extend'      => [ 'oxviewconfig' => 'bla/bla-freeshipping/application/extend/oxviewconfigblafreeshipping' ],
    'files'       => [],
    'templates'   => [],
    'blocks'      => [
        [
            'template' => 'widget/minibasket/minibasket.tpl',
            'block'    => 'widget_minibasket_total',
            'file'     => '/application/views/blocks/widget_minibasket_total.tpl'
        ],
        [
            'template' => 'page/checkout/basket.tpl',
            'block'    => 'basket_btn_next_bottom',
            'file'     => '/application/views/blocks/basket_btn_next_bottom.tpl'
        ],
    ],
    'settings'    => [
        [
            'group'    => 'blaFreeshippingMain',
            'name'     => 'iBlaFreeShippingOver',
            'type'     => 'str',
            'value'    => '80',
            'position' => 0
        ],
        [
            'group'    => 'blaFreeshippingMain',
            'name'     => 'iBlaFreeShippingTreshold',
            'type'     => 'str',
            'value'    => '50',
            'position' => 1
        ]
    ]
];
