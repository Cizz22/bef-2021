<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BlogsController extends Controller
{
    function index(){
        if(request()->ajax()){
            $data = Blog::all();
            return datatables()
            ->of($data)
            ->setRowClass('tabletr overflow-x-hidden')
            ->addColumn('action', function($data){
                $button =  ' <div class="flex space-x-1 justify-evenly"> <a href=blogs/edit/'.$data->id.'><button id="detail-button" @click="showModal1 = true" class="p-1 text-blue-600 hover:bg-blue-600 hover:text-white rounded" title="Lihat Detail"><i class="fas fa-edit"></i></button></a>';
                $button .= '<button id="detail-button" @click="showModal1 = true" data-id='.$data->id.' class="p-1 text-red-600 hover:bg-red-600 hover:text-white rounded" title="Hapus"><i class="fas fa-trash"></i></button></div>';
                return $button;
            })
            ->rawColumns(['action'])
            ->make(true);
        }
        return view('admin.dashboard.blogs.index');
    }

    function tambah(){
        return view('admin.dashboard.blogs.tambah');
    }

    function store(Request $request){
        $this->validate($request, [
            'title' => 'required',
            'content' => 'required',
            'image' => 'image|mimes:jpeg,jpg,png|max:2000',
            'status' => 'required'
        ]);

         //upload image
        $image = $request->file('image');
        $image->storeAs('public/blogs', $image->hashName());

       try {
        Blog::create([
            'featured_image_path'  => $image->hashName(),
            'title'   => $request->title,
            'content' => $request->content,
            'meta_title' =>$request->meta_title,
            'meta_desc' =>$request->meta_desc,
            'meta_keyword' => $request->meta_keyword,
            'status' => $request->status,
            'users_id' => Auth()->id(),
            ]);
        return redirect()->route('admin.blogs.index')->with(['success' => 'Data Berhasil Disimpan!']);
       }catch (QueryException $e) {
           dd($e);
        return redirect()->route('admin.blogs.index')->with(['error' => 'Data Gagal Disimpan!']);
       }
    }

    function edit($id){
        $blog = Blog::find($id);
        return view('admin.dashboard.blogs.edit', compact(['blog']));
    }

    function update(Request $request, $id){
        $this->validate($request, [
            'title' => 'required',
            'content' => 'required',
            'image' => 'image|mimes:jpeg,jpg,png|max:2000',
            'status' => 'required'
        ]);

        $blog = Blog::findOrFail($id);

        if(!$request->file('image')){
            try {
                $blog->update([
                    'title'   => $request->title,
                    'content' => $request->content,
                    'meta_title' =>$request->meta_title,
                    'meta_desc' =>$request->meta_desc,
                    'meta_keyword' => $request->meta_keyword,
                    'status' => $request->status,
                    'users_id' => Auth()->id(),
                    ]);
            return redirect()->route('admin.blogs.index')->with(['success' => 'Data Berhasil Disimpan!']);
        } catch (QueryException $e) {
            return redirect()->route('admin.blogs.index')->with(['error' => 'Data Gagal Disimpan!']);
        }
    } else{
         //hapus image lama
        Storage::disk('local')->delete('public/blogs/'.basename($blog->featured_image_path));

        //upload image
        $image = $request->file('image');
        $image->storeAs('public/blogs', $image->hashName());

        try {
            $blog->update([
                'featured_image_path'  => $image->hashName(),
                'title'   => $request->title,
                'content' => $request->content,
                'meta_title' =>$request->meta_title,
                'meta_desc' =>$request->meta_desc,
                'meta_keyword' => $request->meta_keyword,
                'status' => $request->status,
                'users_id' => Auth()->id(),
                ]);
            return redirect()->route('admin.blogs.index')->with(['success' => 'Data Berhasil Disimpan!']);
           }catch (QueryException $e) {
            return redirect()->route('admin.blogs.index')->with(['error' => 'Data Gagal Disimpan!']);
           }
    }

      
    }

}
