@extends('layout/main')

@section('title', 'Katalog PST')

@section('container')

<main role="main">
  <section class="py-2 text-center container">
    <div class="row py-lg-5">
      <div class="col-lg-6 col-md-8 mx-auto">
        <h2 style="color: #117a8b">Katalog Publikasi BPS</h2>
        <form>
          <div class="d-flex">
            <input id="search" class="form-control me-2" type="search" placeholder="Cari Judul" aria-label="Search"
              name="search" style="margin-right: 5px; border-color:#17a2b8" value="{{Request::get('search')}}">
            <button class="btn btn-outline-info" onclick="search()">Cari</button>
          </div>
          <div class="d-flex justify-context-left">
            <!--<div class="dropdown mt-2">
              <button class="btn btn-info btn-sm dropdown-toggle" type="button" id="dropdownMenuButton"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Kabupaten/Kota
              </button>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item px-2 " href="#" style="display:inline;"><input type="radio"
                    name="radio">&nbsp;1600 - Prov. Sumatera Selatan</a>
                {{-- @foreach ($domain as $item) --}}
                <label class="dropdown-item px-2" href="#" style="display:inline;"><input type="radio"
                    {{-- name="radio">&nbsp;{{$item->id}} - {{$item->nama}}</label> --}}
            {{-- @endforeach --}}
          </div>
      </div> -->
            <div class="input-group mt-2 rounded" style="width: 60%; ">
              <div class="input-group-prepend" style=" border-color:#17a2b8">
                <label class="input-group-text" style=" border-color:#17a2b8; font-size: 12px; background: #17a2b8;
                color: white;" for="inputGroupSelect01">Kab/Kot</label>
              </div>
              <select class="custom-select" style=" border-color:#17a2b8;font-size: 12px" id="inputGroupSelect01">
                <option selected value="1600">1600 - Prov. Sumatera Selatan</option>
                @foreach ($domain as $item)
                <option value="{{$item->id}}">{{$item->id}} - {{$item->nama}}</option>
                @endforeach
              </select>
            </div>
          </div>
        </form>
      </div>
    </div>
  </section>
  <div class="album py-5 bg-light">
    <div class="container">
      <div class="row">
        @foreach($publikasi as $value)
        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
            <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="{{ $value->cover}}" role="img"
              aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
              {{-- <title>Placeholder</title> --}}
              <rect width="100%" height="100%" fill="#17a2b8" />
              {{-- <text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text> --}}
              <image href="{{ $value->cover}}" width="100%" height="100%" />
            </svg>
            <div class="card-body">
              {{-- <p id="{{$value->pub_id}}"></var> --}}
              <p class="card-text">{{$value->title}}</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <p id="{{$value->pub_id}}" hidden></P>
                  <button type="button" class="rincibtn btn btn-sm btn-outline-secondary"
                    {{-- onclick="rincibtn(<?php echo $value->pub_id?>)" --}}>Lebih
                    rinci</button>
                </div>
                <small class="text-muted">{{$value->sch_date}}</small>
              </div>
            </div>
          </div>
        </div>
        @endforeach
      </div>
      <nav aria-label="...">
        <ul class="pagination justify-content-end">
          @if($info->page>1)
          <li class="page-item"><button class="page-link" onclick="pgclick(1)">1</button></li>
          <li class="page-item"><span class="page-link">...</span></li>
          @endif
          @if($info->page>2)
          <li class="page-item"><button class="page-link"
              onclick="pgclick({{$info->page - 1}})">{{$info->page - 1}}</button></li>
          @endif
          <li class="page-item disabled"><button class="page-link"
              onclick="pgclick({{$info->page}})">{{$info->page}}</button></li>
          @if($info->page+1 < $info->pages)
            <li class="page-item"><button class="page-link"
                onclick="pgclick({{$info->page+1}})">{{$info->page+1}}</button></li>
            @endif
            @if($info->page<$info->pages)
              <li class="page-item"><span class="page-link">...</span></li>
              <li class="page-item"><button class="page-link"
                  onclick="pgclick({{$info->pages}})">{{$info->pages}}</button></li>
              @endif
        </ul>
      </nav>
    </div>
  </div>
</main>
<p>{{$selecteddomain}}</p>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
  integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script>
  $( ".katalog" ).addClass("active");
  function search(){
    window.location.href = "/katalog?search="+$("#search").val();
  }
  function pgclick(pg){
    var url = new URL(window.location.href);
    var search = url.searchParams.get("search");
    var newparam ="";
    if(search!=null){
      newparam = newparam +"?search="+search
      newparam = newparam +"&page="+ pg
    }else{
      newparam = newparam +"?page="+ pg
    }
    location.replace(location.protocol + '//' + location.host + location.pathname +newparam)
  }
  $(".rincibtn").click(function(e){
    e.preventDefault();
    console.log( $(this).prev().attr('id'));
    window.location.href = "/detailpub?id="+$(this).prev().attr('id');
  })
  $(document).ready(function(){
    var domain = {!!json_encode($selecteddomain)!!}
    console.log(domain)
    if(domain!=null || domain!=1600){
    document.getElementById('inputGroupSelect01').value = domain;
    }else{
      document.getElementById('inputGroupSelect01').value = "1600";
    }
  })
</script>
<style>
  .page-link {
    position: relative;
    display: block;
    padding: .5rem .75rem;
    margin-left: -1px;
    line-height: 1.25;
    color: #17a2b8;
    background-color: #fff;
    border: 1px solid #dee2e6;
  }
</style>
@endsection