<?php

namespace App\Repositories;

use App\Article;
use Datatables;
use Carbon\Carbon;
use Auth;
use DB;

class ArticleRepositoryEloquent implements ArticleRepository {

	private $model;

	public function __construct(Article $model) {
		$this->model = $model;
	}

	public function getDataTable(){
		 return \DataTables::of(Article::query())->make(true); 
	}

}