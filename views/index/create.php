<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model humhub\modules\newsletters\models\Breakingnews */

$this->title = 'Create new video';
$this->params['breadcrumbs'][] = ['label' => 'Elearning', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="breakingnews-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
