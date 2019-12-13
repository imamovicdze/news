<?php

use app\models\Article;
use app\models\Category;
use yii\data\Pagination;
use yii\helpers\Url;
use yii\widgets\LinkPager;

/* @var $pagination Pagination */
/* @var $articles Article[] */
/* @var $popular Article[] */
/* @var $recent Article[] */
/* @var $categories Category[] */
?>

<!--main content start-->
<div class="main-content">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <?php foreach ($articles as $article) {?>
                <article class="post post-list">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="post-thumb">
                                <a href="<?= Url::ToRoute(['site/view', 'id' => $article->id]); ?>"><img src="<?= $article->getImage(); ?>" alt="" class="pull-left"></a>

                                <a href="<?= Url::ToRoute(['site/view', 'id' => $article->id]); ?>" class="post-thumb-overlay text-center">
                                    <div class="text-uppercase text-center">View Post</div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="post-content">
                                <header class="entry-header text-uppercase">
                                    <h6><a href="<?= Url::ToRoute(['site/category', 'id' => $article->category->id]); ?>"> <?= $article->category->title; ?>></a></h6>

                                    <h1 class="entry-title"><a href="<?= Url::ToRoute(['site/view', 'id' => $article->id]); ?>">Home is peaceful place</a></h1>
                                </header>
                                <div class="entry-content">
                                    <p>
                                        <?= $article->description; ?>
                                    </p>
                                </div>
                                <div class="social-share">
                                    <span class="social-share-title pull-left text-capitalize">By <?= $article->user->name ?> On <?= $article->getDate(); ?>></span>

                                </div>
                            </div>
                        </div>
                    </div>
                </article>
                <?php } ?>
                <?php
                echo LinkPager::widget([
                    'pagination' => $pagination
                ]);
                ?>
            </div>
            <?= $this->render('/partials/sidebar', [
                'popular' => $popular,
                'recent' => $recent,
                'categories' => $categories
            ]); ?>
        </div>
    </div>
</div>
<!-- end main content-->