<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Peneltian;

/**
 * PeneltianSearch represents the model behind the search form of `backend\models\Peneltian`.
 */
class PeneltianSearch extends Peneltian
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_penelitian'], 'integer'],
            [['judul_penelitian', 'nama_ketua', 'kepakaran_ketua', 'anggota', 'ang_mhs', 'link_penelitian'], 'safe'],
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
        $query = Peneltian::find();

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
            'id_penelitian' => $this->id_penelitian,
        ]);

        $query->andFilterWhere(['like', 'judul_penelitian', $this->judul_penelitian])
            ->andFilterWhere(['like', 'nama_ketua', $this->nama_ketua])
            ->andFilterWhere(['like', 'kepakaran_ketua', $this->kepakaran_ketua])
            ->andFilterWhere(['like', 'anggota', $this->anggota])
            ->andFilterWhere(['like', 'ang_mhs', $this->ang_mhs])
            ->andFilterWhere(['like', 'link_penelitian', $this->link_penelitian]);

        return $dataProvider;
    }
}
