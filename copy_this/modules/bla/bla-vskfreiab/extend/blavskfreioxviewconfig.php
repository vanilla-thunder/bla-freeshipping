<?php

/**
 *	bestlife AG - "VSK-frei ab ... EUR" Hinweis für OXID eShop
 *  Copyright (C) 2016  bestlife AG
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

class blaVSKfreiOxViewConfig extends blaVSKfreiOxViewConfig_parent
{
    public function vskfreiab()
    {
        return intval(oxRegistry::getConfig()->getConfigParam( "iBlaVSKfreiAb" ));
    }
    public function vskfreistart()
    {
        return intval(oxRegistry::getConfig()->getConfigParam( "iBlaVSKfreiAbStart" ));
    }
    public function vskfreivsk()
    {
        return oxRegistry::getConfig()->getConfigParam( "sBlaVSKfreiVersandkosten" );
    }
}

