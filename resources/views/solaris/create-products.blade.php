@extends('solaris.module')
@section('title',' - Ürün Ekle')
@section('modulecontent')


    <div class="portlet-box">
        <div class="portlet-header flex-row flex d-flex align-items-center">
            <a href="/solaris/add/products" class="btn btn-rounded btn-primary btn-sm m-r-5">Yeni Ekle</a>
            <a href="/solaris/products" class="btn btn-rounded btn-danger btn-sm  m-r-5">Tüm Ürünler</a>
        </div>

        <form class="form-horizontal" method="POST" action="/solaris/addproduct" id="formData" style="padding: 15px"
              enctype="multipart/form-data">
            {{ csrf_field() }}
            @if(!empty($cData->data)) <input type="hidden" name="degisID" value="{{$cData->data->id}}"> @endif
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="title">Ürün İsmi</label>
                    <input type="text" class="form-control" name="title"
                           value="@if(!empty($cData->data)){{$cData->data->title}}@endisset"
                           autofocus>
                </div>
                <div class="form-group col-md-6">
                    <label for="type">Kategorisi</label>
                    <select class="form-control" name="category" id="ustKategori">
                        <option value="0"
                                @if(!empty($cData->data) && $cData->data->id == 0) selected @endif>
                            Lütfen Seçin
                        </option>

                        @isset($cData->categories )
                            @foreach($cData->categories as $category)
                                <option value="{{$category->id}}"
                                        @if(!empty($cData->data) && $cData->data->category_id == $category->id) selected @endif>{{$category->title}}</option>

                                @if(count($category->childs))
                                    @php $padding = " "; @endphp

                                    @if(!empty($cData)) @include('solaris.categories.subCategories',['childs' => $category->childs,'padding'=> $padding,'cData'=>$cData])
                                    @else @include('solaris.categories.subCategories',['childs' => $category->childs,'padding'=> $padding])
                                    @endif

                                @endif

                            @endforeach
                        @endisset


                    </select>
                </div>

                <div class="form-group col-md-3">
                    <label for="title">Model</label>
                    <input type="text" class="form-control" name="model"
                           value="@if(!empty($cData->data)){{$cData->data->model}}@endif"
                           autofocus>
                </div>


                <div class="form-group col-md-2">
                    <label for="title">Sıra</label>
                    <input type="text" class="form-control" name="sort"
                           value="@if(!empty($cData->data)){{$cData->data->sort}}@endisset"
                           autofocus>
                </div>

                <div class="customUi-checkbox checkbox-rounded checkboxUi-primary  pb-2" style="margin-top: 30px;">
                    <input id="sqr" type="checkbox" name="active" value="1"
                           @if(!empty($cData->data) and $cData->data->active==1) checked @endisset>
                    <label for="sqr">
                        <span class="label-checkbox"></span>
                        <small class="label-helper">Aktif</small>
                    </label>
                </div>

            </div>


            <div class="form-row">
                <div class="form-group col-md-12">
                    <label for="title">Açıklama</label>
                    <textarea class="form-control" name="shortdescription"
                              value=""
                              autofocus>@if(!empty($cData->data)){{$cData->data->shortdescription}}@endisset</textarea>
                </div>

            </div>

            <div class="form-row">
                <div class="form-group col-md-12">
                        <textarea class="form-control" id="summary-ckeditor"
                                  name="description">@if(!empty($cData->data)){{$cData->data->description}}@endisset</textarea>
                </div>

            </div>


            <div class="form-row">
                <div class="form-group col-md-12">
                    <label for="title">Genel Özellikler</label>
                    <textarea class="form-control" id="summary-ckeditor2"
                              name="features">@if(!empty($cData->data)){{$cData->data->features}}@endisset</textarea>
                </div>
                <div class="form-group col-md-12">
                    <label for="title">Detay Bilgiler</label>
                    <textarea class="form-control" id="summary-ckeditor4"
                              name="details">@if(!empty($cData->data)){{$cData->data->details}}@endisset</textarea>
                </div>

                <div class="form-group col-md-12">
                    <label for="title">Teknik Bilgiler</label>
                    <textarea class="form-control" id="summary-ckeditor3"
                              name="infos">@if(!empty($cData->data)){{$cData->data->infos}}@endisset</textarea>
                </div>

                <div class="form-group col-md-4">
                    <label for="title">Açılır Kapanır Özellikler Başlık</label>
                    <input type="text" class="form-control" name="openinfostitle"
                           value="@if(!empty($cData->data)){{$cData->data->openinfostitle}}@endisset"
                           autofocus>
                </div>

                <div class="form-group col-md-12">
                    <label for="title">Açılır Kapanır Özellikler</label>
                    <textarea class="form-control" id="summary-ckeditor5"
                              name="openinfos">@if(!empty($cData->data)){{$cData->data->openinfos}}@endisset</textarea>
                </div>

                <div class="form-group col-md-6">
                    <label for="title">Ürün Resim Adı</label>
                    <input type="text" class="form-control" name="urunfoto"
                           value="@if(!empty($cData->data)){{$cData->data->urunfoto}}@endisset"
                           autofocus>
                </div>

                <div class="form-group col-md-6">
                    <label for="title">Ürün Rengi</label>
                    <input type="text" class="form-control" name="urunrenk"
                           value="@if(!empty($cData->data)){{$cData->data->urunrenk}}@endisset"
                           autofocus>
                </div>


                <div class="form-group col-md-12">
                    <label for="document">Dosyalar</label>
                    <input type="file"
                           class="filepond"
                           name="file[]"
                           multiple
                           data-allow-reorder="true">
                </div>


            </div>

            <div class="form-group">
                <div class="col-md-12 text-center">
                    <button type="submit" class="btn btn-primary">
                        Kaydet
                    </button>
                </div>
            </div>
        </form>


    </div>



    <script src="//cdn.ckeditor.com/4.14.0/full/ckeditor.js"></script>

    <script>

        CKEDITOR.replace('summary-ckeditor', {
            filebrowserUploadUrl: "{{route('ckupload', ['_token' => csrf_token() ])}}",
            filebrowserUploadMethod: 'form',
            height: 500
        });

        CKEDITOR.replace('summary-ckeditor2', {
            filebrowserUploadUrl: "{{route('ckupload', ['_token' => csrf_token() ])}}",
            filebrowserUploadMethod: 'form',
            height: 300
        });

        CKEDITOR.replace('summary-ckeditor3', {
            filebrowserUploadUrl: "{{route('ckupload', ['_token' => csrf_token() ])}}",
            filebrowserUploadMethod: 'form',
            height: 300
        });

        CKEDITOR.replace('summary-ckeditor4', {
            filebrowserUploadUrl: "{{route('ckupload', ['_token' => csrf_token() ])}}",
            filebrowserUploadMethod: 'form',
            height: 300
        });

        CKEDITOR.replace('summary-ckeditor5', {
            filebrowserUploadUrl: "{{route('ckupload', ['_token' => csrf_token() ])}}",
            filebrowserUploadMethod: 'form',
            height: 300
        });


        FilePond.registerPlugin(
            FilePondPluginImageCrop,
            FilePondPluginImagePreview,
            FilePondPluginFilePoster
        );

        // Get a reference to the file input element
        const inputElement = document.querySelector('.filepond');

        // Create the FilePond instance
        const pond = FilePond.create(inputElement, {
            allowImageEdit: true,
            labelIdle: 'Sürükle ya da <span class="filepond--label-action"> seç </span>',
            styleImageEditButtonEditItemPosition: 'top',
            imageCropAspectRatio: '1:1',
            itemInsertLocation: 'after',
            allowReorder: 'true',
            onreorderfiles: (files, origin, target) => {
                var images = []
                files.forEach(element => {
                    images.push(element.file.name)
                });
                $.ajax({
                    method: "POST",
                    url: "/solaris/sortfiles",
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    data: {file: images}
                })
                    .done(function (msg) {
                        console.log(msg);
                    });

            },

            server: {
                url: '/filepond/api',
                process: '/process',

                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                load: (source, load, error, progress, abort, headers) => {
                    var request = new Request(source);
                    fetch(request).then(function (response) {
                        response.blob().then(function (myBlob) {
                            load(myBlob)
                        });
                    });

                },

                remove: (source, load, error, options) => {
                    console.log(source);
                    console.log(options);

                    $.ajax({
                        method: "POST",
                        url: "/solaris/deletefile",
                        headers: {
                            'X-CSRF-TOKEN': '{{ csrf_token() }}'
                        },
                        data: {file: source}
                    })
                        .done(function (msg) {
                            console.log(msg);
                        });
                    load();


                },

            }
            @isset($cData->data)
            , files: [
                    @foreach($cData->data->files as $key=>$val)
                {
                    source: '{{config('solaris.site.url').Storage::url("images/userfiles/".$val->file)}}',
                    options: {
                        type: 'local',

                    },
                    metadata: {
                        poster: '{{config('solaris.site.url').Storage::url("images/userfiles/".$val->file)}}'
                    }
                }
                @if(!$loop->last) , @endif
                @endforeach
            ],

            @endisset

        });


    </script>
@endsection
