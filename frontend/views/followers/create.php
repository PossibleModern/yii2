<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\Followers $model */

$this->title = 'Create Followers';
$this->params['breadcrumbs'][] = ['label' => 'Followers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="followers-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
