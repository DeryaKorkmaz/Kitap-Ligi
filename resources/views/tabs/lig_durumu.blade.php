@extends('layouts.ligheader')
@section('content')
    <div class="container-fluid">
    <div class="row" >
     <div class="col-md-2 text-center">
        <a href="/"><img src="meb_logo.png" class="img-responsive" style="margin:0 auto;height:100px;"></a>
       </div>
    <div class="col-md-6" id="isim">
        <div id="bakanlik" class="col-md-12"><br><h6 align="center"><b>T.C. MİLİ EĞİTİM BAKANLIĞI</b></h6></div>
        <div id="okul" class="col-md-12" ><h6 align="center"> <b>ELAZIĞ / MERKEZ - Şehit Eyyüp Oğuz Anadolu İmam Hatip Lisesi</b></h6></div>
    </div>
    <div class="col-md-4 ">
        <img src="atabayrak.png" class="img-responsive" style="margin:0 auto;">
    </div>
    </div>
    </div>

    <div class="container">
    <div class="row">
        <div class="col-md-3 text-center">
            <a href="/"><img src="kitap.png" class="img-responsive" style="margin:0 auto;height:100px;"></a>
        </div>
        <div class="col-md-4"  id="isim" size="100">
            <div class="" id="okul"><br><br>
                <h4 align="center"><b> 2018-2019 EĞİTİM-ÖĞRETİM YILI
                </b></h4>
                <h4 align="center"><b> KİTAP OKUMA LİGİ </b></h4>
            </div>
        </div>
    </div>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-12">
                <div class="card">
                    <div class="card-header"><b>Lig Durumu</b></div>
                    <div class="card-body">

                        @if(session()->has('success'))
                            <div class="alert alert-success">
                                {{ session()->get('success') }}
                            </div>
                        @endif
                        <div class="row">
                            <div class="container">
                                <table class="table table-striped table-striped">
                                    <thead>
                                    <tr>
                                        <th bgcolor="#7ca5ff">LİG SIRALAMASI</th>
                                        <th bgcolor="#7ca5ff">ADI SOYADI</th>
                                        <th bgcolor="#7ca5ff">SINIFI</th>
                                        <th bgcolor="#7ca5ff">PUANI</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($ogrenciler as $key_ogrenci=>$ogrenci)
                                        <tr >
                                            <td font size="300">{{($key_ogrenci+1)}}</td>
                                            <td  >{{$ogrenci->adi_soyadi}}</td>
                                            <td>{{$ogrenci->sinifi}}</td>
                                            <td>{{$ogrenci->puani}}</td>
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
