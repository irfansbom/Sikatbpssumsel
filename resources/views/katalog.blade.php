@extends('layout/main')

@section('title', 'Katalog PST')

@section('container')

<main role="main">
  <section class="py-2 text-center container">
    <div class="row py-lg-5">
      <div class="col-lg-6 col-md-8 mx-auto">
        <h2 style="color: #117a8b">Katalog Publikasi BPS</h2>
        <div>
          <div class="d-flex">
            <input id="search" class="form-control me-2" type="search" placeholder="Cari Judul" aria-label="Search"
              name="search" style="margin-right: 5px; border-color:#17a2b8" value="{{Request::get('search')}}">
            <button class="btn btn-outline-info" onclick="search()">Cari</button>
          </div>
          <div class="d-flex justify-context-left">
            <div class="input-group mt-2 rounded" style="width: 60%; ">
              <div class="input-group-prepend" style=" border-color:#17a2b8">
                <label class="input-group-text" style=" border-color:#17a2b8; font-size: 12px; background: #17a2b8;
                color: white;" for="inputGroupSelect01">Kab/Kot</label>
              </div>
              <select class="custom-select" style=" border-color:#17a2b8;font-size: 12px" id="inputGroupSelect01">
                <option selected value="1600">1600 - Prov. Sumatera Selatan</option>
                @foreach ($listdomain as $item)
                <option value="{{$item->domain_id}}">{{$item->domain_id}} - {{$item->domain_name}}</option>
                @endforeach
              </select>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <div class="album py-5 bg-light">
    <div class="container">
      <div class="row">
        @if ( count($publikasi)==0 )
        <p>Data kosong</p>
        @endif
        @foreach($publikasi as $value)
        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
            <svg class="bd-placeholder-img card-img-top" width="100%" height="225" role="img"
              aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
              <rect width="100%" height="100%" fill="#17a2b8" />
              <image @if ( $value->cover ==null ||str_contains( $value->cover, 'https://' ) ) href="{{$value->cover}}"
                @else
                href="{{asset('files/cover')}}/{{$value->cover}}" @endif width="100%" height="100%" />
            </svg>
            <div class="card-body">
              <p class="card-text">{{$value->title}}</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <p id="{{$value->pub_id}}" hidden></P>
                  <button type="button" class="rincibtn btn btn-sm btn-outline-secondary">Lebih rinci</button>
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
<script>
  $( ".katalog" ).addClass("active");
  function search(){
    // console.log("/katalog?search="+$("#search").val()+"&domain="+$("#inputGroupSelect01").val())
    window.location.href ='{{url("/katalog?search=")}}'+$("#search").val()+"&domain="+$("#inputGroupSelect01").val();
  }
  function pgclick(hal){
    var domain = {!!json_encode($selecteddomain)!!}
    var url = new URL(window.location.href);
    var search = url.searchParams.get("search");
    var newparam ="";
    if(search!=null && domain!=null){
      newparam = newparam +"?search="+search
      newparam = newparam +"&domain="+ domain
      newparam = newparam +"&halaman="+ hal
      // newparam = newparam +"&page="+ hal
    }else if(search!=null){
      newparam = newparam +"?search="+search
      newparam = newparam +"&halaman="+ hal
      // newparam = newparam +"&page="+ hal
    }else if(domain!=null){
      newparam = newparam +"?domain="+ domain
      newparam = newparam +"&halaman="+ hal
      // newparam = newparam +"&page="+ hal
    }
    else{
      newparam = newparam +"?halaman="+ hal
      // newparam = newparam +"&page="+ hal
    }
    location.replace(location.protocol + '//' + location.host + location.pathname +newparam)
  }
  
  $(document).ready(function(){
    var domain = {!!json_encode($selecteddomain)!!}
    // console.log(domain)
    if(domain == null ){
    document.getElementById('inputGroupSelect01').value = 1600;
    domain = 1600;
    }else{
      document.getElementById('inputGroupSelect01').value = domain;
    }
    var alert = {!!json_encode($alert)!!}
    // console.log(alert)
    if(alert=="yes"){
      Swal.fire({
        icon: 'error',
        title: 'Oops...',
        text: 'Judul tidak ditemukan!',
        background: 'white',
      })
    }
    $(".rincibtn").click(function(e){
    e.preventDefault();
    console.log( $(this).prev().attr('id'));
    var url = '{{ url("detailpub?id=") }}'
    console.log(url+$(this).prev().attr('id')+"&domain="+ domain);
    window.location.href = url+$(this).prev().attr('id')+"&domain="+ domain;
  })
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

  /* .swal2-html-container {
    color: black
  }

  .swal2-title {
    color: black
  } */
</style>
@endsection