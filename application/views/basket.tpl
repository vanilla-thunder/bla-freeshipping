<div style="text-align: center;">
    <p>
    <h2>[{oxmultilang ident="FREE_SHIPPING_OVER" args=$oViewConf->vskfreiab()|cat:' '|cat:$currency->name}]</h2>
    [{math equation="x-y" x=$oViewConf->vskfreiab() y=$oxcmp_basket->getBruttoSum() assign="ordermore" format="%.2f"}]
    [{oxmultilang ident="ORDER_MORE_FOR_FREE_SHIPPING" args=$ordermore|number_format:2:",":' '|cat:$currency->sign }]
    [{oxmultilang ident="YOU_SAVE_SHIPPING_COSTS" args=$oxcmp_basket->getDeliveryCosts()|number_format:2:",":' '|cat:$currency->sign }]
    </p>
</div>