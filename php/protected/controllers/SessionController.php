<?php

class SessionController extends Controller
{
	/**
	 * Displays the login page
	 */
	public function actionNew()
	{
		// If user is already logged in redirect him to index
		if(!Yii::app()->user->isGuest)
			$this->redirect($this->createUrl('index/index'));

		$model=new LoginForm;

		// if it is ajax validation request
		if(isset($_POST['ajax']) && $_POST['ajax']==='login-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
		// collect user input data
		if(isset($_POST['LoginForm']))
		{
			$model->attributes=$_POST['LoginForm'];
			// validate user input and redirect to the previous page if valid

			if($model->validate() && $model->login())
				$this->redirect($this->createUrl('default/index'));
		}
		// display the login form
		$this->render('new',array('model'=>$model));
	}

	/**
	 * Logs out the current user and redirect to new page.
	 */
	public function actionDestroy()
	{
		Yii::app()->user->logout(false);
		$this->redirect($this->createUrl('new'));
	}
}