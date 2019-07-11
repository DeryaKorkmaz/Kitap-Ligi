<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
    <a class="navbar-brand" href="#">Kitap Okuma Ligi</a>
    <ul class="nav nav-tabs">

        <li class="nav-item dropdown">
            <a class="nav-link @if(isset($activemenu)){{$activemenu==1 ?"active":""}} @endif" href="{{url('/kitaplar/create')}} ">Kitap Ekle</a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link @if(isset($activemenu)){{$activemenu==2 ?"active":""}} @endif" href="{{url('/kitaplar')}}">Kitap Listesi</a>
        </li>
        <li class="nav-item">
            <a class="nav-link @if(isset($activemenu)){{$activemenu==3 ?"active":""}} @endif" href="{{url('/ogrenciler/create')}}">Öğrenci Ekle</a>
        </li>
        <li class="nav-item">
            <a class="nav-link @if(isset($activemenu)){{$activemenu==4 ?"active":""}} @endif" href="{{url('/ogrenciler')}}">Öğrencileri Görüntüle</a>
        </li>
        <li class="nav-item">
            <a class="nav-link @if(isset($activemenu)){{$activemenu==5 ?"active":""}} @endif" href="{{url('/ligdurumu')}}">Lig Durumu</a>
        </li>
    </ul>
</nav>