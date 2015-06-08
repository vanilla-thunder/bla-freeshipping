[{if $oxcmp_basket->getProductsCount() && $oxcmp_basket->getDeliveryCosts() && $oxcmp_basket->getBruttoSum() > $oViewConf->vskfreistart() && $oxcmp_basket->getBruttoSum() < $oViewConf->vskfreiab()}]
   <div class="panel callout radius">
      <h4>[{oxmultilang ident="FREE_SHIPPING_OVER" args=$oViewConf->vskfreiab()}]</h4>
      [{math equation="x-y" x=$oViewConf->vskfreiab() y=$oxcmp_basket->getBruttoSum() assign="ordermore" format="%.2f"}]
      [{oxmultilang ident="ORDER_MORE_FOR_FREE_SHIPPING" args=$ordermore }]
	  [{oxmultilang ident="YOU_SAVE_SHIPPING_COSTS" args=$oxcmp_basket->getDeliveryCosts() }]
   </div>
[{/if}]

