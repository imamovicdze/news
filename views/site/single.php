<?php

use app\models\Article;
use app\models\ArticleTag;
use app\models\Category;
use app\models\Comment;
use yii\helpers\Url;

/* @var $article Article */
/* @var $popular Article[] */
/* @var $recent Article[] */
/* @var $categories Category[] */
/* @var $comments Comment[] */
/* @var $commentForm Comment */
/* @var $tags ArticleTag[] */
 ?>
<!--main content start-->
<div class="main-content">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <article class="post">
                    <div class="post-thumb">
                        <a href="<?= Url::ToRoute(['site/view', 'id' => $article->id]); ?>"><img src="<?= $article->getImage(); ?>" alt=""></a>
                    </div>
                    <div class="post-content">
                        <header class="entry-header text-center text-uppercase">
                            <h6><a href="<?= Url::ToRoute(['site/category', 'id' => $article->category->id]); ?>"><?= $article->category->title ?></a></h6>

                            <h1 class="entry-title"><a href="<?= Url::ToRoute(['site/view', 'id' => $article->id]); ?>"><?= $article->title ?></a></h1>

                        </header>
                        <div class="entry-content">
                            <?= $article->content ?>
                        </div>
                        <div class="decoration">
                            <?php foreach ($tags as $tag) { ?>
                                <a href="#0" class="btn btn-default"><?= $tag->tag->title ?></a>
                            <?php } ?>
                        </div>

                        <div class="social-share">
							<span
                                class="social-share-title pull-left text-capitalize">By <?= $article->user->name ?> On <?= $article->getDate(); ?></span>
                            <ul class="text-center pull-right">
                                <li>
                                    <a href="https://twitter.com/share?ref_src=twsrc%5Etfw" class="twitter-share-button" data-show-count="false">Tweet</a>
                                    <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                                </li>
                            </ul>
                        </div>
                    </div>
                </article>
<!--                <div class="top-comment">top comment-->
<!--                    <img src="../public/images/comment.jpg" class="pull-left img-circle" alt="">-->
<!--                    <h4>Rubel Miah</h4>-->
<!---->
<!--                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy hello ro mod tempor-->
<!--                        invidunt ut labore et dolore magna aliquyam erat.</p>-->
<!--                </div>-->
                <!--top comment end-->
<!--                <div class="row">blog next previous-->
<!--                    <div class="col-md-6">-->
<!--                        <div class="single-blog-box">-->
<!--                            <a href="#">-->
<!--                                <img src="../public/images/blog-next.jpg" alt="">-->
<!---->
<!--                                <div class="overlay">-->
<!---->
<!--                                    <div class="promo-text">-->
<!--                                        <p><i class=" pull-left fa fa-angle-left"></i></p>-->
<!--                                        <h5>Rubel is doing Cherry theme</h5>-->
<!--                                    </div>-->
<!--                                </div>-->
<!---->
<!---->
<!--                            </a>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="col-md-6">-->
<!--                        <div class="single-blog-box">-->
<!--                            <a href="#">-->
<!--                                <img src="../public/images/blog-next.jpg" alt="">-->
<!---->
<!--                                <div class="overlay">-->
<!--                                    <div class="promo-text">-->
<!--                                        <p><i class=" pull-right fa fa-angle-right"></i></p>-->
<!--                                        <h5>Rubel is doing Cherry theme</h5>-->
<!---->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </a>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>blog next previous end-->
<!--                <div class="related-post-carousel"><--related post carousel-->
<!--                    <div class="related-heading">-->
<!--                        <h4>You might also like</h4>-->
<!--                    </div>-->
<!--                    <div class="items">-->
<!--                        <div class="single-item">-->
<!--                            <a href="#">-->
<!--                                <img src="../public/images/related-post-1.jpg" alt="">-->
<!---->
<!--                                <p>Just Wondering at Beach</p>-->
<!--                            </a>-->
<!--                        </div>-->
<!---->
<!---->
<!--                        <div class="single-item">-->
<!--                            <a href="#">-->
<!--                                <img src="../public/images/related-post-2.jpg" alt="">-->
<!---->
<!--                                <p>Just Wondering at Beach</p>-->
<!--                            </a>-->
<!--                        </div>-->
<!---->
<!---->
<!--                        <div class="single-item">-->
<!--                            <a href="#">-->
<!--                                <img src="../public/images/related-post-3.jpg" alt="">-->
<!---->
<!--                                <p>Just Wondering at Beach</p>-->
<!--                            </a>-->
<!--                        </div>-->
<!---->
<!---->
<!--                        <div class="single-item">-->
<!--                            <a href="#">-->
<!--                                <img src="../public/images/related-post-1.jpg" alt="">-->
<!---->
<!--                                <p>Just Wondering at Beach</p>-->
<!--                            </a>-->
<!--                        </div>-->
<!---->
<!--                        <div class="single-item">-->
<!--                            <a href="#">-->
<!--                                <img src="../public/images/related-post-2.jpg" alt="">-->
<!---->
<!--                                <p>Just Wondering at Beach</p>-->
<!--                            </a>-->
<!--                        </div>-->
<!---->
<!---->
<!--                        <div class="single-item">-->
<!--                            <a href="#">-->
<!--                                <img src="../public/images/related-post-3.jpg" alt="">-->
<!---->
<!--                                <p>Just Wondering at Beach</p>-->
<!--                            </a>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>related post carousel-->

                <?= $this->render('/partials/comment',[
                    'article' => $article,
                    'comments' => $comments,
                    'commentForm' => $commentForm
                ]);?>
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