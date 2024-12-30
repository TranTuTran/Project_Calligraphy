@extends('admin.layout')
@section('content')
  
<div class="container-fluid">
  <h4 class="c-grey-900 mT-10 mB-30">Lesson</h4>
  <div class="row">
    <div class="col-md-12">
      <div class="bgc-white bd bdrs-3 p-20 mB-20">
        <h4 class="c-grey-900 mB-20">Create Lesson</h4>
        @include('admin.commons.form-validate')
        <form method="POST" action="{{ route('admin.lesson.store') }}" enctype="multipart/form-data">
          @csrf
          <div class="row">
            <div class="col-md-3">
              <figure class="figure block-preview-image">
                <div style="width: 150px; height: 150px; overflow: hidden"><img src="https://placehold.co/400x400" id="preview" class="figure-img img-fluid rounded-circle w-100 h-100" alt="..."></div>
                <input type="file" style="display: none" name="thumbnail" id="imageInput" accept="image/*">
                <hr/>
                <figcaption class="figure-caption"><a class="btn btn-primary changeImageBtn">Change image</a></figcaption>
              </figure>
            </div>
            <div class="col-md-9">
              <div class="row">
                <div class="mb-3 col-md-12">
                  <label class="form-label" for="inputEmail4">Lesson Name</label>
                  <input type="text" name="title" class="form-control" id="inputEmail4" placeholder="Lesson title" value="{{ old('title') }}">
                </div>
                <div class="mb-3 col-md-12">
                  <label class="form-label" for="inputEmail4">Short Description</label>
                  <textarea name="short_description" class="form-control" id="inputEmail4">{{ old('short_description') }}</textarea>
                </div>
                <div class="row">
                  <div class="mb-3 col-md-12">
                    <label class="form-label" for="inputState">Level</label>
                    <select id="inputState" name="level_id" class="form-control">
                      <option selected="selected">Choose level</option>
                      {
                        @foreach($levels as $level)
                          <option value="{{ $level->id }}" {{ $level->id == old('level_id') ? 'selected' : '' }}>{{ $level->name }}</option>
                        @endforeach
                      }
                    </select>
                  </div>
                  <div class="mb-3 col-md-12">
                    <label class="form-label" for="inputState">National</label>
                    <select id="inputState" name="national_id" class="form-control">
                      <option selected="selected">Choose national</option>
                      {
                        @foreach($nationals as $national)
                          <option value="{{ $national->id }}" {{ $national->id == old('national_id') ? 'selected' : '' }}>{{ $national->name }}</option>
                        @endforeach
                      }
                    </select>
                  </div>
                  <div class="mb-3 col-md-12">
                    <label class="form-label" for="inputState">Category</label>
                    <select id="inputState" name="category_id" class="form-control">
                      <option selected="selected">Choose category</option>
                      {
                        @foreach($categories as $category)
                          <option value="{{ $category->id }}" {{ $category->id == old('category_id') ? 'selected' : '' }}>{{ $category->name }}</option>
                        @endforeach
                      }
                    </select>
                  </div>
                </div>
                <div class="mb-3 col-md-12">
                  <label class="form-label" for="inputEmail4">Content</label>
                  <textarea name="content" class="form-control" id="editor">{{ old('content') }}</textarea>
                </div>
              </div>
              <button type="submit" class="btn btn-primary btn-color">Save</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
@section('scripts')
<script>
const {
  ClassicEditor,
  Essentials,
  Bold,
  Italic,
  Font,
  Paragraph,
  Autoformat,
  AutoImage,
  Autosave,
  BlockQuote,
  CKBox,
  CKBoxImageEdit,
  CloudServices,
  Heading,
  ImageBlock,
  ImageCaption,
  ImageInline,
  ImageInsert,
  ImageInsertViaUrl,
  ImageResize,
  ImageStyle,
  ImageTextAlternative,
  ImageToolbar,
  ImageUpload,
  Indent,
  IndentBlock,
  Link,
  LinkImage,
  List,
  ListProperties,
  MediaEmbed,
  PasteFromOffice,
  PictureEditing,
  Table,
  TableCaption,
  TableCellProperties,
  TableColumnResize,
  TableProperties,
  TableToolbar,
  TextTransformation,
  TodoList,
  Underline
} = CKEDITOR;
ClassicEditor
  .create( document.querySelector( '#editor' ), {
    licenseKey: 'eyJhbGciOiJFUzI1NiJ9.eyJleHAiOjE3MzU4NjIzOTksImp0aSI6ImM3NDQ3YmQzLWFhZTEtNGU3MS05M2Y4LTZhNzI4N2M1ZTQ3NyIsInVzYWdlRW5kcG9pbnQiOiJodHRwczovL3Byb3h5LWV2ZW50LmNrZWRpdG9yLmNvbSIsImRpc3RyaWJ1dGlvbkNoYW5uZWwiOlsiY2xvdWQiLCJkcnVwYWwiLCJzaCJdLCJ3aGl0ZUxhYmVsIjp0cnVlLCJsaWNlbnNlVHlwZSI6InRyaWFsIiwiZmVhdHVyZXMiOlsiKiJdLCJ2YyI6IjA2NmFhN2UzIn0.YZaBLc2rlmPMLsYP34Ube-txPkJzOtn4qY3Kxclg83SsW-iE1bCBrIKoSCjFfJc80QTAsBfvKnAzQxTS6PVoEw', // Create a free account on https://portal.ckeditor.com/checkout?plan=free
    plugins: [
      Autoformat,
      AutoImage,
      Autosave,
      BlockQuote,
      Bold,
      // CKBox,
      CKBoxImageEdit,
      CloudServices,
      Essentials,
      Heading,
      ImageBlock,
      ImageCaption,
      ImageInline,
      ImageInsert,
      ImageInsertViaUrl,
      ImageResize,
      ImageStyle,
      ImageTextAlternative,
      ImageToolbar,
      ImageUpload,
      Indent,
      IndentBlock,
      Italic,
      Link,
      LinkImage,
      List,
      ListProperties,
      MediaEmbed,
      Paragraph,
      PasteFromOffice,
      PictureEditing,
      Table,
      TableCaption,
      TableCellProperties,
      TableColumnResize,
      TableProperties,
      TableToolbar,
      TextTransformation,
      TodoList,
      Underline
    ],
    toolbar: [
      'heading',
      '|',
      'bold',
      'italic',
      'underline',
      '|',
      'link',
      'insertImage',
      // 'ckbox',
      'mediaEmbed',
      'insertTable',
      'blockQuote',
      '|',
      'bulletedList',
      'numberedList',
      'todoList',
      'outdent',
      'indent'
    ]
  } )
    .then( editor => {
      window.editor = editor;
    } )
    .catch( error => {
      console.error( error );
    } );
</script>
@endsection