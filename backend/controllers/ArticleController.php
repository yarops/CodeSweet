<?php

namespace backend\controllers;

use backend\models\search\ArticleSearch;
use common\models\Article;
use common\models\ArticleCategory;
use common\models\Seofield;
use Yii;
use yii\filters\VerbFilter;
use yii\web\Controller;
use yii\web\NotFoundHttpException;

/**
 * ArticleController implements the CRUD actions for Article model.
 */
class ArticleController extends Controller
{

	public function actions(){
		return [
			'upload-thumb'=>[
				'class'=>'trntv\filekit\actions\UploadAction',
				'fileStorage' => 'thumbStorage', // будет вызван Yii::$app->get('flashStorage')
				'deleteRoute' => 'delete-thumb',
			],
			'delete-thumb' => [
				'class' => 'trntv\filekit\actions\DeleteAction',
				'fileStorage' => 'thumbStorage', // будет вызван Yii::$app->get('flashStorage')
			],

		];
	}

    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post']
                ]
            ]
        ];
    }

    /**
     * Lists all Article models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ArticleSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        $dataProvider->sort = [
            'defaultOrder' => ['published_at' => SORT_DESC]
        ];
        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider
        ]);
    }

    /**
     * Creates a new Article model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Article();

        if ($model->load(Yii::$app->request->post())) {

	        $seofield = new Seofield();

	        $seofield->seotitle = Yii::$app->request->post('seotitle');
	        $seofield->seodescription = Yii::$app->request->post('seodescription');

	        if ($seofield->save()) {
		        $model->link('seofield', $seofield);
	        }

	    	if ($model->save()) {
			    return $this->redirect(['index']);
		    }

        } else {
            return $this->render('create', [
                'model' => $model,
                'categories' => ArticleCategory::find()->active()->all(),
            ]);
        }
    }

    /**
     * Updates an existing Article model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $seofield = $model->seofield;

        if ($model->load(Yii::$app->request->post()) && $seofield->load(Yii::$app->request->post())) {

            if ($model->save() && $seofield->save()) {
                return $this->redirect(['index']);
            } else {
                throw new ServerErrorHttpException(Yii::t('test', 'Updating your data has go wrong'));
            }

        } else {
            return $this->render('update', [
                'model' => $model,
                'categories' => ArticleCategory::find()->active()->all(),
            ]);
        }
    }

    /**
     * Deletes an existing Article model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $model = $this->findModel($id);

        $model->delete();

        $this->findModelSeofield($model->seofield_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Article model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Article the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Article::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

    /**
     * Finds the Article model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Article the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModelSeofield($id)
    {
        if (($model = Seofield::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
