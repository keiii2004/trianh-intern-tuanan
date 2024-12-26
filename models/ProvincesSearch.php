<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Provines;

/**
 * ProvincesSearch represents the model behind the search form of `app\models\Provines`.
 */
class ProvincesSearch extends Provines
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'is_Active', 'is_Default', 'is_Delete'], 'integer'],
            [['provine_name'], 'safe'],
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
        $query = Provines::find();

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
        // if (empty($this->provine_name)) {
        //     $query->andWhere(['is_Default' => 1]);
        // }
        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'is_Active' => $this->is_Active,
            'is_Default' => $this->is_Default,
            'is_Delete' => $this->is_Delete,
        ]);

        $query->andFilterWhere(['like', 'provine_name', $this->provine_name]);
        $query->andWhere(['is_Active' => 1]);
        return $dataProvider;
    }
}