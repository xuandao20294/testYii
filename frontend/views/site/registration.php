<?php
use yii\bootstrap\ActiveForm;
use yii\bootstrap\Html;

?>
<div class="row">
    <div class="col-rg-5">

        <?php
        $form = ActiveForm::begin(['id' => 'registration-form',
            'enableAjaxValidation' => true]);
        ?>
        <?=$form->field($model,'username')?>
        <?=$form->field($model,'password')->passwordInput()?>
        <?=$form->field($model,'email')->input('email')?>
        <?=$form->field($model,'photos[]')->fileInput(['multiple'=>'multiple'])?>
        <?=$form->field($model, 'subscription[]')->checkboxList(['a'=>'Item A', 'b'=>'Item B', 'c'=>'Item C'])?>
        <div class="form-group">
            <?= Html::submitButton('Submit',['class'=>'btn btn-primary','name'=>'registration-button'])?>

        </div>
        <?php ActiveForm::end()?>
    </div>

</div>