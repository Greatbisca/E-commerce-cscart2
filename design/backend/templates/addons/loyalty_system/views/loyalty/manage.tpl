<style>
    table {
      font-family: arial, sans-serif;
      border-collapse: collapse;
      width: 100%;
    }
    
    th {
      text-align: center;
      border: 5px solid #dddddd;
      text-align: left;
      padding: 8px;
    }
    button{
        background-color: rgb(108, 8, 201); 
        border: none;
        color: white;
        padding: 15px 32px;
        text-align: center;
        text-decoration: none;
        font-size: 16px;
        cursor: pointer;
    }
</style>
<html>
    <table>
        
        {foreach $items as $value}
        <tr>
            <th>
                <a ref="admin.php?dispatch=loyalty.update&id_user={$value.user_id}">{$value.firstname} --> {$value.loyalty_points}</a>
            </th>
            <th>
            {if count($value.conta_corrente) > 0 }
                <ul> 
                    {foreach $value.conta_corrente as $points}
                    <br> 
                        {$points.data}: {$points.loyalty_points}
                    </br>
                    {/foreach}
                </ul>
            {/if}
            </th>
            <th>
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
            </th>
        </tr>
        {/foreach}
        
    </table>
</html>
