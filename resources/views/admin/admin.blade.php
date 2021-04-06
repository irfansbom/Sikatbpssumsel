@extends('layout/main')

@section('title', 'Admin Dashboard')

@section('container')
<meta name="csrf-token" content="{{ csrf_token() }}">

<body class="">
    {{-- {{$listdomain}} --}}
    <section class="py-5">
        <div class="container ">
            <div class="row card">
                <div class="col-md-12 card-body">
                    <a href="javascript:void(0)" class="btn btn-info ml-1 mr-auto" id="tombol-tambah">Tambah
                        Publikasi</a>
                    <br><br>
                    <table class="table table-striped table-bordered table-sm" id="table_publikasi">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Judul</th>
                                <th>No. Rak</th>
                                <th>Asal</th>
                                <th>Tgl Rilis</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </section>
</body>
<div class="modal fade" id="tambah-edit-modal" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modal-judul"></h5>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <form id="form-tambah-edit" name="form-tambah-edit" class="form-horizontal"
                    enctype="multipart/form-data">
                    <div class="row">
                        <div class="col">
                            <input type="hidden" name="id" id="id">
                            <div class="form-group">
                                <label for="judul" class="col-sm-12 control-label">Judul</label>
                                <div class="col-sm-12">
                                    <input type="text" class="form-control" id="judul" name="judul" value="" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="no_rak" class="col-sm-12 control-label">Nomor Rak</label>
                                <div class="col-sm-12">
                                    <input type="text" class="form-control" id="no_rak" name="no_rak" value="" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="no_rak" class="col-sm-12 control-label">Asal</label>
                                <div class="col-sm-12">
                                    <select class="form-control" name="domain" id="domain" required>
                                        <option selected value="1600">1600 - Prov. Sumatera Selatan</option>
                                        @foreach ($listdomain as $item)
                                        <option value="{{$item->domain_id}}"> {{$item->domain_id}} -
                                            {{$item->domain_name}}</option>
                                        @endforeach
                                    </select>
                                    {{-- <input type="text" class="form-control" id="domain" name="domain" value="" required> --}}
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="rl_date" class="col-sm-12 control-label">Tanggal Rilis</label>
                                <div class="col-sm-12">
                                    <input type="text" class="form-control datepicker" id="rl_date" name="rl_date"
                                        value="" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="name" class="col-sm-12 control-label">Abstrak</label>
                                <div class="col-sm-12">
                                    <textarea type="textarea" class="form-control" id="abstrak" name="abstrak"
                                        value=""></textarea>
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="form-group">
                                <label for="status_website" class="col-sm-12 control-label">Tersedia di Website</label>
                                <div class="col-sm-12">
                                    <select class="form-control" name="status_website" id="status_website" required>
                                        <option selected value="0">Belum Ada</option>
                                        <option selected value="1">Sudah Ada</option>
                                    </select>
                                    {{-- <input type="text" class="form-control" id="domain" name="domain" value="" required> --}}
                                </div>
                            </div>
                            <div class="form-group ">
                                <label class="col-sm-12 control-label">Cover</label>
                                <div class="col-sm-12">
                                    <img id="imgcover" class="mb-1" src="" height="80px" alt="Cover"
                                        style="max-width: 100px">
                                    <input type="file" class="form-control-file" id="cover" name="cover">
                                    <input type="hidden" name="covername" id="covername">
                                </div>
                                {{-- <div class="input-group-prepend">
                                    <span class="input-group-text" id="coveraddon">Cover</span>
                                </div>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="cover"
                                        aria-describedby="coveraddon">
                                    <label class="custom-file-label" for="cover">Pilih Cover</label>
                                </div> --}}
                            </div>
                            <div class="form-group input-group mb-3">
                                <label class="col-sm-12 control-label">PDF</label>
                                {{-- <embed src="" width="800px" height="2100px" /> --}}
                                <div class="col-sm-12">
                                    <iframe id="objpdf" src="" alt="PDF" type="application/pdf" style="max-width: 100px"
                                        height="80"></iframe>
                                    <input type="file" class="form-control-file" id="pdf" name="pdf">
                                    <input type="hidden" name="pdfname" id="pdfname">
                                </div>
                                {{-- <div class="input-group-prepend">
                                    <span class="input-group-text" id="pdfaddon">PDF</span>
                                </div>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="pdf" aria-describedby="pdf">
                                    <label class="custom-file-label" for="cover">Pilih PDF</label>
                                </div> --}}
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-offset-2 col-sm-2 float-right">
                        <button type="submit" class="btn btn-primary btn-block mx-auto" id="tombol-simpan"
                            value="create">Simpan
                        </button>
                    </div>

                </form>
            </div>
            <div class="modal-footer">
            </div>
        </div>
    </div>
</div>
<!-- AKHIR MODAL -->

<!-- MULAI MODAL KONFIRMASI DELETE-->

<div class="modal fade" tabindex="-1" role="dialog" id="konfirmasi-modal" data-backdrop="false">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">PERHATIAN</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p><b>Jika menghapus publikasi maka</b></p>
                <p>*data publikasi tersebut hilang selamanya, apakah anda yakin?</p>
            </div>
            <div class="modal-footer bg-whitesmoke br">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                <button type="button" class="btn btn-danger" name="tombol-hapus" id="tombol-hapus">Hapus
                    Data</button>
            </div>
        </div>
    </div>
</div>

<!-- AKHIR MODAL -->
<script>
    $(document).ready(function () {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $('.datepicker').datepicker({
            format: 'yyyy-mm-dd',
            startDate: '0d'
        });
        $('#datepicker').on('changeDate', function () {
            $('#my_hidden_input').val(
                $('#datepicker').datepicker('getFormattedDate')
            );
        });
    });

    //TOMBOL TAMBAH DATA
    //jika tombol-tambah diklik maka
    $('#tombol-tambah').click(function () {
        $('#button-simpan').val("create-post"); //valuenya menjadi create-post
        $('#id').val(''); //valuenya menjadi kosong
        $('#form-tambah-edit').trigger("reset"); //mereset semua input dll didalamnya
        $("#imgcover").attr("src","");
        $("#objpdf").attr("src","");
        $('#modal-judul').html("Tambah Publikasi"); //valuenya tambah pegawai baru
        $('#tambah-edit-modal').modal('show'); //modal tampil
    });
    $(document).ready(function () {
        table = $('#table_publikasi').DataTable({
            processing: true,
            // "scrollX": true,
            paging:   true,
            deferRender: true,
            info:     true,
            serverSide: true, //aktifkan server-side 
            ajax: {
                url: '/admin',
                type: 'GET'
            },
            columns: [
                {
                    data:"pub_id",
                    name: 'id',
                    "width": "2%",
                    className: 'dt-center',
                },
                {
                    data: 'title',
                    name: 'judul',
                    className: 'dt-head-center',
                },
                {
                    data: 'no_rak',
                    name: 'no_rak',
                    "width": "8%",
                    className: 'dt-center',
                },
                {
                    data: "domain",
                    name: 'domain',
                    "width": "8%",
                    className: 'dt-center',
                },
                {
                    data: 'rl_date',
                    name: 'rl_date',
                    "width": "9%",
                    className: 'dt-center',
                },
                {
                    data: 'action',
                    name: 'action',
                    "width": "13%",
                    className: 'dt-center',
                }
            ],
            order: [
                [0, 'asc']
            ],
            columnDefs: [   ////define column 1
                    {
                        "searchable": false,
                        "orderable": false,
                        "targets": 0
                    },
            ],
        });

        // table.on('order.dt search.dt', function () {
        //         table.column(0, { search: 'applied', order: 'applied' }).nodes().each(function (cell, i) {
        //             cell.innerHTML = i + 1;
        //         });
        // }).draw();
    });
    if ($("#form-tambah-edit").length > 0) {
        $("#form-tambah-edit").validate({
            submitHandler: function (form, e) {
                e.preventDefault();
                var actionType = $('#tombol-simpan').val();
                $('#tombol-simpan').html('Sending..');
                var formData = new FormData(document.getElementById("form-tambah-edit"));
                console.log(formData)
                $.ajax({
                    type: "POST",
                    data: formData,
                    processData: false,
                    contentType: false,
                    cache: false,
                    enctype: 'multipart/form-data',
                    url: "/publikasi/store", //url simpan data
                    dataType: 'json', //data tipe kita kirim berupa JSON
                    success: function (data) { //jika berhasil 
                        $('#form-tambah-edit').trigger("reset"); //form reset
                        $('#tambah-edit-modal').modal('hide'); //modal hide
                        $('#tombol-simpan').html('Simpan'); //tombol simpan
                        // console.log(data);
                        var oTable = $('#table_publikasi').dataTable(); //inialisasi datatable
                        oTable.fnDraw(false); //reset datatable
                        Swal.fire({
                            icon: 'success',
                            title: 'Berhasil',
                            text: 'Data Tersimpan',
                        })
                    },
                    error: function (data) { //jika error tampilkan error pada console
                        console.log('Error:', data);
                        $('#tombol-simpan').html('Simpan');
                    }
                });
            }
        })
    }

    //TOMBOL EDIT DATA PER PEGAWAI DAN TAMPIKAN DATA BERDASARKAN ID PEGAWAI KE MODAL
    //ketika class edit-post yang ada pada tag body di klik maka
    $('body').on('click', '.edit-post', function () {
        var data_id = $(this).data('id');
        console.log(data_id)
        $.get('publikasi/' + data_id + '/edit', function (data) {
            $('#modal-judul').html("Edit Post");
            $('#tombol-simpan').val("edit-post");
            $('#tambah-edit-modal').modal('show');
            //set value masing-masing id berdasarkan data yg diperoleh dari ajax get request diatas   
            // console.log(data)            
            $('#id').val(data.pub_id);
            $('#judul').val(data.title);
            $('#no_rak').val(data.no_rak);
            $('#rl_date').val(data.rl_date);
            $('#domain').val(data.domain);
            $('#status_website').val(data.status_website);
            $('#abstrak').val(data.abstrak);
            $('#pdfname').val(data.pdf);
            $('#covername').val(data.cover);
            $("#imgcover").attr("src","{{asset('files/cover')}}/"+data.cover);
            var request = new XMLHttpRequest();  
            request.open('GET', '{{asset('files/pdf')}}/'+data.pdf, true);
            request.onreadystatechange = function(){
                if (request.readyState === 4){
                    if (request.status === 404) {  
                        $("#objpdf").attr("src","");
                    }  
                }else{
                    $("#objpdf").attr("src","{{asset('files/pdf')}}/"+data.pdf);
                }
            };
            request.send();
        })
    });
    function readURL(input, id) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $(id).attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]); // convert to base64 string
        }
    }
    $("#cover").change(function() {
    readURL(this, '#imgcover');
    });
    $("#pdf").change(function() {
    readURL(this,'#objpdf');
    });

    //jika klik class delete (yang ada pada tombol delete) maka tampilkan modal konfirmasi hapus maka
    $(document).on('click', '.delete', function () {
        dataId = $(this).attr('id');
        $('#konfirmasi-modal').modal('show');
    });

    //jika tombol hapus pada modal konfirmasi di klik maka
    $('#tombol-hapus').click(function () {
        $.ajax({
            url: "/publikasi/" + dataId, //eksekusi ajax ke url ini
            type: 'DELETE',
            beforeSend: function () {
                $('#tombol-hapus').text('Hapus Data'); //set text untuk tombol hapus
            },
            success: function (data) { //jika sukses
                setTimeout(function () {
                    $('#konfirmasi-modal').modal('hide'); //sembunyikan konfirmasi modal
                    var oTable = $('#table_publikasi').dataTable();
                    oTable.fnDraw(false); //reset datatable
                });
                Swal.fire({
                    icon: 'success',
                    title: 'Berhasil',
                    text: 'Data Terhapus',
                })
            }
        })
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
    .table.dataTable {
        font-family: Verdana, Geneva, Tahoma, sans-serif;
        font-size: 11px;
    }

    .table.dataTable th {

        font-size: 11px;
    }

    .edit.btn {
        font-size: 11px
    }

    .delete.btn {
        font-size: 11px
    }

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
<link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap-datepicker.css')}}">
<script src="{{asset('js/bootstrap-datepicker.js')}}"></script>
@endsection