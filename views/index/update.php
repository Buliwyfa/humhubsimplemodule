<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model humhub\modules\newsletters\models\Breakingnews */

$this->title = 'Update Video: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Elearning', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="breakingnews-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
