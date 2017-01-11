<?php
 
namespace app\models;

use Yii;
use yii\db\ActiveRecord;
use yii\db\Expression;
use yii\data\ActiveDataProvider;

class CountriesSearch extends Countries
{
    public function rules()
    {
        // only fields in rules() are searchable
        return [
            [['id'], 'integer'],
            [['country_code', 'country_name', 'population'], 'safe'],
        ];
    }

    public function search($params)
    {
        $query = Countries::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        // load the search form data and validate
        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        // adjust the query by adding the filters
        $query->andFilterWhere(['id' => $this->id]);
        $query->andFilterWhere(['like', 'country_code', $this->country_code])
            ->andFilterWhere(['like', 'country_name', $this->country_name])
            ->andFilterWhere(['like', 'population', $this->population]);

        return $dataProvider;
    }
}