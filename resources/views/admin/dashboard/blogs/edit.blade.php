@extends('layouts.app', ['title' => 'Create - Page Admin'])

@section('content')

<main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-300">
    <div class="mx-auto container py-6 px-8">
            <div class="p-6 bg-white rounded-md shadow-md">
                <div><span class="font-bold text-gray-600 text-2xl">Edit Blog</span></div>
                <hr class="mt-2 mb-4">
                <form action="{{ route('admin.blogs.update',$blog->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <label class="block mb-3" for="">
                        <span class="text-gray-700 font-semibold">Featured Image</span>
                        <input type="file" name="image" class="form-input w-full mt-2 rounded-md bg-gray-100 focus:bg-white p-3" id="">
                        @error('image')
                            <div class="w-full bg-red-300 shadow-md rounded-md overflow-hidden mt-2">
                                <div class="px-4 py-2">
                                    <p class="text-gray-600 text-sm">{{$message}}</p>
                                </div>
                            </div>
                        @enderror
                    </label>

                    <label class="block mb-3" for="">
                        <span class="text-gray-700 font-semibold">Title</span>
                        <input type="text" name="title" class="bg-gray-100 outline-none form-input mt-1 block w-full rounded-md focus:bg-white" id="" value="{{ $blog->title}}">
                        @error('title')
                            <div class="w-full bg-red-300 shadow-md rounded-md overflow-hidden mt-2">
                                <div class="px-4 py-2">
                                    <p class="text-gray-600 text-sm">{{$message}}</p>
                                </div>
                            </div>
                        @enderror
                    </label>


                    <label class="block mb-3" for="">
                        <span class="text-gray-700 font-semibold">Content</span>
                        <textarea name="content" class="bg-gray-100 form-input mt-1 p-3 block w-full rounded-md focus:bg-white" id="">{!! $blog->content !!}</textarea>
                        @error('content')
                        <div class="w-full bg-red-300 shadow-md rounded-md overflow-hidden mt-2">
                            <div class="px-4 py-2">
                                <p class="text-gray-600 text-sm">{{$message}}</p>
                            </div>
                        </div>
                    @enderror
                    </label>


                    <label class="block mb-3" for="">
                        <span class="text-gray-700 font-semibold">Meta Title</span>
                        <input type="text" name="meta_title" class="bg-gray-100 outline-none form-input mt-1 block w-full rounded-md focus:bg-white" id="" value="{{ $blog->meta_title}}">
                        @error('title')
                            <div class="w-full bg-red-300 shadow-md rounded-md overflow-hidden mt-2">
                                <div class="px-4 py-2">
                                    <p class="text-gray-600 text-sm">{{$message}}</p>
                                </div>
                            </div>
                        @enderror
                    </label>

                    <label class="block mb-3" for="">
                        <span class="text-gray-700 font-semibold">Meta Keywords (bila lebih dari satu pisahkan dengan koma)</span>
                        <input type="text" name="meta_keyword" class="bg-gray-100 outline-none form-input mt-1 block w-full rounded-md focus:bg-white" id="" value="{{ $blog->meta_keyword}}">
                        @error('meta_keyword')
                            <div class="w-full bg-red-300 shadow-md rounded-md overflow-hidden mt-2">
                                <div class="px-4 py-2">
                                    <p class="text-gray-600 text-sm">{{$message}}</p>
                                </div>
                            </div>
                        @enderror
                    </label>

                    <label class="block mb-3" for="">
                        <span class="text-gray-700 font-semibold">Meta Description</span>
                        <textarea name="meta_desc" class="bg-gray-100 form-input mt-1 p-3 block w-full rounded-md focus:bg-white" id="">{!! $blog->meta_desc !!}</textarea>
                        @error('meta_desc')
                        <div class="w-full bg-red-300 shadow-md rounded-md overflow-hidden mt-2">
                            <div class="px-4 py-2">
                                <p class="text-gray-600 text-sm">{{$message}}</p>
                            </div>
                        </div>
                    @enderror
                    </label>

                    <label class="block mb-3" for="">
                        <span class="text-gray-700 font-semibold">Status</span>
                        <select name="status" class="bg-gray-100 outline-none form-input mt-1 block w-full rounded-md focus:bg-white" id="">
                                <option {{$blog->status == "published"?"selected":null}}  value="published">Published</option>
                                <option {{$blog->status == "draft"?"selected":null}} value="draft">Draft</option>
                        </select>
                        @error('status')
                            <div class="w-full bg-red-300 shadow-md rounded-md overflow-hidden mt-2">
                                <div class="px-4 py-2">
                                    <p class="text-gray-600 text-sm">{{$message}}</p>
                                </div>
                            </div>
                        @enderror
                    </label>


                    <div class="mt-3">
                        <button class="bg-indigo-500 rounded-md px-4 py-2 hover:outline-none text-white">Submit</button>
                    </div>
                </form>
            </div>
    </div>
</main>
<script>
tinymce.init({
    selector: 'textarea',
    plugins: 'link',
    toolbar: 'link'
 });
</script>
@endsection
