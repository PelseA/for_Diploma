<?php

namespace Aleksandra\Igra\Controllers;

use Aleksandra\Igra\Base\Controller;
use Aleksandra\Igra\Models\AccountModel;
use Aleksandra\Igra\Base\Session;
use Aleksandra\Igra\Models\Exceptions;

class AccountController extends Controller
{
    private $accountModel;
    private $session;

    public function __construct()
    {
     $this->accountModel = new AccountModel();
     $this->session = new Session();
    }

    public function registrationAction($request){
        $postData = $request->post(); // массив $_POST
        /*$answer = $this->accountModel->addUser($postData);
        return parent::generateAjaxResponse($answer); */
        $response = [ 'success' => true ];
        try {
            $this->accountModel->addUser($postData);
       } catch (\Exception $e) {
            $response['success'] = false;
            $response['error'] = $e->getMessage();
        }
        $response = json_encode($response);
        return parent::generateAjaxResponse($response);
    }
    
    public function authAction($request){
        //$postData = $request->params(); // массив $_POST
        $postData = $request->post(); // параметры запроса
        
        $response = [ 'success' => true ];
        try {
           $this->accountModel->authUser($postData);
       } catch (\Exception $e) {
           $response['success'] = false;
            $response['error'] = $e->getMessage();
        }
        $view = 'account_view.php';
        $response = json_encode($response);
        return parent::generateAjaxResponse($response);
    }

    public function accountAction($request){

        $userData = $request->params();  
        $view = 'account_view.php';
        $user = $this->accountModel->infoUser($userData);
    //var_dump($user);
        $title =  "Аккаунт";
        $data = [
            'title' => $title,
            'user' => $user
        ];
        
        return parent::generateResponse($view, $data);
    } 
    public function logoutAction($request){
        $this->session->close();
        header("Location: /");
    }

    public function addScoreAction($request){
    
    	if($this->session->isset('auth')) {
	    	$postData = $request->post();
	    	$this->accountModel->countScore($postData['answers']);
	    	header('Location: /user/account');
	    } else {
	    	header('Location: /alert');
	    }
    }

    public function errorAction($request){
    	return parent::generateResponse('error_message.php',[]);
    }
    
    public function addQuestionAction($request){
    	$postData = $request->post(); // массив $_POST
    	$response = ['success' => true];
    	try {
            $this->accountModel->addOwnQuestion($postData);
       } catch (\Exception $e) {
            $response['success'] = false;
            $response['error'] = $e->getMessage();
        }
        $response = json_encode($response);
        return parent::generateAjaxResponse($response);
    }


}