<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Berita;

/**
 * BeritaSearch represents the model behind the search form of `backend\models\Berita`.
 */
class BeritaSearch extends Berita
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_berita', 'created_at', 'created_by'], 'integer'],
            [['tittle', 'isi_berita', 'tittle_eng', 'isi_berita_eng', 'image'], 'safe'],
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
        $query = Berita::find();

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
            'id_berita' => $this->id_berita,
            'created_at' => $this->created_at,
            'created_by' => $this->created_by,
        ]);

        $query->andFilterWhere(['like', 'tittle', $this->tittle])
            ->andFilterWhere(['like', 'isi_berita', $this->isi_berita])
            ->andFilterWhere(['like', 'image', $this->image]);

        return $dataProvider;
    }
}
