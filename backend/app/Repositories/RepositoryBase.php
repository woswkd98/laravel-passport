<?php
namespace App\Repositories;

use Illuminate\Contracts\Database\ModelIdentifier;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
interface RepositoryBase  {
    public function create();
    public function index() ;
    public function store(Request $request);
    public function update(Request $request, int $id);
    public function destroy(int $id);
    public function show($id);
    public function edit($id);
}

