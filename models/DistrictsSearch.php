<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Districs;

/**
 * DistrictsSearch represents the model behind the search form of `app\models\Districs`.
 */
class DistrictsSearch extends Districs
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'provine_id', 'is_Active', 'is_Default', 'is_Delete'], 'integer'],
            [['distric_name'], 'safe'],
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
        $query = Districs::find();

        // add conditions that should always apply here
        if ($this->is_Default == 1) {
            $query->andWhere(['is_Default' => 1]); 
        }
        
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
            'provine_id' => $this->provine_id,
            'is_Active' => $this->is_Active,
            'is_Default' => $this->is_Default,
            'is_Delete' => $this->is_Delete,
        ]);

        $query->andFilterWhere(['like', 'distric_name', $this->distric_name]);
        $query->andWhere(['is_Active' => 1]);
        
        return $dataProvider;
    }
}