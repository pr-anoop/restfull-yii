<?php

class SiteController extends Controller {


	/**
	 *  Accepts GET
	 */
	public function actionIndex() {
		echo 'its great';
		exit;
	}

	/*
	*	Accepts GET with ID
	*/
	public function actionShow() {
		echo 'show';
		exit;
	}

	/*
	* Accepts POST method
	*/
	public function actionCreate() {
		echo 'create';
		exit;
	}

	/*
	* Accepts PUT method with ID
	*/
	public function actionUpdate() {
		echo 'Update';
		exit;
	}

	/*
	* Accepts DELETE method with ID
	*/
	public function actionDelete() {
		
		echo 'Delete';
		exit;
	}
}