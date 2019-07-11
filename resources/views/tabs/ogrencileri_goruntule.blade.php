@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">Öğrencileri Görüntüle</div>
                    <div class="card-body">
                        @include('layouts.tabs.tab')
                        @if(session()->has('success'))
                            <div class="alert alert-success">
                                {{ session()->get('success') }}
                            </div>
                        @endif
                        <br><br>
                        <div class="row">
                            <div class="container">
                                <table class="table table-striped table-striped">
                                    <thead>
                                    <tr>
                                        <th bgcolor="#aabbcc">Sırası</th>
                                        <th bgcolor="#aabbcc">Adı Soyadı</th>
                                        <th bgcolor="#aabbcc">Sınıfı</th>
                                        <th bgcolor="#aabbcc">Numarası</th>
                                        <th bgcolor="#aabbcc">Puanı</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($ogrenciler as $key_ogrenci=>$ogrenci)
                                        <tr>
                                            <td>{{($key_ogrenci+1)}}</td>
                                            <td>{{$ogrenci->adi_soyadi}}</td>
                                            <td>{{$ogrenci->sinifi}}</td>
                                            <td>{{$ogrenci->numarasi}}</td>
                                            <td>{{$ogrenci->puani}}</td>
                                            <td>
                                                <form action="{{route('ogrenciler.destroy',$ogrenci->id)}}"  method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="btn btn-danger"  type="submit">SİL</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
