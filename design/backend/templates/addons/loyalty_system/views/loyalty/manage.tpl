<div class="bananas">
    <ul>
    {foreach $items as $value}
        <li><a ref="admin.php?dispatch=loyalty.update&id_user={$value.user_id}">{$value.firstname} {$value.lastname} > {$value.loyalty_points}</a></li>
    {/foreach}
    </ul>
</div>