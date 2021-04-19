<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
?>
<h1>Countries</h1>
<ul>
<?php foreach ($users as $user): ?>
    <li>
        <?= Html::encode("{$user->name} ({$user->mail})") ?>:
        <?= $user->pass ?>
    </li>
<?php endforeach; ?>
</ul>

<?= LinkPager::widget(['pagination' => $pagination]) ?>