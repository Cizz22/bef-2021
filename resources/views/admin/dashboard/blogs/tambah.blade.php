@extends('layouts.app', ['title' => 'Create - Page Admin'])

@section('content')

<main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-300">
    <div class="mx-auto container py-6 px-8">
            <div class="p-6 bg-white rounded-md shadow-md">
                <div><span class="font-bold text-gray-600 text-2xl">Add Blog</span></div>
                <hr class="mt-2 mb-4">
                <form action="{{ route('admin.blogs.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
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
                        <input type="text" name="title" class="bg-gray-100 outline-none form-input mt-1 block w-full rounded-md focus:bg-white" id="" value="{{ old('title') }}">
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
                        <textarea name="content" id="content" class="bg-gray-100 form-input mt-1 p-3 block w-full rounded-md focus:bg-white" id=""></textarea>
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
                        <input type="text" name="meta_title" class="bg-gray-100 outline-none form-input mt-1 block w-full rounded-md focus:bg-white" id="" value="{{ old('title') }}">
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
                        <input type="text" name="meta_keyword" class="bg-gray-100 outline-none form-input mt-1 block w-full rounded-md focus:bg-white" id="" value="{{ old('title') }}">
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
                        <textarea name="meta_desc" class="bg-gray-100 form-input mt-1 p-3 block w-full rounded-md focus:bg-white" id=""></textarea>
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
                                <option value="published">Published</option>
                                <option value="draft">Draft</option>
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
  plugins: 'print preview paste importcss searchreplace autolink autosave save directionality code visualblocks visualchars fullscreen image link media template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists wordcount imagetools textpattern noneditable help charmap quickbars emoticons',
  imagetools_cors_hosts: ['picsum.photos'],
  menubar: 'file edit view insert format tools table help',
  toolbar: 'undo redo | bold italic underline strikethrough | fontselect fontsizeselect formatselect | alignleft aligncenter alignright alignjustify | outdent indent |  numlist bullist | forecolor backcolor removeformat | pagebreak | charmap emoticons | fullscreen  preview save print | insertfile image media template link anchor codesample | ltr rtl',
  toolbar_sticky: true,
  autosave_ask_before_unload: true,
  extended_valid_elements : 'script[src|async|defer|type|charset]',
  autosave_interval: '30s',
  autosave_prefix: '{path}{query}-{id}-',
  autosave_restore_when_empty: false,
  autosave_retention: '2m',
  image_advtab: true,
  importcss_append: true,
  file_picker_callback: function (callback, value, meta) {
    /* Provide file and text for the link dialog */
    if (meta.filetype === 'file') {
      callback('https://www.google.com/logos/google.jpg', { text: 'My text' });
    }

    /* Provide image and alt text for the image dialog */
    if (meta.filetype === 'image') {
      callback('https://www.google.com/logos/google.jpg', { alt: 'My alt text' });
    }

    /* Provide alternative source and posted for the media dialog */
    if (meta.filetype === 'media') {
      callback('movie.mp4', { source2: 'alt.ogg', poster: 'https://www.google.com/logos/google.jpg' });
    }
  },
  templates: [
        { title: 'New Table', description: 'creates a new table', content: '<div class="mceTmpl"><table width="98%%"  border="0" cellspacing="0" cellpadding="0"><tr><th scope="col"> </th><th scope="col"> </th></tr><tr><td> </td><td> </td></tr></table></div>' },
    { title: 'Starting my story', description: 'A cure for writers block', content: 'Once upon a time...' },
    { title: 'New list with dates', description: 'New List with dates', content: '<div class="mceTmpl"><span class="cdate">cdate</span><br /><span class="mdate">mdate</span><h2>My List</h2><ul><li></li><li></li></ul></div>' }
  ],
  template_cdate_format: '[Date Created (CDATE): %m/%d/%Y : %H:%M:%S]',
  template_mdate_format: '[Date Modified (MDATE): %m/%d/%Y : %H:%M:%S]',
  height: 600,
  image_caption: true,
  quickbars_selection_toolbar: 'bold italic | quicklink h2 h3 blockquote quickimage quicktable',
  noneditable_noneditable_class: 'mceNonEditable',
  toolbar_mode: 'sliding',
  contextmenu: 'link image imagetools table',
  content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:14px }'
 });
</script>
@endsection
