<?php

namespace app\controllers;

use yii\web\Controller;
use yii\data\Pagination;
use app\models\Countries;

class CountryController extends Controller
{
    public function actionIndex()
    {
        $query = Countries::find();

        $pagination = new Pagination([
            'defaultPageSize' => 5,
            'totalCount' => $query->count(),
        ]);

        $countries = $query->orderBy('country_name')
            ->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();

        return $this->render('index', [
            'countries' => $countries,
            'pagination' => $pagination,
        ]);
    }
}