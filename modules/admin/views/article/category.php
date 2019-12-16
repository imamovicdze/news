<?php

use app\models\Category;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $article app\models\Article */
/* @var $form yii\widgets\ActiveForm */
/* @var $selectedCategory Category */
/* @var $categories Category[] */

$this->title = 'Set Category';
$this->params['breadcrumbs'][] = ['label' => 'Articles', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $article->title, 'url' => ['view', 'id' => $article->id]];
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="article-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= Html::dropDownList('category', $selectedCategory, $categories, ['class' => 'form-control']) ?>

    <br>
    <div class="form-group">
        <?= Html::submitButton('Submit', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
