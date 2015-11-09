<?php
	class getController extends Controller
	{	
		public function __construct(){
			 parent::__construct();
		}
		public function index(){

		}
		public function show($args){
				/*---
				This is an example for Http GET args.
				---*/
				$text = implode('///', $args);
				echo $text;
		}
	}