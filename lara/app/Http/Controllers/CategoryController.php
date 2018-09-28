<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\category;
class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    private $limit;
    public function __construct()
    {
      $this->limit=2;  
    }
    public function index()
    {   $categories = category::get()->count(); 
           $page=ceil($categories/$this->limit);
        return view('category.home', compact('page'));
    }

    public function ajax(Request $request)
    {   
        $count = category::get()->count(); 
        $page=ceil($count/$this->limit);
         $skipResults;
        if($request->id == 0 || $request->id == 1 )
        {
             $skipResults=0;
            
        }
        else{
        $skipResults=($request->id-1) * $this->limit;
         
        }

        $categories=category::skip($skipResults)->take($this->limit)->get();
        return view('category.table',compact('categories','page'));
    }
    public function ajaxMessage()
    {   
        // return 'html';
        // $categories = category::paginate(3); 

        return view('category.catgeoryFlashMessage');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try{
            $cat = new category();
             $cat->cat_name = $request->categoryName;
             $v=$cat->save();
         }
         catch (\Illuminate\Database\QueryException $e) {
                $var=count($e);
                if($var>0)
                {
                 Session::flash('alert-danger', 'some problem is there');
                    return redirect('category');
                }
        }
        if($v)
        {
            Session::flash('alert-success', 'category added');
            return redirect('category');
                   
        }  
        // return redirect('category');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       // return "hello";
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = category::find($id);
        return view('category.edit',compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try{
            $cat =category::find($id);
            $cat->cat_name = $request->categoryName;
            $v=$cat->save();
            }
            catch (\Illuminate\Database\QueryException $e) {
                $var=count($e);
                if($var>0)
                {
                 Session::flash('alert-danger', 'Can\'t update category.');
                    return redirect('category');
                }
        }
        if($v)
        {
            Session::flash('alert-success', 'category updated');
            return redirect('category');
                   
        }   
        // return redirect('category');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        try{
            $deleteCategory=category::find($id);
            $v1 = $deleteCategory->delete();
        }
        catch (\Illuminate\Database\QueryException $e) {
                $var1=count($e);
                if($var1>0)
                {
              Session::flash('alert-danger', 'Can\'t delete catgeory as it contains some products');
                    // return redirect('category');
                }
        }
        if($v1)
        {
            Session::flash('alert-success', 'category deleted');
            //return redirect('category');
                   
        }   
    }

     public function deleteAll(Request $request)
    {
       $categories= $request->input('check_list');
      
      try{
            foreach($categories as $category)
            {
                $cat= category::find($category);
                $v=$cat->delete();
            }
        }
        catch (\Illuminate\Database\QueryException $e) {
                $var=count($e);
                if($var>0)
                {
                  
                     $request->session()->flash('alert-danger', 'Can\'t delete catgeory as it contains some products');
                    return redirect('category');
                }
        }
        if($v)
        {
            $request->session()->flash('alert-success', 'category deleted');
            return redirect('category');
                   
        }   
        } 
    

}
