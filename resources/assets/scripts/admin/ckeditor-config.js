class MyUploadAdapter {
    //constructor(loader): Nhận đối tượng loader, đại diện cho tệp hình ảnh được tải lên.
    constructor(loader) {
      this.loader = loader;
    }
    //upload(): Xử lý việc tải lên hình ảnh.
    upload() {
      return this.loader.file.then(file => {
        const data = new FormData();
        data.append('upload', file);
        return fetch("/admin/upload-image", {
            //Tạo một đối tượng FormData và gửi tệp qua phương thức HTTP POST đến route Laravel được cấu hình.
          method: 'POST',
          body: data,
          headers: {
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
          }
        })
        //Trả về URL của ảnh từ server (thông qua JSON response). CKEditor sẽ sử dụng URL này để hiển thị ảnh trong nội dung.
          .then(response => response.json())
          .then(result => {
              if (!result || !result.url) {
                  return Promise.reject('Upload failed');
              }
              return {
                  default: result.url
              };
          });
      });
    }
    abort() {
      // Xử lý khi hủy upload
    }
  }
  //Đăng ký MyUploadAdapter với hệ thống upload của CKEditor (FileRepository).
  function MyCustomUploadAdapterPlugin(editor) {
    editor.plugins.get('FileRepository').createUploadAdapter = loader => {
        return new MyUploadAdapter(loader);
    };
  }
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
    // SimpleUploadAdapter,
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
      Underline,
    ],
    toolbar: [
      'heading',
      '|',
      'bold',
      'italic',
      'underline',
      '|',
      'link',
      'uploadImage',
      'mediaEmbed',
      'insertTable',
      'blockQuote',
      '|',
      'bulletedList',
      'numberedList',
      'todoList',
      'outdent',
      'indent'
    ],
    //Tích hợp plugin MyCustomUploadAdapterPlugin để CKEditor sử dụng adapter tùy chỉnh.
    extraPlugins: [MyCustomUploadAdapterPlugin]
  } )
  .then( editor => {
    window.editor = editor;
  } )
  .catch( error => {
    console.error( error );
  } );