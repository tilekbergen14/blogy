@extends("layouts.admin")

@section('content')
    <main class="col-md-9 ms-sm-auto col-lg-10 py-2">
        <div class="d-flex justify-content-between border-bottom border-primary mb-4">
            <h5 style="font-weight: bold" class="py-2 text-dark text-uppercase">New blog</h5>
            @if ($blog)
                <form method="POST" action="{{ route('blog-delete', $blog) }}">
                    @csrf
                    @method("delete")
                    <button class="btn btn-danger p-2">
                        Delete blog
                    </button>
                </form>
            @endif
        </div>
        <form method="POST" action="{{ route('add-blog') }}" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="id" value="{{ $blog ? $blog->id : null }}">
            @error('title')
                <p class="text-start text-danger w-100 m-0" style="font-size: 14px">{{ $message }}</p>
            @enderror
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Title</span>
                <input name="title" value="{{ $blog ? $blog->title : old('title') }}" type="text" class="form-control"
                    placeholder="Title" aria-label="title" aria-describedby="basic-addon1">
            </div>
            @error('subtitle')
                <p class="text-start text-danger w-100 m-0" style="font-size: 14px">{{ $message }}</p>
            @enderror
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Subtitle</span>
                <input name="subtitle" value="{{ $blog ? $blog->subtitle : old('subtitle') }}" type="text"
                    class="form-control" placeholder="Subtitle" aria-label="subtitle" aria-describedby="basic-addon1">
            </div>

            @error('image')
                <p class="text-start text-danger w-100 m-0" style="font-size: 14px">{{ $message }}</p>
            @enderror
            @if ($blog && $blog->image)
                <input type="hidden" value="{{ $blog->image }}" name="existedImage">
                <img src="{{ $blog->image }}" style="max-width: 100%; aspect-ratio: 16 / 9; object-fit: cover"
                    class="uploaded-img mb-4" alt="{{ $blog->name }}">
            @endif
            @error('image')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <div class="input-group mb-3 flex-nowrap">
                <input type="file" class="form-control" id="file" name="image" />
                <label style="width: 120px" class="input-group-text"
                    for="inputGroupFile02">{{ $blog && $blog->image ? 'New image' : 'Image' }}</label>
            </div>

            @error('content')
                <p class="text-start text-danger w-100 m-0" style="font-size: 14px">{{ $message }}</p>
            @enderror
            <input type="hidden" id="tinycontent" name="tinycontent"
                value="{{ $blog ? $blog->content : old('tinycontent') }}">
            <div class="form-floating">
                <div class="input-group">
                    <textarea name="content" class="form-control tinymce w-100" style="height: 400px"></textarea>
                </div>
            </div>
            <button type="submit" class="btn btn-warning mt-4 w-100">Add</button>
        </form>
    </main>
@endsection
@section('scripts')
    <script src="{{ asset('js/tinymce/tinymce.min.js') }}" referrerpolicy="origin"></script>
    <script>
        const content = document.getElementById("tinycontent").value;
        tinymce.init({
            selector: 'textarea.tinymce', // Replace this CSS selector to match the placeholder element for TinyMCE
            plugins: 'code table lists',
            setup: function(editor) {
                editor.on('init', function(e) {
                    editor.setContent(content);
                });
            },
            toolbar: 'undo redo | formatselect| bold italic | alignleft aligncenter alignright | indent outdent | bullist numlist | code'
        });
    </script>
@endsection
