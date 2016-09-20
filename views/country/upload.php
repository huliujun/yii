<?php
/**
 * Created by PhpStorm.
 * User: hulj
 * Date: 2016/6/22
 * Time: 10:11
 */
$this->title='upload';
use yii\helpers\Html;

use yii\db;
?>



<script>
    function myFunction()
    {

        <?php
        $dbaa = Yii::$app->db;
        //



        ?>

        //document.getElementById("myPar").innerHTML=;
        alert(<?php echo '2323'?>);
    }
</script>

<div class="country-upload">

    <h1><?= Html::encode($this->title) ?></h1>



    <table class="table table-bordered">

        <?php   foreach($message1 as $cell){ ?>
            <tr>

                <td><?php echo $cell[0]; ?></td>
                <td><?php echo $cell[1]; ?></td>
                <td><?php echo $cell[2]; ?></td>

            </tr>
            <?php  } ?>

    </table>

    <p id="myPar">I am a paragraph.</p>


    <div class="form-group">

        <button onclick="myFunction()" class="btn btn-success" type="submit">Create</button>
    </div>



</div>


