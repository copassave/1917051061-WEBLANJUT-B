<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class PostController extends BaseController
{
	public function index()
	{
		echo view("layouts/header", ['title' => '1917051061 - Posts']);
		echo view("layouts/navbar");
		echo view("v_posts");
		echo view("layouts/footer");
	}
}
