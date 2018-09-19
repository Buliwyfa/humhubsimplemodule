<?php

namespace humhub\modules\elearning\models;

use Yii;
use humhub\modules\content\components\ContentActiveRecord;
use yii\behaviors\TimestampBehavior;
//use yii\behaviors\BlameableBehavior;
//use humhub\modules\search\interfaces\Searchable;
use yii\db\Expression;

/**
 * This is the model class for table "videos".
 *
 * @property int $id
 * @property string $link
 * @property string $title
 * @property string $description
 * @property string $tags
 * @property string $updated
 * @property int $updated_guid
 * @property string $created
 * @property int $created_guid
 */

 
class Videos extends ContentActiveRecord 
{
   
    
  //  public $autoAddToWall = true;
   //WE NEED THIS LINE IF YOU WANT TO ADD COMMENTS IN YOUR MODULE
    public $wallEntryClass = "humhub\modules\\elearning\widgets\WallEntry";
  
    
    
    
    public function behaviors()
    {
        
        // This is to insert automatique TIMESTAMP to the appropriate field in DB
        return [
            // TIMESTAMP ON CREATE OR UPDATE
            [
                'class' => TimestampBehavior::className(),
                'createdAtAttribute' => 'created',
                'updatedAtAttribute' => 'updated',
                'value' => new Expression('NOW()'),
               
            ],
            // PUT THE USER ID for who create or update 
            
            [
            'class' => TimestampBehavior::className(),
            'createdAtAttribute' => 'created_guid',
            'updatedAtAttribute' => 'updated_guid',
            'value' => Yii::$app->user->guid,
            ],
        ];
    }
    
    protected $moduleId = 'Elearning';
    protected $canMove = false;
    
    
    public static function tableName()
    {
        return 'videos';
    }

    /**
     * {@inheritdoc}
     */
    
    
    public function getContentName()
    {
        return Yii::t('ElearningModule.base', "Elearning");
    }
    
    /**
     * @inheritdoc
     */
    public function getContentDescription()
    {
        return $this->getTitle();
    }
    
    
    public function rules()
    {
        return [
            [['link', 'title', 'description', 'tags', 'created', 'created_guid'], 'required'],
            
            // Escape form FORM this entry should be automatic with behavios in the same Model 
            //[['updated', 'created'], 'safe'],
            //[['updated_guid', 'created_guid'], 'integer'],
            //
            
            [['link'], 'string', 'max' => 100],
            [['title'], 'string', 'max' => 60],
            [['description', 'tags'], 'string', 'max' => 150],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'Id Video',
            'link' => 'Link',
            'title' => 'Title',
            'description' => 'Description',
            'tags' => 'Tags',
            'updated' => 'Updated',
            'updated_guid' => 'Updated By',
            'created' => 'Created',
            'created_guid' => 'Created By',
        ];
    }
}
