@extends('backend.layout.root')
@section('content')

    <div class="page-wrapper mdc-toolbar-fixed-adjust">

        <div class="mdc-layout-grid">
            <div class="mdc-layout-grid__inner">
                <div class="mdc-layout-grid__cell--span-12">
                    <div class="mdc-card">
                        <h6 class="card-title">Terms & Conditions</h6>
                        <form action="{{ route('privacyPolicy.update', ['privacyPolicy' => $privacyPolicy ?? '']) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="template-demo">
                                <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">
                                    <textarea id="editor" name="content" rows="10" style="width: 100%; height: 600px;">{{$privacyPolicy?->content}}</textarea>
                                </div>
                            </div>
                            <button type="submit" class="mdc-button mdc-button--outlined outlined-button--success">Save</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>
    <script>
        ClassicEditor
            .create( document.querySelector( '#editor' ) )
            .then( editor => {
                console.log( editor );
            } )
            .catch( error => {
                console.error( error );
            } );
    </script>

@endsection


