@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">Öğrenci Ekle</div>
                    <div class="card-body">
                        @include('layouts.tabs.tab')
                        @if(session()->has('success'))
                            <div class="alert alert-success">
                                {{ session()->get('success') }}
                            </div>
                        @endif
                        <br>
                        <div class="row">
                            <form  method="post" action="{{url('/ogrenciler')}}"  style="width: 100%;" class="col-md-12 col-sm-12 col-xs-12 col-lg-12">
                                @csrf
                                <div class="form-group">
                                    <label for="formGroupExampleInput">Adı ve Soyadı</label>
                                    <input type="text" class="form-control @error('adi_soyadi') is-invalid @enderror"  name="adi_soyadi" required autocomplete="current-password" class="form-control" id="formGroupExampleInput" placeholder="">
                                    @error('adi_soyadi')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror

                                </div>
                                <div class="form-group">
                                    <label for="formGroupExampleInput2">Sınıfı</label>
                                    <input type="text" class="form-control @error('sinifi') is-invalid @enderror" name="sinifi" required autocomplete="current-password" class="form-control" id="formGroupExampleInput2" placeholder="">
                                    @error('sinifi')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="formGroupExampleInput2">Numarası</label>
                                    <input type="text" class="form-control @error('numarasi') is-invalid @enderror" name="numarasi" required autocomplete="current-password" class="form-control" id="formGroupExampleInput2" placeholder="">
                                    @error('numarasi')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="formGroupExampleInput2">Puanı</label>
                                    <input type="text" class="form-control @error('puani') is-invalid @enderror" name="puani" required autocomplete="current-password" class="form-control" id="formGroupExampleInput2" placeholder="">
                                    @error('puani')
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
