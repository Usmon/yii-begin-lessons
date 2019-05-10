<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\widgets\ListView;
/* @var $this \yii\web\View */
/* @var $dataProvider bool|\yii\data\ActiveDataProvider */

$this->title = 'Qidiruv sahifasi';
?>
<div class="jumbotron">
    <h2><?= Html::encode($this->title) ?></h2>
</div>

<div class="our-services">
    <div class="container">
        <div class="row">
            <?php ActiveForm::begin(['method' => 'GET']); ?>
            <div class="col-md-10">
                <?php echo Html::input('text', 'key', '', [
                    'class' => 'form-control',
                    'placeholder' => 'Qidirish uchun kalit yozing...'
                ]); ?>
            </div>
            <div class="col-md-2">
                <?php echo Html::button('Qidiruv', [
                    'class' => 'btn btn-danger',
                    'type' => 'submit'
                ]) ?>
            </div>
            <?php ActiveForm::end(); ?>
        </div>
        <div class="col-md-12">
            <?php
                if ($dataProvider) {
                    echo ListView::widget([
                        'dataProvider' => $dataProvider,
                        'itemView' => '_search-item'
                    ]);
                }
                else {
                    echo '<h3>Qidirsh uchun kalit yozing!</h3>';
                }
            ?>
        </div>
    </div>
</div>
