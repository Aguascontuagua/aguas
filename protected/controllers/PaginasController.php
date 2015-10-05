<?php
	/**
	 * Páginas dinámicas cargadas por la App
	 * */
	class PaginasController extends Controller {
		
		public function init(){
			Yii::app()->theme = 'aguasmobile';
		}
		/**
		 * Pagina inicial para crear alerta
		 * */
		public function actionCrearalerta(){
			echo $this->renderPartial('crearalerta');
			Yii::app()->end();
		}
		
		
		/**
		 * Ver detalle de alerta
		 * */
		public function actionDetallealerta(){
			echo $this->renderPartial('detallealerta');
			Yii::app()->end();
		}
		
		/**
		 * Ver detalle de alerta
		 * */
		public function actionCalificarcalidad(){
			echo $this->renderPartial('calificarcalidad');
			Yii::app()->end();
		}
		
		/**
		 * Ver detalle de alerta
		 * */
		public function actionPreparacion(){
			echo $this->renderPartial('preparacion');
			Yii::app()->end();
		}
		
		public function actionCalificafisica2(){
			echo $this->renderPartial('califica2');
			Yii::app()->end();
		}
		
		public function actionCalificafisica3(){
			echo $this->renderPartial('califica3');
			Yii::app()->end();
		}
		
		public function actionSensacion1(){
			echo $this->renderPartial('sensacion1');
			Yii::app()->end();
		}
		
		public function actionPercepcion(){
			echo $this->renderPartial('percepcion');
			Yii::app()->end();
		}
		
		public function actionDatosalerta(){
			echo $this->renderPartial('datosalerta');
			Yii::app()->end();
		}
		
	}
?>