<?php

use app\models\Tag;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $article app\models\Article */
/* @var $form yii\widgets\ActiveForm */
/* @var $selectedTags Tag */
/* @var $tags Tag[] */

$this->title = 'Set Tags';
$this->params['breadcrumbs'][] = ['label' => 'Articles', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $article->title, 'url' => ['view', 'id' => $article->id]];
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="article-form">

    <h5>If you want more tags, press CTRL and select</h5>

    <?php $form = ActiveForm::begin(); ?>

    <?= Html::dropDownList('tags', $selectedTags, $tags, ['class' => 'form-control', 'multiple' => true]) ?>

    <br>
    <div class="form-group">
        <?= Html::submitButton('Submit', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
