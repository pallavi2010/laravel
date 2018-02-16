<?php

namespace App\Repositories;

use App\User;
use Datatables;
use Carbon\Carbon;
use Auth;
use DB;

class UserRepositoryEloquent implements UserRepository {

	private $model;

	public function __construct(User $model) {
		$this->model = $model;
	}

	public function getDataTable(){
		 return \DataTables::of(User::query())->make(true); 
	}

}