<?php

    namespace app\modules\admin\controllers\rest;

    use app\models\Article;
    use yii\rest\Controller;

    /**
     * Rest service for manipulating auth_action table
     */
    class ArticleController extends Controller
    {
        /**
         * Read all models
         */
        public function actionReadAll()
        {
            return Article::find()->all();
        }
    }

