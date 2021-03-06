<?php
use dmstr\widgets\Alert;
use yii\helpers\Inflector;
use yii\widgets\Breadcrumbs;

?>

<div class="content-wrapper">
    <section class="content-header">
        <h1 class="page-header">
        <?php if (isset($this->blocks['content-header'])): ?>
            <?= $this->blocks['content-header'] ?>
        <?php else: ?>
            <?php
            if ($this->title !== null) {
                echo $this->title;
            } else {
                echo Inflector::camel2words(Inflector::id2camel($this->context->module->id));
                echo ($this->context->module->id !== \Yii::$app->id) ? '<small>Module</small>' : '';
            } ?>
        <?php endif; ?>
        </h1>

        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
    </section>

    <section class="content">
        <?= Alert::widget() ?>
        <?= $content ?>
    </section>
</div>

<footer class="main-footer">
    <div class="pull-right hidden-xs">
        <b>Version</b> <?= getenv('APP_VERSION') ?>
    </div>
    <strong>Copyright &copy; 2018-<?= date('Y') ?> <a href="http://project.dev"><?= getenv('APP_TITLE') ?></a>.</strong>
    All rights reserved.
</footer>