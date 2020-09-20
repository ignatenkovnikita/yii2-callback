<?php

namespace ignatenkovnikita\callback\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use ignatenkovnikita\callback\models\Callback;

/**
 * CallbackSearch represents the model behind the search form about `common\models\Callback`.
 */
class CallbackSearch extends Callback
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'created_at', 'updated_at', 'created_by', 'updated_by'], 'integer'],
            [['post_data', 'get_data', 'header_data'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
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
        $query = Callback::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'created_by' => $this->created_by,
            'updated_by' => $this->updated_by,
        ]);

        $query->andFilterWhere(['like', 'post_data', $this->post_data])
            ->andFilterWhere(['like', 'get_data', $this->get_data])
            ->andFilterWhere(['like', 'header_data', $this->header_data]);

        return $dataProvider;
    }
}
