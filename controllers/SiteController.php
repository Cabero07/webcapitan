<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;

class SiteController extends Controller
{
    public function behaviors()
    {
        return [
            'access' => [
                'class' => \yii\filters\AccessControl::class,
                'only' => ['logout', 'dashboard', 'contact', 'profesores'], // Define las acciones a proteger
                'rules' => [
                    [
                        'allow' => true,
                        'actions' => ['login', 'error'], // Excluye estas acciones del requisito de autenticación
                        'roles' => ['?'], // Solo usuarios no autenticados
                    ],
                    [
                        'allow' => true,
                        'roles' => ['@'], // Solo usuarios autenticados pueden acceder a las demás acciones
                    ],
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
        return $this->render('index');
    }

    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }

        $model->password = '';
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    public function actionDashboard()
    {
        return $this->render('dashboard');
    }

    public function actionContact()
    {
        return $this->render('contact');
    }

    public function actionProfesores()
    {
        return $this->render('profesores');
    }
}
