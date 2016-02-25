[{if $oxcmp_basket->getProductsCount() && $oxcmp_basket->getDeliveryCosts() && $oxcmp_basket->getBruttoSum() > $oViewConf->vskfreistart() && $oxcmp_basket->getBruttoSum() < $oViewConf->vskfreiab()}]
    [{strip}][{include file=$oViewConf->getModulePath('bla-vskfreiab','/application/views/basket.tpl')}][{/strip}]
[{/if}]

