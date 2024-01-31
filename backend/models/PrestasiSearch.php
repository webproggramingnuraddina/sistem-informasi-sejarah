<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Prestasi;

/**
 * PrestasiSearch represents the model behind the search form of `backend\models\Prestasi`.
 */
class PrestasiSearch extends Prestasi
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_prestasi', 'tahun'], 'integer'],
            [['nama_mhs', 'nama_prestasi', 'jenis_prestasi'], 'safe'],
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
        $query = Prestasi::find();

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
            'id_prestasi' => $this->id_prestasi,
            'tahun' => $this->tahun,
        ]);

        $query->andFilterWhere(['like', 'nama_mhs', $this->nama_mhs])
            ->andFilterWhere(['like', 'nama_prestasi', $this->nama_prestasi])
            ->andFilterWhere(['like', 'jenis_prestasi', $this->jenis_prestasi]);

        return $dataProvider;
    }
}
