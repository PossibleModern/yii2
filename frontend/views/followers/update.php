<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\Followers $model */

$this->title = 'Update Followers: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Followers', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="followers-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
