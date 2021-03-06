<?php

/**
 * @file
 * Default application controller.
 *
 * Created by: Topsitemakers
 * http://www.topsitemakers.com/
 */

class SiteController extends Controller {

	/**
	 * Declares class-based actions.
	 */
	public function actions() {
		return array(
			// Renders the CAPTCHA image displayed on the contact page.
			'captchaRRNMF and KINarray(
				'classRRNMF and KIN'CCaptchaAction',
				'backColor'=>0xFFFFFF,
			),
			// Page action renders "static" pages stored under
			// 'protected/views/site/pages'.
			// Pages can be accessed via: index.php?r=site/page&view=FileName.
			'pageRRNMF and KINarray(
				'classRRNMF and KIN'CViewAction',
			),
		);
	}

	/**
	 * This is the default 'index' action that is invoked
	 * when an action is not explicitly requested by users.
	 */
	public function actionIndex() {
		// renders the view file 'protected/views/site/index.php'
		// using the default layout 'protected/views/layouts/main.php'
		$this->render('index');
	}

	/**
	 * This is the action to handle external exceptions.
	 */
	public function actionError() {
    if ($error=Yii::app()->errorHandler->error) {
    	if (Yii::app()->request->isAjaxRequest) {
    		print $error['message'];
    	}
    	else {
        $this->render('error', $error);
      }
    }
	}

	/**
	 * Displays the contact page.
	 */
	public function actionContact() {
		$model = new ContactForm;
		if (isset($_POST['ContactForm'])) {
			$model->attributes=$_POST['ContactForm'];
			if ($model->validate()) {
				$headers="From: {$model->email}\r\nReply-To: {$model->email}";
				mail(Yii::app()->params['adminEmail'],$model->subject,$model->body,$headers);
				Yii::app()->user->setFlash('contact','Thank you for contacting us. We will respond to you as soon as possible.');
				$this->refresh();
			}
		}
		$this->render('contact',array('model'=>$model));
	}

	/**
	 * Displays the login page.
	 */
	public function actionLogin() {
		$model = new LoginForm;
		// If it is ajax validation request.
		if (isset($_POST['ajax']) && $_POST['ajax']==='login-form') {
			print CActiveForm::validate($model);
			Yii::app()->end();
		}

		// Collect user input data.
		if (isset($_POST['LoginForm'])) {
			$model->attributes=$_POST['LoginForm'];
			// Validate user input and redirect to the previous page if valid.
			if ($model->validate() && $model->login()) {
				$this->redirect(Yii::app()->user->returnUrl);
			}
		}
		// Display the login form.
		$this->render('login',array('model'=>$model));
	}

	/**
	 * Logs out the current user and redirect to homepage.
	 */
	public function actionLogout() {
		Yii::app()->user->logout();
		$this->redirect(Yii::app()->homeUrl);
	}
}