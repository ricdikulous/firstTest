<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Sets */
/* @var $form ActiveForm */
?>
<div class="createprogram">

    <?php $form = ActiveForm::begin();
          $form->enableAjaxValidation = false;
    ?>
    <table>
        <tr>
        <td><?= $form->field($model, 'lift_id_fk') ?></td>
        <td><?= $form->field($model, 'reps') ?></td>
        <td><?= $form->field($model, 'sets') ?></td>
        <td><?= $form->field($model, 'intensity') ?></td>
        <td><?= $form->field($model, 'rest') ?></td>
        <td><?= $form->field($model, 'type') ?></td>
        </tr>
        <tr>
        <td></td>
        <td><?= $form->field($model, 'reps') ?></td>
        <td><?= $form->field($model, 'sets') ?></td>
        <td><?= $form->field($model, 'intensity') ?></td>
        <td><?= $form->field($model, 'rest') ?></td>
        <td></td>
        </tr>
        <tr>
        <td></td>
        <td><?= $form->field($model, 'reps') ?></td>
        <td><?= $form->field($model, 'sets') ?></td>
        <td><?= $form->field($model, 'intensity') ?></td>
        <td><?= $form->field($model, 'rest') ?></td>
        <td></td>
        </tr>
        <tr>
        <td><?= $this->render('_progression', [
                'model' => $model, 'form' => $form
        ]);?></td>
        </tr>
    </table>
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- createProgram -->
