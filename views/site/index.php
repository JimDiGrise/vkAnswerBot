<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\bootstrap\Alert;
use yii\widgets\Pjax;
use yii\web\View;
$this->title = "Бот Вконтакте";
?>
<div class="site-index">
    <div class="container">
        <div class="row">
            <div class="col-lg-offset-4 col-sm-offset-4 col-md-offset-4 col-xs-offset-2 col-md-12 col-sm-12 col-xs-12"> 
                <h1>Vk Answer Bot</h1>
            </div>
            <div class="col-lg-offset-4 col-sm-offset-4 col-md-offset-4 col-xs-offset-2 col-md-12 col-sm-12 col-xs-12"> 
                <i><h4>Простой бот который <br> позволяет найти все записи на стене, <br>содержащие ключевое слово, <br>и написать к ним коментарий.</h4></i>
            </div>
            <div class="col-lg-offset-3 col-md-offset-3 col-sm-offset-3 col-xs-12 col-lg-6 col-md-8 col-sm-8">
                    <?php $form = ActiveForm::begin(['id' => 'bot-form']); ?>
                    
                    <?= $form->field($model, 'userId')->textInput()->label('ID Пользователя') ?>
                    
                    <?= $form->field($model, 'query')->textInput()->label('Ключевое слово') ?>
                    
                    <?= $form->field($model, 'comment')->textarea(['rows' => 6])?>
                    
                    <div class="form-group">
                        <?= Html::submitButton('Отправить', ['class' => 'btn btn-primary', 'name' => 'send-button']) ?>
                    </div>
                    
                    <?php ActiveForm::end(); ?>
                    <b><?php print_r($result) ?></b>
            </div>
        </div>
    </div>
</div>
