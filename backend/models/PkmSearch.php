<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Pkm;

/**
 * PkmSearch represents the model behind the search form of `backend\models\Pkm`.
 */
class PkmSearch extends Pkm
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_pkm', 'tahun'], 'integer'],
            [['judul_pkm', 'nama_ketua', 'kepakaran', 'anggota', 'ang_mhs'], 'safe'],
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
        $query = Pkm::find();

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
            'id_pkm' => $this->id_pkm,
            'tahun' => $this->tahun,
        ]);

        $query->andFilterWhere(['like', 'judul_pkm', $this->judul_pkm])
            ->andFilterWhere(['like', 'nama_ketua', $this->nama_ketua])
            ->andFilterWhere(['like', 'kepakaran', $this->kepakaran])
            ->andFilterWhere(['like', 'anggota', $this->anggota])
            ->andFilterWhere(['like', 'ang_mhs', $this->ang_mhs]);

        return $dataProvider;
    }
}
