<?php

namespace humhub\modules\elearning\controllers;

use Yii;
use humhub\modules\content\components\ContentContainerController;
use humhub\modules\elearning\models\Videos;
use humhub\modules\elearning\VideosSearch;
use humhub\components\Controller;
use yii\web\NotFoundHttpException;
use humhub\modules\user\models\Profile;
use humhub\modules\user\models\User;



use humhub\modules\file\models\File;
use PhpParser\Comment;


/**
 * ElearningController implements the CRUD actions for Breakingnews model.
 */
class IndexController extends Controller
{
      
    
    public function getAccessRules()
    {
        return [
            ['admin']
        ];
    }
    
    public $subLayout = "@elearning/views/index/_layout";
    
    /**
     * Configuration Action for Super Admins
     */
    public function actionIndex()
    {
        
        
        //$hello  = Yii::$app->user->get(['guid' =>'7f66260c-2135-4ab3-8a6c-f889678ad4d4']);
        
        //$hello  = Yii::$app->user->guid;
        // $hello  = Profile::find()->where(["nom"=>"hazmani"])->one();
     //   $hello = User::find()->where(["guid"=>"13a0d552-7158-41e1-9a9a-44f3f7315276"])->one();
       // var_dump($hello);
        
        
        
        
        // clear the cache of all loaded tables
        
        //$videos = Videos::find()->all();
        
      //  var_dump($videos);
        //return $this->render('index',['videos'=>$videos]);
        
        //Yii::app()->db->schema->getTable('videos', true);
        
 
        
        $searchModel = new VideosSearch();
               
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
           
        //var_dump($dataProvider->getCount());
        
        // send all the data to the view
        
        //$com = Comment::find()->contentContainer($this->contentContainer)->where(['id' => $id])->one();
       // $page = Videos::find()->contentContainer($this->contentContainer)->where(['id' => $id])->one();
      
        return $this->render('index', [
            
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        
            
        ]);
    
        
     // return $this->render('index');
    
    
    }


    ////////////////////////////////////
    /// STOP ON BASIC MODULE STRUCUT ///
    ////////////////////////////////////
    
    
 
    /**
     * Displays a single video model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        
        
        
        
        return $this->render('view', [
            'model' => $this->findModel($id),
            
            
        ]);
    }

    /**
     * Creates a new Video model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new VideosSearch();
        
        

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
                                   
            
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Video model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
                
            
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing video model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Breakingnews model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Videos::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
