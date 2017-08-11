<?php
require("../e/class/connect.php");
require("../e/class/db_sql.php");
$link=db_connect();
$empire=new mysqlquery();
$douban_id=(int)$_GET['douban_id'];
if($douban_id)
{
    $newbook=$empire->query("select * from www_92game_net_ecms_torrent  where (douban_id = $douban_id) ORDER by episode,substr(size,-2) desc,(LEFT(size,length(size)-2)+0.0) asc");
    $mv_720 = array();
    $mv_1080 = array();
    $mv_blueray = array();
    $mv_3d = array();
    $mv_other = array();
    $none = true;
    $zynum = 0;
    $tui = false;
    while($r=$empire->fetch($newbook)) {
        $flag = true;
        $none = false;
        $zynum++;
        if(stripos($r[picture], '720P') !== false) {
            // 720p
            array_push($mv_720, $r);
            $flag = false;
            if ($r[isgood] > 0) {
                $tui_720 = $r;
                $tui = true;
            }

        }
        if(stripos($r[picture], '1080P') !== false) {
            // 1080p
            array_push($mv_1080, $r);
            $flag = false;
            if ($r[isgood] > 0){
                $tui_1080 = $r;
                $tui = true;
            }
        }
        if(stripos($r[picture], 'BlueRay') !== false || stripos($r[picture], '蓝光') !== false || stripos($r[picture], 'Remux') !== false) {
            // 蓝光
            array_push($mv_blueray, $r);
            $flag = false;
            if ($r[isgood] > 0) {
                $tui_blueray = $r;
                $tui = true;
            }
        }
        if(stripos($r[picture], '3D') !== false) {
            // 3d
            array_push($mv_3d, $r);
            $flag = false;
            if ($r[isgood] > 0) {
                $tui_3d = $r;
                $tui = true;
            }
        }
        if($flag) {
            // 其他
            array_push($mv_other, $r);
        }
    }

    $torrents = array();

    if (count($mv_720) > 0) {
        $t = array();
        foreach ($mv_720 as $mv) {
                        $torrent = array(
                            'episode' => $mv[episode],
                            'title' => $mv[title],
                            'size' => $mv[size],
                            'picture' => $mv[picture],
                            'magnet' => $mv[magnet]
                        );
                        array_push($t,$torrent);

    }
    $j = array('720p' => $t);
    array_push($torrents,$j);
    }


    if (count($mv_1080) > 0) {
        $t = array();
        foreach ($mv_1080 as $mv) {
            $torrent = array(
                'episode' => $mv[episode],
                'title' => $mv[title],
                'size' => $mv[size],
                'picture' => $mv[picture],
                'magnet' => $mv[magnet]
            );
            array_push($t,$torrent);

        }
        $j = array('1080p' => $t);
        array_push($torrents,$j);
    }

    if (count($mv_blueray) > 0) {
        $t = array();
        foreach ($mv_blueray as $mv) {
            $torrent = array(
                'episode' => $mv[episode],
                'title' => $mv[title],
                'size' => $mv[size],
                'picture' => $mv[picture],
                'magnet' => $mv[magnet]
            );
            array_push($t,$torrent);

        }
        $j = array('blu-ray' => $t);
        array_push($torrents,$j);
    }

    if (count($mv_3d) > 0) {
        $t = array();
        foreach ($mv_3d as $mv) {
            $torrent = array(
                'episode' => $mv[episode],
                'title' => $mv[title],
                'size' => $mv[size],
                'picture' => $mv[picture],
                'magnet' => $mv[magnet]
            );
            array_push($t,$torrent);

        }
        $j = array('3d' => $t);
        array_push($torrents,$j);
    }

    if (count($mv_other) > 0) {
        $t = array();
        foreach ($mv_other as $mv) {
            $torrent = array(
                'episode' => $mv[episode],
                'title' => $mv[title],
                'size' => $mv[size],
                'picture' => $mv[picture],
                'magnet' => $mv[magnet]
            );
            array_push($t,$torrent);

        }
        $j = array('other' => $t);
        array_push($torrents,$j);
    }

    $data = array ('msg' => 'success', 'count' => $zynum, 'torrents' => $torrents);
    header('Content-type: application/json');
    echo json_encode($data);
}
db_close();
$empire=null;

?>