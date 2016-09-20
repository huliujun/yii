<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\EntryForm;
use app\models\UploadForm;
use yii\web\UploadedFile;

class SiteController extends Controller
{
    public  function actionEntry() {
        $model = new EntryForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
           // var_dump($model->validate());
            return $this->render('entry-confirm', ['model'=>$model]);
        }else {
            //print($model->validate());
            return $this->render('entry', ['model'=>$model]);
        }
    }
    public function actionUpload()
    {
        $model = new UploadForm();

        if (Yii::$app->request->isPost) {
            $model->imageFiles = UploadedFile::getInstances($model, 'imageFiles');
            if ($model->upload()) {
                //
                print('文件上传成功');
                return;
            }
        }

        return $this->render('upload', ['model' => $model]);
    }

    public  function actionSay($message = 'Hello world!'){
        

        return $this->render('say', ['message'=>$message]);
    }


    public function actionIndex()
    {
        return $this->render('index');
    }


}
