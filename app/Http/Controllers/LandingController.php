<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Peserta;
use App\Models\Universitas;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class LandingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('landing.about', [
            "title" => "About"
        ]);
    }

    public function showBlogs()
    {
        $blogs = Blog::where('status','=', 'published')->paginate(6);
        return view('landing.blogs', [
            "title" => "Blogs",
            "blogs" => $blogs
        ]);
    }

    public function showPost($slug){
        $post = Blog::where('meta_title', $slug)->first();
        return view('landing.post', [
            "title" => $post->title,
            "meta_desc" =>   $post->meta_desc,
            "meta_keyword" =>  $post->meta_keyword,
            "post" => $post
        ]);
    }

    public function soon()
    {
        return view('landing.coming_soon');
    }

    public function showForm()
    {
        $ptn = Universitas::all();
        return view('landing.form', [
            "title" => "Form Pendaftaran",
            "ptn" => $ptn
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Untuk simpan data pendaftar

        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|unique:pesertas,email',
            'whatsapp' => 'required',
            'instagram' => 'required',
            'school_name' => 'required',
            'address' => 'required',
            'kelas' => 'required',
            'photo_path' => 'required|image|mimes:png,jpg,jpeg',
            'peminatan' => 'required',
            'ptn1_id' => 'required',
            'prodi_1' => 'required',
            'ptn2_id' => 'required',
            'prodi_2' => 'required',
            'payment_proof' => 'required|image|mimes:png,jpg,jpeg'
        ]);

        // $imageName = time() . '.' . $request->photo_path->extension();

        // $request->photo_path->move(public_path('photo_path'), $imageName);

        $photo_path = $request->file('photo_path');
        $photo_path->storeAs('public/photo_path', $photo_path->hashName());
        $payment_proof= $request->file('payment_proof');
        $payment_proof->storeAs('public/payment_proof', $payment_proof->hashName());

        $peserta = Peserta::create([
            'name' => $request->name,
            'email' => $request->email,
            'whatsapp' => $request->whatsapp,
            'instagram' => $request->instagram,
            'school_name' => $request->school_name,
            'address' => $request->address,
            'kelas' => $request->kelas,
            'photo_path'     => $photo_path->hashName(),
            'peminatan' => $request->peminatan,
            'info_source' => implode(',', $request->info_source),
            'ptn1_id' => $request->ptn1_id,
            'prodi_1' => $request->prodi_1,
            'ptn2_id' => $request->ptn2_id,
            'prodi_2' => $request->prodi_2,
            'payment_proof_path' => $payment_proof->hashName()
        ]);

        if ($peserta) {
            //redirect dengan pesan sukses
            return redirect()->route('landing.form')->with(['success' => 'Pendaftaran Berhasil']);
        } else {
            //redirect dengan pesan error
            return redirect()->route('landing.form')->with(['error' => 'Data Gagal Disimpan!']);
        }

        // return redirect('/form')->with('success', 'Tambah Data Berhasil');
    }
}
