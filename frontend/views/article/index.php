<?php
/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */
/* @var $searchModel frontend\models\search\ArticleSearch */

use yii\bootstrap\ActiveForm;
use yii\helpers\Html;
use yii\widgets\LinkPager;

$this->title = Yii::t('frontend', 'Articles')
?>
<section class="page__heading page-heading">
    <div class="page-heading__inner">
        <div class="container">
            <h1 class="page-heading__title"><?php echo $this->title; ?></h1>
            <p class="page-heading__subtitle"><?php echo 'Здесь мы будем делиться с вами новостями и разными штуками'; ?></p>
        </div>
    </div>
</section>

<div class="page__content">
    <div class="container">
        <div class="layout">
            <div class="layout__content">
                <div class="blog-grid">
                    <?php
                    /*
                    echo \yii\widgets\ListView::widget([
                        'dataProvider' => $dataProvider,
                        'pager' => [
                            'hideOnSinglePage' => true,
                        ],
                        'itemView' => '_item'
                    ])
                    */
                    ?>
                    <?php
                    if ($articles)  {
                        foreach ($articles as $article) {
                            echo $this->render('_item', [
                                'model' => $article,
                            ]);
                        }
                    }
                    ?>
                </div>

                <div class="pagination__outer">
                    <?php
                    echo LinkPager::widget([
                        'pagination' => $pages,
                        'maxButtonCount' => 15,
                        // Отключаю ссылку "Следующий"
                        'nextPageLabel' => false,
                        // Отключаю ссылку "Предыдущий"
                        'prevPageLabel' => false,
                    ]);
                    ?>
                </div>
            </div>
        </div>
    </div>


</div>
