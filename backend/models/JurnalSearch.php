<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Jurnal;

/**
 * JurnalSearch represents the model behind the search form of `backend\models\Jurnal`.
 */
class JurnalSearch extends Jurnal
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_jurnal'], 'integer'],
            [['foto', 'judul_jurnal', 'deskripsi', 'jurnal_link'], 'safe'],
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
        $query = Jurnal::find();

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
            'id_jurnal' => $this->id_jurnal,
            'foto' => $this->foto,
        ]);

        $query->andFilterWhere(['like', 'judul_jurnal', $this->judul_jurnal])
            ->andFilterWhere(['like', 'deskripsi', $this->deskripsi])
            ->andFilterWhere(['like', 'jurnal_link', $this->jurnal_link]);

        return $dataProvider;
    }
}
