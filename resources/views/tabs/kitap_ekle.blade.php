@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">Kitap Ekle</div>
                    <div class="card-body">
                        @include('layouts.tabs.tab')
                        @if(session()->has('success'))
                            <div class="alert alert-success">
                                {{ session()->get('success') }}
                            </div>
                        @endif
                        <br>
                        <div class="row">
                            <form  method="post" action="{{url('/kitaplar')}}"  style="width: 100%;" class="col-md-12 col-sm-12 col-xs-12 col-lg-12">
                                @csrf
                                <div class="form-group">
                                    <label for="formGroupExampleInput">Kitap Adı</label>
                                    <input type="text" class="form-control @error('kitap_adi') is-invalid @enderror" name="kitap_adi" required autocomplete="current-password" class="form-control" id="formGroupExampleInput" placeholder="">
                                    @error('kitap_adi')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="formGroupExampleInput2">Kitabın Yazarı</label>
                                    <input type="text" class="form-control @error('kitap_yazari') is-invalid @enderror" name="kitap_yazari" required autocomplete="current-password" class="form-control" id="formGroupExampleInput2" placeholder="">
                                    @error('kitap_yazari')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="formGroupExampleInput2">Sayfa Sayısı</label>
                                    <input type="text" class="form-control @error('sayfa_numarasi') is-invalid @enderror" name="sayfa_numarasi" required autocomplete="current-password" class="form-control" id="formGroupExampleInput2" placeholder="">
                                    @error('sayfa_numarasi')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="formGroupExampleInput2">Verilen Süre</label>
                                    <input type="text" class="form-control @error('süre_siniri') is-invalid @enderror" name="süre_siniri" required autocomplete="current-password" class="form-control" id="formGroupExampleInput2" placeholder="">
                                    @error('süre_siniri')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <input type="submit" class="btn btn-danger" value="KAYDET">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
