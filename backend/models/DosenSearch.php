<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Dosen;

/**
 * DosenSearch represents the model behind the search form of `backend\models\Dosen`.
 */
class DosenSearch extends Dosen
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_dosen', 'nip', 'kriteria'], 'integer'],
            [['nama', 'tmp_tgl_lahir', 'email', 'pendidikan_sarjana', 'pendidikan_magister', 'pendidikan_doktoral', 'kepakaran', 'mata_kuliah', 'image', 'detail', 'publikasi'], 'safe'],
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
        $query = Dosen::find();

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
            'id_dosen' => $this->id_dosen,
            'nip' => $this->nip,
            'kriteria' => $this->kriteria,
        ]);

        $query->andFilterWhere(['like', 'nama', $this->nama])
            ->andFilterWhere(['like', 'tmp_tgl_lahir', $this->tmp_tgl_lahir])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'pendidikan_sarjana', $this->pendidikan_sarjana])
            ->andFilterWhere(['like', 'pendidikan_magister', $this->pendidikan_magister])
            ->andFilterWhere(['like', 'pendidikan_doktoral', $this->pendidikan_doktoral])
            ->andFilterWhere(['like', 'kepakaran', $this->kepakaran])
            ->andFilterWhere(['like', 'mata_kuliah', $this->mata_kuliah])
            ->andFilterWhere(['like', 'image', $this->image])
            ->andFilterWhere(['like', 'detail', $this->detail])
            ->andFilterWhere(['like', 'publikasi', $this->publikasi]);

        return $dataProvider;
    }
}
