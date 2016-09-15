<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\User;
use app\models\Homework;
use yii\data\Pagination;

class SiteController extends Controller
{
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout','buy'],
                'rules' => [
                    [
                        'actions' => ['logout','buy'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    public function actionIndex()
    {
        $connection = Yii::$app->db;
        $sql = "SELECT * FROM domitory ORDER BY score DESC,id ASC LIMIT 1";

        $command = $connection->createCommand($sql);
        $data = $command->queryAll();
        $row = $data[0];

        $data_side = Homework::findBySql("SELECT * FROM homework ORDER BY date DESC LIMIT 3")->asArray()->all();
        return $this->render('index',[
                'row' => $row,
                'data_side' => $data_side,
            ]);
    }

    public function actionLogin()
    {
        if (!\Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    public function actionAbout()
    {
        return $this->render('about');
    }

    public function actionPrograms()
    {
        return $this->render('programs');
    }

    public function actionScoretable()
    {
        $connection = Yii::$app->db;
        $sql = "SELECT * FROM domitory ORDER BY score DESC,id ASC";

        $command = $connection->createCommand($sql);
        $datas = $command->queryAll();
        
        return $this->render('scoretable',[
                'datas' => $datas,
            ]);
    }

    public function actionBuy()
    {

        $id = Yii::$app->user->getId();
        $data = User::findOne($id)->toArray();


        if(Yii::$app->request->post()){
            $allscore = 0;
            $post = Yii::$app->request->post();
            foreach ($post as $key => $value) {
                if(!preg_match('/_csrf/', $key)){
                    if($key >= 1 && $key <= 7 && $key != $id){
                        $user = User::findOne($key);
                        $user->score += $value;
                        $user->save();
                        $allscore++;
                    }
                }
            }
            $me = User::findOne($id);
            $me->score -= $allscore;
            $me->save();

            $this->redirect(['site/scoretable']);
        }
        
        return $this->render('buy',[
                'data' => $data,
            ]);
    }

    public function actionViewhome()
    {
        $data = Homework::findBySql("SELECT * FROM homework ORDER BY date DESC LIMIT 7")->asArray()->all();
        /*$data_body = Homework::findBySql("SELECT * FROM homework ORDER BY date DESC")->asArray()->all();*/
        
        return $this->render('viewhome',[
                'data' => $data,
            ]);
    }

    public function actionNotebook()
    {
        if(Yii::$app->request->isPost){
            $post = Yii::$app->request->post();
            foreach ($post as $key => $value) {
                switch ($key) {
                    case '_csrf': break;
                    case 'position': $project = $value; break;
                    case 'address': $description = $value; break;
                    default:
                        # code...
                        break;
                }
            }
            $homework = new Homework();
            $homework->project = $project;
            $homework->description = $description;
            $homework->date = date("Y-m-d H:i:s");
            $homework->save();
            $this->redirect(['site/viewhome']);
        }
        return $this->render('notebook');
    }
}