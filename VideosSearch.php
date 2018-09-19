<?php

namespace humhub\modules\elearning;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use humhub\modules\elearning\models\Videos;

/**
 * VideosSearch represents the model behind the search form of `humhub\modules\elearning\models\Videos`.
 */
class VideosSearch extends Videos
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['link', 'title', 'description', 'tags', 'updated', 'created', 'updated_guid', 'created_guid'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Videos::find();
        
        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        
        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'updated' => $this->updated,
            'updated_by' => $this->updated_guid,
            'created' => $this->created,
            'created_by' => $this->created_guid,
      
        ]);

        $query->andFilterWhere(['like', 'link', $this->link])
            ->andFilterWhere(['like', 'title', $this->title])
            ->andFilterWhere(['like', 'description', $this->description])
            ->andFilterWhere(['like', 'tags', $this->tags]);
        
            
         
            
            return $dataProvider;
            
            
            
    }
}
