<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\grid\GridView;
use app\models\CountriesSearch;

$this->title = 'Countries';
$this->params['breadcrumbs'][] = $this->title;

$searchModel = new CountriesSearch();
$dataProvider = $searchModel->search(Yii::$app->request->get());
$dataProvider->pagination->pageSize=50;

?>

<div class="site-countries">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>



        <?= GridView::widget([
            'id' => 'countryGrid',
            'dataProvider' => $dataProvider,
            'filterModel' => $searchModel,
            'tableOptions' => ['id'=>'countryTable'],
            'columns'=>[
                'id',
               'country_name',
                'country_code',
                'population'
            ],
        ]);
        ?>

        <?php
         \bluezed\floatThead\FloatThead::widget(
            [
                'tableId' => 'countryTable',
                'options' => [
                    'top'=>'50',
                    'scrollContainer'=>true
                ]
            ]
        );
        ?>

    </p>

</div>



