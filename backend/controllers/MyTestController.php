<?php

namespace backend\controllers;

use Yii;
use yii\web\NotFoundHttpException;



/**
 * AuthItemController implements the CRUD actions for AuthItem model.
 */
class MyTestController extends AuthController
{
	public function actionIndex(){
		echo 'this method finished';
	}

	public function actionCreate(){
		echo 'To be perfected';
	}

	public function actionUpdate(){
		echo 'update';
	}

	public function actionDelete(){
		echo 'delete all info';
	}
}