<div class="bananas">
    <ul>
    {foreach $items as $value}
        <li>
            <button onclick="$('#frm{$value.user_id}points').toggle();">
                points   
            </button>
            <form id="frm{$value.user_id}points" method="POST" action="admin.php?dispatch=loyalty.manage" class="hidden">
                <input type="hidden" name="user_id" value="{$value.user_id}"/>
                <label>
                    points
                </label>
                <input type="number" name="loyalty_points"/>
                <input type="submit" value="OK"/> 
            </form>


            <a ref="admin.php?dispatch=loyalty.update&id_user={$value.user_id}">{$value.firstname} {$value.lastname} > {$value.loyalty_points}</a>
        </li>
        {if count($value.conta_corrente) > 0 }
            <ul> 
                {foreach $value.conta_corrente as $points}
                <li> 
                    {$points.data} - {$points.loyalty_points}
                </li>
                {/foreach}
            </ul>
        {/if}
    {/foreach}
    </ul>
</div>
