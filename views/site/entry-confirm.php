<?php
/**
 * Created by PhpStorm.
 * User: hulj
 * Date: 2016/6/20
 * Time: 11:14
 */
use yii\helpers\Html;
?>


<p>You have entered the following information:</p>

<ul>
    <li><label>Name</label>: <?= Html::encode($model->name) ?></li>
    <li><label>Email</label>: <?= Html::encode($model->email) ?></li>
</ul>