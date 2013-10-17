<?php

class SiteController extends Controller
{
	/**
	 * Declares class-based actions.
	 */
	public function actions()
	{
		return array(
			// captcha action renders the CAPTCHA image displayed on the contact page
			'captcha'=>array(
				'class'=>'CCaptchaAction',
				'backColor'=>0xFFFFFF,
			),
			// page action renders "static" pages stored under 'protected/views/site/pages'
			// They can be accessed via: index.php?r=site/page&view=FileName
			'page'=>array(
				'class'=>'CViewAction',
			),
		);
	}

	/**
	 * This is the default 'index' action that is invoked
	 * when an action is not explicitly requested by users.
	 */
	public function actionIndex()
	{
		// renders the view file 'protected/views/site/index.php'
		// using the default layout 'protected/views/layouts/main.php'
		$this->render('index');
	}

	/**
	 * This is the action to handle external exceptions.
	 */
	public function actionError()
	{
		if($error=Yii::app()->errorHandler->error)
		{
			if(Yii::app()->request->isAjaxRequest)
				echo $error['message'];
			else
				$this->render('error', $error);
		}
	}

	/**
	 * Displays the contact page
	 */
	public function actionContact()
	{
		$model = new ContactForm;
        if (isset($_POST['ContactForm'])) {
            $model->attributes = $_POST['ContactForm'];
            if ($model->validate()) {
                $name = $model->name;
                $email = $model->email;
                $subject = $model->subject;
                $text = $model->body;
                $adresses = array(
				'Jean'=>'sistemas@grupohardtech.com'
				);

                try {
                    Mailer::sendMail($name, $email, $subject, $text, $adresses);

                    Yii::app()->user->setFlash('success', GlobalParameters::$contactThanksText);
                    $this->redirect(array('contact'));
                } catch (phpmailerException $e) {
                    echo $e->errorMessage(); //Errores de PhpMailer
                } catch (Exception $e) {
                    echo $e->getMessage(); //Errores de cualquier otra cosa.
                }
            }
        }
        $this->render('contact', array(
            'data' => array(
                'model' => $model,
            )
        ));
	}

	/**
	 * Displays the login page
	 */
	public function actionLogin()
	{
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
				$this->redirect(Yii::app()->user->returnUrl);
		}
		// display the login form
		$this->render('login',array('model'=>$model));
	}

	/**
	 * Logs out the current user and redirect to homepage.
	 */
	public function actionLogout()
	{
		Yii::app()->user->logout();
		$this->redirect(Yii::app()->homeUrl);
	}

	public function actionAbout()
	{
		// using the default layout 'protected/views/layouts/main.php'
		$this->render('about');
	}

	public function actionBlog()
	{
		// using the default layout 'protected/views/layouts/main.php'
		$this->render('blog');
	}

	public function actionProduct()
	{
		// using the default layout 'protected/views/layouts/main.php'
		$this->render('product');
	}

	public function actionDetail($id)
	{
		// using the default layout 'protected/views/layouts/main.php'
		$this->render('detail',array('id'=>$id));
	}
}