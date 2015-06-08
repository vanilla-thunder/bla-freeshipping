[{$smarty.block.parent}]
[{if $oxcmp_basket->getProductsCount() && $oxcmp_basket->getDeliveryCosts() && $oxcmp_basket->getBruttoSum() > $oViewConf->vskfreistart() && $oxcmp_basket->getBruttoSum() < $oViewConf->vskfreiab()}]
<div class="panel callout" style="padding: 5px;">
   [{math equation="x-y" x=$oViewConf->vskfreiab() y=$oxcmp_basket->getBruttoSum() assign="ordermore" format="%.2f"}]
   [{oxmultilang ident="ORDER_MORE_FOR_FREE_SHIPPING" args=$ordermore}]
</div>
[{/if}]
