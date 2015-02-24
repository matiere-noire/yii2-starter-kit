<?php
/**
 * @author Eugene Terentev <eugene@terentev.net>
 */
use yii\helpers\Html;

?>
<?php $this->beginPage() ?>
    <!DOCTYPE html>
    <html lang="<?php echo \Yii::$app->language; ?>">
    <head>
        <meta charset="<?php echo \Yii::$app->charset; ?>">
        <title><?php echo Html::encode(Yii::$app->name); ?></title>
        <?php $this->head(); ?>
    </head>
    <body>
    <?php $this->beginBody() ?>
        <div class="container">
            <?php echo $content; ?>
        </div>
    <?php $this->endBody() ?>
    </body>
    </html>
<?php $this->endPage() ?>