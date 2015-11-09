<?php
	class indexController extends Controller
	{	
		public function __construct(){
			 parent::__construct();
		}
		public function index(){
				$name = 'BaconBao';
				/*!!!----- Require "Example_model.php" -----!!!*/
				$exampleModel = new Example_model;
				$callback = $exampleModel->example_Text($name);

				/*!!!----- Session Examples -----!!!*/
				$userId = time();
				$loginTimes = 0;
				if(Session::isLogin()){
					$userId = Session::get('userid');
					$loginTimes = Session::get('counter');
					$counter = (int)$loginTimes + 1;
					Session::set('counter', $counter);
				}else{
					Session::init();
					Session::set('userid', $userId);
					Session::set('counter', ((int)$loginTimes + 1) );
				}

				require_once(VIEWS_PATH.'/home.php');
		}
		public function logout($args){
			Session::init();
			Session::destroy();
			header('Location: '.SITE_HOMEURL);
		}
	}