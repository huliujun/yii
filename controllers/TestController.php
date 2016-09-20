<?php

namespace app\controllers;

use yii\web\Controller;
use app;

class TestController extends Controller
{

    public function actionIndex()
    {

       //$con = \Yii::$app->my_db->createCommand('select FULL COLUMN from con')->queryAll();var_dump($con);die;
       $data = \Yii::$app->my_db->createCommand('select * from con')->queryAll();
        foreach ($data as $item) {
            if ($item){
                foreach ($item as $k => $v){
                    $title[$k] = $k;
                }
            }
        }


        return $this->render('test',
            [
                'data'=>$data,
                'title'=>$title,
            ]
        );
    }

    public function actionSmarty()
    {
        $smarty = \Yii::$app->smarty;
        $smarty->assign('my','my first smarty');
        $smarty->display('animate.tpl');
    }
}
