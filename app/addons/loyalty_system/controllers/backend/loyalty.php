<?php
    use tygh\Registry;

if(!defined('BOOTSTRAP')) { die('Access denied'); }

if($_SERVER['REQUEST_METHOD'] == 'GET') {
    if ($mode == 'manage') {

        // ir a BD buscar os dados de utilizador
        $user_info = "select user_id, sum(loyalty_points) loyalty_points, firstname, data from cscart_users as P Left Join cscart_loyalty_system as U on U.fk_user_id= P.user_id group by user_id";

        $loyalty_system = db_get_array($user_info);

        foreach ($loyalty_system as $key => $user) {
            $user_transactions = "select * from cscart_loyalty_system where fk_user_id =".$user["user_id"];
            $loyalty_system[$key]["conta_corrente"] = db_get_array($user_transactions);
        }

        //mostrar no template       
        Tygh::$app['view']->assign('items', $loyalty_system);

    } 
    if ($mode == 'update'){
            $id_anterior = $_GET['user_id'];
            $chain = "select * from cscart_users as P Left Join cscart_loyalty_system  as U on U.fk_user_id = P.user_id where user_id ".$id_anterior;
        }
        
} elseif ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if($mode != "manage"){
        throw new ErrorException("Pedido Invalido");
    }  
    $query = "insert into cscart_loyalty_system(fk_user_id, data, loyalty_points) values(".$_POST["user_id"].",NOW(), ".$_POST["loyalty_points"].")";  
    db_query($query);
    return array(CONTROLLER_STATUS_REDIRECT, 'admin.php?dispatch=loyalty.manage');
}