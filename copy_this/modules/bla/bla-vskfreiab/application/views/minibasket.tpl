<hr/>
<p class="totals">
    [{math equation="x-y" x=$oViewConf->vskfreiab() y=$oxcmp_basket->getBruttoSum() assign="ordermore" format="%.2f"}]
    <a href="[{ oxgetseourl ident='oxdeliveryinfo' type='oxcontent' }]" rel="nofollow" style="color:#F77704;">
        <b>[{oxmultilang ident="ORDER_MORE_FOR_FREE_SHIPPING" args=$ordermore|number_format:2:",":' '|cat:$currency->sign }]</b>
    </a>
</p>