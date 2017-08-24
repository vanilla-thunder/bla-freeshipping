[{$smarty.block.parent}]
[{if $oxcmp_basket->getProductsCount() && $oxcmp_basket->getDeliveryCosts() && $oxcmp_basket->getBruttoSum() > $oViewConf->freeShippingTreshold() && $oxcmp_basket->getBruttoSum() < $oViewConf->freeShippingOver()}]
    [{strip}]
        </tr>
        <tr>
        <td colspan="2">
            <p class="totals">
                [{math equation="x-y" x=$oViewConf->freeShippingOver() y=$oxcmp_basket->getBruttoSum() assign="ordermore" format="%.2f"}]
                <a href="[{ oxgetseourl ident='oxdeliveryinfo' type='oxcontent' }]" rel="nofollow">
                    <b>[{oxmultilang ident="ORDER_MORE_FOR_FREE_SHIPPING" args=$ordermore|number_format:2:",":' '|cat:$currency->sign }]</b>
                </a>
            </p>
        </td>
    [{/strip}]
[{/if}]