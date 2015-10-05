<?php
	class UnderconstructionController extends Controller{
		
		public function init(){
			$this->layout='blanco';
		}
		
		public function actionIndex(){
			$this->render('under');
		}
	}
?>
