@extends('layout/main')

@section('title', 'Detail')

@section('container')
<link rel="canonical" href="https://getbootstrap.com/docs/4.6/examples/blog/">
<main role="main" class="container py-5">
    <div class="row rounded p-2 border" style="background-color: #fcf3df; border-color:#936a0e">
        <div class="col-md-7 blog-main">
            <h3 class="pb-2 font-italic border-bottom">
                {{$data->title}}
            </h3>
            <p class="blog-post-meta">{{$data->rl_date}}</p>
            <div class="rounded border border-secondary my-2" style="color">
                <div class="bg-info" style="text-align:center">
                    <p class="ml-1 mb-0 ">ISSN</p>
                </div>
                <p class="p-0 mt-0 mb-0 ml-1 text-center">{{$data->issn}}</p>
            </div>
            <div class="rounded border border-secondary my-2 " style="color">
                <div class="bg-info" style="text-align:center">
                    <p class="ml-1 mb-0">Abstrak</p>
                </div>
                <p class="p-0 mt-0 mb-0 ml-1" id="isi_abstrak"></p>
            </div>
            <div class="rounded border border-secondary my-2" style="color">
                <div class="bg-info" style="text-align:center">
                    <p class="ml-1 mb-0">No. Rak</p>
                </div>
                <p class="p-0 mt-0 mb-0 ml-1 text-center" id="isi_no_rak"></p>
            </div>
            <div class="rounded border border-secondary my-2" style="color">
                <div class="bg-info" style="text-align:center">
                    <p class="ml-1 mb-0">No. Publikasi</p>
                </div>
                <p class="p-0 mt-0 mb-0 ml-1 text-center">{{$data->pub_no}}</p>
            </div>
            <div class="">
                <div class="d-flex justify-content-center">
                    <a type="button" class="btn btn-success" @if ( $data->pdf ==null ||str_contains( $data->pdf,
                        'https://' ) )
                        href="{{$data->pdf}}" @else
                        href="{{asset('files/pdf')}}/{{$data->pdf}}" @endif>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-cloud-download-fill" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M8 0a5.53 5.53 0 0 0-3.594 1.342c-.766.66-1.321 1.52-1.464 2.383C1.266 4.095 0 5.555 0 7.318 0 9.366 1.708 11 3.781 11H7.5V5.5a.5.5 0 0 1 1 0V11h4.188C14.502 11 16 9.57 16 7.773c0-1.636-1.242-2.969-2.834-3.194C12.923 1.999 10.69 0 8 0zm-.354 15.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 14.293V11h-1v3.293l-2.146-2.147a.5.5 0 0 0-.708.708l3 3z">
                            </path>
                        </svg>
                        Unduh
                    </a>
                </div>
                <div class="d-flex justify-content-center">
                    <p class="m-0">{{$data->size}}</p>
                </div>
            </div>
        </div>
        <aside class="col-md-5 blog-sidebar ">
            <div class="py-4">
                <div class="rounded">
                    <svg class="bd-placeholder-img card-img-top rounded" width="100%" height="500"
                        xmlns="{{ $data->cover}}" role="img" aria-label="Placeholder: Thumbnail"
                        preserveAspectRatio="xMidYMid slice" focusable="false">
                        <rect width="100%" height="100%" fill="#17a2b8" />

                        <image width="100%" height="100%" @if ($data->cover ==null || str_contains( $data->cover,
                            'https://' ) )
                            href="{{$data->cover}}" @else
                            href="{{asset('files/cover')}}/{{$data->cover}}" @endif />
                    </svg>
                </div>
            </div>
        </aside>
    </div>
</main>

<link href="https://fonts.googleapis.com/css?family=Playfair&#43;Display:700,900" rel="stylesheet">
<style>
    /* stylelint-disable selector-list-comma-newline-after */

    .blog-header {
        line-height: 1;
        border-bottom: 1px solid #e5e5e5;
    }

    .blog-header-logo {
        font-family: "Playfair Display", Georgia, "Times New Roman", serif;
        font-size: 2.25rem;
    }

    .blog-header-logo:hover {
        text-decoration: none;
    }

    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
        font-family: "Playfair Display", Georgia, "Times New Roman", serif;
    }

    .display-4 {
        font-size: 2.5rem;
    }

    @media (min-width: 768px) {
        .display-4 {
            font-size: 3rem;
        }
    }

    .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
    }

    .nav-scroller .nav {
        display: -ms-flexbox;
        display: flex;
        -ms-flex-wrap: nowrap;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
    }

    .nav-scroller .nav-link {
        padding-top: .75rem;
        padding-bottom: .75rem;
        font-size: .875rem;
    }

    .card-img-right {
        height: 100%;
        border-radius: 0 3px 3px 0;
    }

    .flex-auto {
        -ms-flex: 0 0 auto;
        flex: 0 0 auto;
    }

    .h-250 {
        height: 250px;
    }

    @media (min-width: 768px) {
        .h-md-250 {
            height: 250px;
        }
    }

    /* Pagination */
    .blog-pagination {
        margin-bottom: 4rem;
    }

    .blog-pagination>.btn {
        border-radius: 2rem;
    }

    /*
     * Blog posts
     */
    .blog-post {
        margin-bottom: 4rem;
    }

    .blog-post-title {
        margin-bottom: .25rem;
        font-size: 2.5rem;
    }

    .blog-post-meta {
        margin-bottom: 1.25rem;
        color: #999;
    }

    /*
     * Footer
     */
    .blog-footer {
        padding: 2.5rem 0;
        color: #999;
        text-align: center;
        background-color: #f9f9f9;
        border-top: .05rem solid #e5e5e5;
    }

    .blog-footer p:last-child {
        margin-bottom: 0;
    }
</style>
<script>
    $( ".katalog" ).addClass("active");
    function search(){
      window.location.href = '{{url("/katalog?search=")}}'+$("#search").val();
    }
    $(document).ready(function(){
        $('#isi_abstrak').html({!! json_encode($data->abstract) !!})
        $('#isi_no_rak').html({!! json_encode($data->no_rak) !!})
    
    })
</script>
@endsection