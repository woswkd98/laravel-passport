<?php

namespace App\Repositories;

use App\Repositories\RepositoryBase;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class UserRepository implements RepositoryBase  {

    public function create() {}

    public function index() {
        return DB::table('users')->get();
    }

    public function store(Request $request) {}
    public function update(Request $request, int $id) {}
    public function destroy(int $id) {}
    public function show($id) {}
    public function edit($id) {}


}
