<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Peserta;
use App\Models\Universitas;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

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

    public function showDocum() {
        return view('landing.dokumentasi',[
            "title" => "Dokumentasi BEF One Decade"
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

    public function pickForm(Request $request){
        if($request->query()){
            $this->validate($request,
            [
                'jenjang' => 'required'
            ]);
           switch ($request->query('jenjang')) {
                case 'SMA-1':
                   return redirect()->route('landing.form');
                   break;
                case 'SMA-2':
                    return redirect()->route('landing.form2');
                    break;
                case 'Mahasiswa':
                    return redirect()->route('landing.form-mahasiswa');
                    break;
           }
        }

        return view('landing.pick-form', [
            "title" => "Form Pendaftaran"
        ]);
    }

    public function showFormMahasiswa()
    {
        return view('landing.form-mahasiswa', [
            "title" => "Form Pendaftaran",
        ]);
    }

    public function showForm()
    {
        $ptn = Universitas::all();
        return view('landing.form', [
            "title" => "Form Pendaftaran",
            "ptn" => $ptn
        ]);
    }

    public function showForm2(){
        $ptn = Universitas::all();
        return view('landing.form-expo-sharing', [
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
        $isSMA = ($request->jenjang == 'SMA'?true:false);
        $isSMA2 = ($request->jenjang == 'SMA2'?true:false);

        if($isSMA){
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
                    'payment_proof' => 'required|image|mimes:png,jpg,jpeg',
                ]);
        }
        elseif($isSMA2) {
            $this->validate($request, [
                'name' => 'required',
                'email' => 'required|unique:pesertas,email',
                'whatsapp' => 'required',
                'school_name' => 'required',
                'ptn1_id' => 'required',
                'prodi_1' => 'required',
                'ptn2_id' => 'required',
                'prodi_2' => 'required',
                'payment_proof' => 'required|image|mimes:png,jpg,jpeg',
            ]);
        }
        else{
            $this->validate($request, [
                'name' => 'required',
                'email' => 'required|unique:pesertas,email',
                'whatsapp' => 'required',
                'instagram' => 'required',
                'universitas_name' => 'required',
                'payment_proof' => 'required|image|mimes:png,jpg,jpeg'
            ]);
        }

        // $imageName = time() . '.' . $request->photo_path->extension();

        // $request->photo_path->move(public_path('photo_path'), $imageName);

        if($isSMA){
                $photo_path = $request->file('photo_path');
                $photo_path->storeAs('public/photo_path', $photo_path->hashName());
        }
        $payment_proof= $request->file('payment_proof');
        $payment_proof->storeAs('public/payment_proof', $payment_proof->hashName());

        if($isSMA){
                $peserta = Peserta::create([
                    'name' => $request->name,
                    'email' => $request->email,
                    'whatsapp' => $request->whatsapp,
                    'instagram' => $request->instagram,
                    'school_name' => $request->school_name,
                    'address' => $request->address,
                    'kelas' => $request->kelas,
                    'photo_path' => $photo_path->hashName(),
                    'peminatan' => $request->peminatan,
                    'info_source' => implode(',', $request->info_source),
                    'ptn1_id' => $request->ptn1_id,
                    'prodi_1' => $request->prodi_1,
                    'ptn2_id' => $request->ptn2_id,
                    'prodi_2' => $request->prodi_2,
                    'payment_proof_path' => $payment_proof->hashName(),
                    'jenjang' => $request->jenjang,
                    'kode' => $request->kode,
                ]);
        }
        elseif ($isSMA2) {
            $peserta = Peserta::create([
                'name' => $request->name,
                'email' => $request->email,
                'whatsapp' => $request->whatsapp,
                'school_name' => $request->school_name,
                'info_source' => implode(',', $request->info_source),
                'ptn1_id' => $request->ptn1_id,
                'prodi_1' => $request->prodi_1,
                'payment_proof_path' => $payment_proof->hashName(),
                'jenjang' => $request->jenjang,
            ]);
        }

        else{
            $peserta = Peserta::create([
                'name' => $request->name,
                'email' => $request->email,
                'whatsapp' => $request->whatsapp,
                'instagram' => $request->instagram,
                'school_name' => $request->universitas_name,
                'info_source' => implode(',', $request->info_source),
                'payment_proof_path' => $payment_proof->hashName(),
                'jenjang' => $request->jenjang
            ]);
        }

        if ($peserta) {
            //redirect dengan pesan sukses
            return view('landing.form-thankyou')->with(['success' => 'Pendaftaran Berhasil', 'title'=> 'Thanks For Registering']);
        } else {
            //redirect dengan pesan error
            return view('landing.form-thankyou')->with(['error' => 'Data Gagal Disimpan!']);
        }

        // return redirect('/form')->with('success', 'Tambah Data Berhasil');
    }

    public function contact(Request $request){
        Mail::send('email', [
            'name' => 'Sender',
            'email' => 'anonymous@email.com',
            'comment' => $request->query('question') ],
            function ($message) {
                    $message->from('admin@brebesedufair.com');
                    $message->to('admin@brebesedufair.com', 'Admin')
                    ->subject('Your Website Contact Form');
    });
    }
}
