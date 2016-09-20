<?php
use yii\helpers\Html;

?>


<div >
    
    
 <table>

<?php foreach ($data as $key=>$val) {?>
     <tr>
<?php foreach ($title as $k=>$v) {?>
    <td>
        <?= $val[$k]  ?>

    </td>

 <?php }?>
     </tr>
 <?php }?>
    </table>

 <?php

 echo '<table>';
 foreach ($data as $key=>$val) {
     echo '<tr>';
     foreach ($title as $k=>$v) {
         echo '<td>'.$val[$k].'</td>';

     }
     echo '</tr>';
 }
 echo '</table>';




 ?>



</div>
