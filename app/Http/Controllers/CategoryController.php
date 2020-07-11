<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use DB;
use Session;

class CategoryController extends Controller
{
    public function index(Request $request)
    {
        $search =  $request->input('search');
        $data =  Category::orderby('id','desc')
                        ->where('name', 'LIKE', '%' . $search . '%')
                        ->orwhere('description', 'LIKE', '%' . $search . '%')
                        ->paginate(10);
        $limit = 10;
        $currpage = ($request->get('page')) ?? 1;
        $offset = ($currpage * $limit) - $limit;
        
        return view('category.list',compact('data','offset'));
    }

    public function create()
    {
        return view('category.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:10',
            'description' => 'required',
        ]);

        try{
            DB::beginTransaction();
            $movie = Category::create([
                'name' =>request('name'), 
                'description' =>request('description'),
            ]);
                
            DB::commit();

            Session::put('success', 'Create Category Successfully');
            
            return redirect('/category');
        }catch(Exception $ex){
            DB::rollBack();
            return $ex->getMessage();
        }
    }

    public function edit($id)
    {
        try{
            $data = Category::findOrFail($id);

            return view('category.edit', compact('data'));
            
        }catch(Exeption $e){
            return self::fail($e->getMessage(). 500);
        }
    }

    public function update(Request $request, $id)
    {
        try{
            DB::beginTransaction();

            $category = Category::find($id);

            $category->update([
                'name' =>request('name'), 
                'description' =>request('description'),
            ]);
                
            DB::commit();

            Session::put('success', 'Update Category Successfully');
            
            return redirect('/category');
        }catch(Exception $ex){
            DB::rollBack();
            return $ex->getMessage();
        }
    }

    public function destroy($id)
    {
        try {
            DB::beginTransaction();

            $data = Category::findOrFail($id);

            $data->delete();

            DB::commit();
            Session::put('success', 'Delete Category Successfully');

            return redirect('/category');
        } catch (\Exception $e) {
            DB::rollBack();
            return self::fail($e->getMessage(), 500);
        }
    }
}
