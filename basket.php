<?php
session_start();
if (isset($_GET['id'], $_GET['mode']) && !empty($_GET['id']) && $_GET['mode']=='add'){
    $check = false;
    if (!isset($_SESSION['basket'])){
        $_SESSION['basket'] = array();
    }

    if (count($_SESSION['basket'])>0){
        for ($i = 0; $i < count($_SESSION['basket']); $i++){
            if ($_SESSION['basket'][$i]['id'] == $_GET['id']){
                $_SESSION['basket'][$i]['count']++;
                $check = true;
                break;
            }
        }
    }

    if (!$check){
        require_once 'admin/param.php';
        $query = "SELECT assort.id AS id, model, price, colichestvo, name_photo AS photo FROM assort INNER JOIN photo ON photo.id_tovar=".$_GET['id']." WHERE main=1 AND assort.id=".$_GET['id'];
        $res = mysqli_query($dbc, $query) or die('Query Basced Error');
        $next = mysqli_fetch_array($res);

        $_SESSION['basket'][] = array('id'=>$next['id'], 'model'=>$next['model'], 'price'=>$next['price'], 'photo'=>$next['photo'], 'count'=>1);
    }
}

if (isset($_GET['id'], $_GET['mode']) && !empty($_GET['id']) && $_GET['mode']=='del'){
    if (count($_SESSION['basket'])>0){
        for ($i = 0; $i < count($_SESSION['basket']); $i++){
            if ($_SESSION['basket'][$i]['id'] == $_GET['id']){
                unset($_SESSION['basket'][$i]);
            }
        }
    }

    $item = array();
    foreach ($_SESSION['basket'] as $tmp){
        if (!empty($tmp)){
            $item[] = $tmp;
        }
    }

    unset($_SESSION['basket']);
    $_SESSION['basket'] = array();
    $_SESSION['basket'] = $item;
    unset($item);
}

if (isset($_GET['mode']) && $_GET['mode']=='clear'){
    if (!empty($_SESSION['basket'])){
        unset($_SESSION['basket']);
        $_SESSION['basket'] = array();
    }
}

header('location:shop-sidebar.php');

?>