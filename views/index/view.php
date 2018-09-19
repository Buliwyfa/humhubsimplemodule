<?php

use humhub\modules\comment\widgets\CommentLink;
use humhub\modules\comment\widgets\Comments;
use humhub\modules\like\widgets\LikeLink;
use humhub\widgets\MarkdownView;
use yii\helpers\Html;
use yii\widgets\DetailView;


//use humhub\widgets\MarkdownView;

use humhub\modules\content\widgets\WallEntryAddons;


/* @var $this yii\web\View */
/* @var $model humhub\modules\newsletters\models\Breakingnews */

$this->title = $model->title;

$this->params['breadcrumbs'][] = ['label' => 'Elearning', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="breakingnews-view">


		


    <h1><?= Html::encode($this->title)    ?></h1>
		
    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

		

	

    <?= Html::tag('h3', Html::encode($model->title), ['class'=>'text-center']); ?>
    
    <?php echo ' <center><video id="video" width="640" controls>
                              <source src="'.$model->link.'" type="video/mp4">
                            <source src="'.$model->link.'" type="video/mp4">
 
                            </video><br>
<progress min="0" max="640" value="0"></progress>

 </center><br>

<div id="status" class="incomplete">
<span>Play status: </span>
<span class="status complete">COMPLETE</span>
<span class="status incomplete">INCOMPLETE</span>
<br />
</div>
<div>
<span id="played">0</span> seconds out of 
<span id="duration"></span> seconds. (only updates when the video pauses)
</div>


'; ?>
    
    <?= Html::tag('p', Html::encode($model->description), ['class'=>'text-justify']); ?>
    
    


   <!--  <?php /* DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'link',
            'title',
            'description',
            'tags',
            'updated',
            'updated_guid',
            'created',
            'created_guid',
            
        ],
    ])  */ ?>
 -->

       
       <?= WallEntryAddons::widget(['object' => $model]); ?>
    
</div>
