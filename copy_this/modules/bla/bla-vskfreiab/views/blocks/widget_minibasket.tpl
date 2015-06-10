[{$smarty.block.parent}]
[{if $oxcmp_basket->getProductsCount() && $oxcmp_basket->getDeliveryCosts() && $oxcmp_basket->getBruttoSum() > $oViewConf->vskfreistart() && $oxcmp_basket->getBruttoSum() < $oViewConf->vskfreiab()}]
<div style="padding: 5px; color: green;">
   [{math equation="x-y" x=$oViewConf->vskfreiab() y=$oxcmp_basket->getBruttoSum() assign="ordermore" format="%.2f"}]
   [{oxmultilang ident="ORDER_MORE_FOR_FREE_SHIPPING" args=$ordermore|number_format:2:",":' ' }]
</div>
[{/if}]
