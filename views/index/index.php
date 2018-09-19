<?php

use yii\helpers\Html;
use yii\grid\GridView;

//use humhub\modules\elearning\widgets\PanelRow;
//use humhub\widgets\Button;
use yii\helpers\Url;
//foreach($videos as $video) {
  //  
    //    echo  $video->link."<br>";
    
    
    //}
    

// This line is used if you want to add any css or js scripts in separate folder that should be nammed ASSET 
//\humhub\modules\elearning\\assets\DevtoolsAsset::register($this);

/* @var $this yii\web\View */
/* @var $searchModel humhub\modules\newsletters\BreakingnewsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */


//  foreach($videos as $video) {

//    echo  $video->link."<br>";


//}

$this->title = 'Elearning';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="Elearning-index">

    <h1><?= Html::encode($this->title) ?></h1>
    
    <!--  This line is used to display the search engine -->
    
    <?php  echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Video', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    

    

    
      <?= 
    
    
    GridView::widget([
        
        'dataProvider' => $dataProvider,
        // IF you want to display search engine by column use the following line 
        //'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            
                        
            //'id_video',
            'link',
            'title',
            'description',
            'tags',
            'updated',
            'updated_guid',
            'created',
            'created_guid',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]);
    
    ?>
    
    
   
</div>