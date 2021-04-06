@extends('layout/main')

@section('title', 'Admin Dashboard')

@section('container')

<body class="text-center">
    <section>
        <div class="container my-3">
            <div class="row">
                <div class="col-md-12">
                    <table class="table table-bordered yajra-datatable">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Username</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </section>
</body>
<script>
    //     $(function () {
//     var table = $('.yajra-datatable').DataTable({
//         columns: [
//             {data: 'id', name: 'id'},
//             {data: 'judul', name: 'judul'},
//             {data: 'no_rak', name: 'no_rak'},
//             {data: 'rl_date', name: 'rl_date'},
//         ]
//     });
//   });
$(document).ready( function () {
    $('.table').DataTable();
});
</script>
<style>
    .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
    }

    /* @media (min-width: 768px) {
        .bd-placeholder-img-lg {
            font-size: 3.5rem;
        }
    } */

    html,
    body {
        height: 100%;
    }



    .form-signin {
        width: 100%;
        max-width: 330px;
        padding: 15px;
        margin: auto;
    }

    .form-signin .checkbox {
        font-weight: 400;
    }

    .form-signin .form-control {
        position: relative;
        box-sizing: border-box;
        height: auto;
        padding: 10px;
        font-size: 16px;
    }

    .form-signin .form-control:focus {
        z-index: 2;
    }

    .form-signin input[type="email"] {
        margin-bottom: -1px;
        border-bottom-right-radius: 0;
        border-bottom-left-radius: 0;
    }

    .form-signin input[type="password"] {
        margin-bottom: 10px;
        border-top-left-radius: 0;
        border-top-right-radius: 0;
    }
</style>
@endsection