<?php
require("../e/class/connect.php");
require("../e/class/db_sql.php");
$link=db_connect();
$empire=new mysqlquery();
$douban_id=(int)$_GET['douban_id'];
if($douban_id)
{
    $rank=$empire->query("select score,rating_people,stars5,stars4,stars3,stars2,stars1 from www_92game_net_ecms_addinfo  where douban_id = $douban_id ");
    $r=$empire->fetch($rank);
    if ($r[score]) {
        $rankData = array(
            'score' => $r[score],
            'rating_people' => $r[rating_people],
            'stars5' => (int)($r[rating_people]*$r[stars5]/100),
            'stars4' => (int)($r[rating_people]*$r[stars4]/100),
            'stars3' => (int)($r[rating_people]*$r[stars3]/100),
            'stars2' => (int)($r[rating_people]*$r[stars2]/100),
            'stars1' => (int)($r[rating_people]*$r[stars1]/100)
        );

    }else {
        $rankData = [];
    }
    $data = array ('msg' => 'success', 'rank' => $rankData);
    header('Content-type: application/json');
    echo json_encode($data);
}
db_close();
$empire=null;

?>