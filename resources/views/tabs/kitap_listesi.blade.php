@extends('layouts.app')

@section('content')
    <body>
    <div class="container">
               <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">Kitap Listesi</div>
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
                                <table class="table table-striped table">
                                    <thead>
                                    <tr>
                                        <th bgcolor="#aabbcc">Sırası</th>
                                        <th bgcolor="#aabbcc">Kitap Adı</th>
                                        <th bgcolor="#aabbcc">Kitabın Yazarı</th>
                                        <th bgcolor="#aabbcc">Sayfa Sayısı</th>
                                        <th bgcolor="#aabbcc">Verilen Süre</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($kitaplar as $key_kitap=>$kitap)
                                        <tr>
                                            <td>{{($key_kitap+1)}}</td>
                                            <td>{{$kitap->kitap_adi}}</td>
                                            <td>{{$kitap->kitap_yazari}}</td>
                                            <td>{{$kitap->sayfa_numarasi}}</td>
                                            <td>{{$kitap->süre_siniri}}</td>
                                            <td>
                                                <form action="{{route('kitaplar.destroy',$kitap->id)}}"  method="post">
                                                    @csrf
                                                    @method('DELETE')

                                                    <button class="btn btn-danger"  type="submit">SİL
                                                        <i class="far fa-trash-alt fa-2x"></i>
                                                    </button>
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
    </body>
@endsection
