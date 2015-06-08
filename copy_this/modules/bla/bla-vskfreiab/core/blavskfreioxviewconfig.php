<?php

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

