<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\grid\GridView;
use app\models\CountriesSearch;

$this->title = 'Countries';
$this->params['breadcrumbs'][] = $this->title;

$searchModel = new CountriesSearch();
$dataProvider = $searchModel->search(Yii::$app->request->get());

?>

<div class="site-countries">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= GridView::widget([
        'dataProvider' => $dataProvider,
            'filterModel' => $searchModel,
            'columns'=>[],
        ]);
        ?>
    </p>

</div>

