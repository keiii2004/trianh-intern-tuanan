<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Communes;

/**
 * CommunesSearch represents the model behind the search form of `app\models\Communes`.
 */
class CommunesSearch extends Communes
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'distric_id', 'is_Active', 'is_Default', 'is_Delete'], 'integer'],
            [['commune_name'], 'safe'],
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
        $query = Communes::find();
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
            'distric_id' => $this->distric_id,
            'is_Active' => $this->is_Active,
            'is_Default' => $this->is_Default,
            'is_Delete' => $this->is_Delete,
        ]);
       
        $query->andFilterWhere(['like', 'commune_name', $this->commune_name]);
        // $query->andWhere(['is_Active' => 1]);
        return $dataProvider;
    }
}