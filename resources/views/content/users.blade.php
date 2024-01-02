@push('mycss')
    <link href="{{ url('assets/plugins/select2/css/select2.min.css') }}" rel="stylesheet" />
    <link href="{{ url('assets/plugins/select2/css/select2-bootstrap4.css') }}" rel="stylesheet" />
    <link href="{{ url('assets/css/toastr.css') }}" rel="stylesheet" />

    <meta name="csrf-token" content="{{ csrf_token() }}" />


    <!-- {{-- <style>
        .select2-container{
            z-index:100000;
        }
        .error{
            color: red;
            font-weight: 300;
            display: block;
            padding: 6px 0;
            font-size: 14px;
        }
        .form-control.error{
            border-color: red;
            padding: .375rem .75rem;
        }
    </style> --}} -->
@endpush
@extends('layout.layout')

@section('content')
    <div class="page-wrapper">
        <div class="page-content">
            <!--breadcrumb-->
            <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                <div class="breadcrumb-title pe-3">{{ $passingData['title'] }}</div>
                <div class="ps-3">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0 p-0">
                            <li class="breadcrumb-item">
                                <a href="{{ URL::to('/') }}">
                                    <i class="bx bx-home-alt"></i>
                                </a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">{{ $passingData['breadcrumb'] }}</li>
                        </ol>
                    </nav>
                </div>
                <div class="ms-auto">
                    <div class="btn-group">
                        <button type="button" class="btn btn-primary" id="showModalAddSiswa">
                            <i class="fadeIn animated bx bx-user-plus"></i> Tambah Siswa
                        </button>
                    </div>
                </div>
            </div>
            <!--end breadcrumb-->
            <h6 class="mb-0 text-uppercase">{{ $passingData['breadcrumb'] }}</h6>
            <hr>
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="siswaTable" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>NIK</th>
                                    <th>NIS</th>
                                    <th>Nama</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Email</th>
                                    <th>Telepon</th>
                                    <th>Kelas</th>
                                    <th>Point Pelanggaran</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Modal Tambah Siswa --}}
    <div class="modal fade" id="tambahSiswaModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="card-title d-flex align-items-center">
                        <div><i class="bx bxs-user me-1 font-22 text-primary"></i>
                        </div>
                        <h5 class="mb-0 text-primary">User Registration</h5>
                    </div>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="col-xl-12 mx-auto">
                        <div class="card border-top border-0 border-4 border-primary">
                            <div class="card-body p-5">
                                <form class="row g-3" id="addSiswaForm">
                                    <div class="col-md-6">
                                        <label for="nik" class="form-label">NIK
                                            <span style="color:red;font-size:12px;font-style:oblique;">*</span>
                                        </label>
                                        <input type="text" class="form-control" placeholder="Masukan 16 Digit NIK"
                                            maxlength="16" id="nik" name="nik"
                                            onkeypress="return onlyNumbers(event)" onkeyup="return numberValidation(event)">

                                    </div>
                                    <div class="col-md-6">
                                        <label for="ibukandung" class="form-label">IBU KANDUNG <span style="color:red;font-size:12px;font-style:oblique;">*</span></label>
                                        <input type="text" class="form-control" placeholder="Masukan nama ibu kandung"
                                            id="ibukandung" name="ibukandung">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="nis" class="form-label">NIS</label>
                                        <input type="text" class="form-control" placeholder="Masukan 10 Digit NIS"
                                            maxlength="10" id="nis" name="nis"
                                            onkeypress="return onlyNumbers(event)" onkeyup="return numberValidation(event)">
                                        </div>
                                    <div class="col-md-6">
                                        <label for="krjIbu" class="form-label">PEKERJAAN IBU <span style="color:red;font-size:12px;font-style:oblique;">*</span></label>
                                        <select class="single-select form-control" id="krjIbu" name="krjIbu"></select>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="nama" class="form-label">NAMA LENGKAP <span style="color:red;font-size:12px;font-style:oblique;">*</span></label>
                                        <input type="text" class="form-control" id="nama" name="nama">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="ayahkandung" class="form-label">AYAH KANDUNG <span style="color:red;font-size:12px;font-style:oblique;">*</span></label>
                                        <input type="text" class="form-control" id="ayahkandung" name="ayahkandung">
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">JENIS KELAMIN <span style="color:red;font-size:12px;font-style:oblique;">*</span></label>
                                        <select class="single-select" id="jk" name="jk">
                                            <option value="">Pilih Jenis Kelamin</option>
                                            <option value="Laki-Laki">Laki-Laki</option>
                                            <option value="Perempuan">Perempuan</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">PROVINSI <span style="color:red;font-size:12px;font-style:oblique;">*</span></label>
                                        <select class="single-select" id="provinsi" name="provinsi"></select>
                                        <input type="hidden" value="" id="provinsiTxt" name="provinsiTxt">
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">PEKERJAAN AYAH <span style="color:red;font-size:12px;font-style:oblique;">*</span></label>
                                        <select class="single-select" id="krjAyh" name="krjAyh"></select>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">KAB / KOTA <span style="color:red;font-size:12px;font-style:oblique;">*</span></label>
                                        <select class="single-select" id="kabkot" name="kabkot"></select>
                                        <input type="hidden" value="" id="kabkotTxt" name="kabkotTxt">
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">PENGHASILAN ORTU <span style="color:red;font-size:12px;font-style:oblique;">*</span></label>
                                        <select class="single-select" id="penghasilan" name="penghasilan"></select>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">KECAMATAN <span style="color:red;font-size:12px;font-style:oblique;">*</span></label>
                                        <select class="single-select" id="kecamatan" name="kecamatan"></select>
                                        <input type="hidden" value="" id="kecamatanTxt" name="kecamatanTxt">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="wali" class="form-label">NAMA WALI <span style="color:red;font-size:12px;font-style:oblique;">*</span></label>
                                        <input type="text" class="form-control" id="wali" name="wali">
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">KEL / DESA <span style="color:red;font-size:12px;font-style:oblique;">*</span></label>
                                        <select class="single-select" id="keldes" name="keldes"></select>
                                        <input type="hidden" value="" id="keldesTxt" name="keldesTxt">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="alamat" class="form-label">ALAMAT SISWA <span style="color:red;font-size:12px;font-style:oblique;">*</span></label>
                                        <textarea class="form-control" id="alamat" name="alamat" placeholder="Tuliskan Alamat Lengkap..."
                                            rows="3"></textarea>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="tlpWali" class="form-label">TELEPON WALI <span style="color:red;font-size:12px;font-style:oblique;">*</span></label>
                                        <input type="text" class="form-control" id="tlpWali" name="tlpWali"
                                            onkeypress="return onlyNumbers(event)"
                                            onkeyup="return numberValidation(event)">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="sklhAsal" class="form-label">ASAL SEKOLAH <span style="color:red;font-size:12px;font-style:oblique;">*</span></label>
                                        <input type="text" class="form-control" id="sklhAsal" name="sklhAsal">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="thnMsk" class="form-label">TAHUN MASUK <span style="color:red;font-size:12px;font-style:oblique;">*</span></label>
                                        <input type="text" class="form-control" id="thnMsk" name="thnMsk"
                                            onkeypress="return onlyNumbers(event)"
                                            onkeyup="return numberValidation(event)">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="tlpSiswa" class="form-label">TELEPON SISWA </label>
                                        <input type="text" class="form-control" id="tlpSiswa" name="tlpSiswa"
                                            onkeypress="return onlyNumbers(event)"
                                            onkeyup="return numberValidation(event)">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="emailSiswa" class="form-label">EMAIL SISWA</label>
                                        <input type="text" class="form-control" id="emailSiswa" name="emailSiswa">
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button id="saveDataSiswa" name="saveDataSiswa" type="button" class="btn btn-primary">Save changes</button>
                </div>
            </form>
            </div>

        </div>
    </div>
    </div>
    {{-- End Modal Tambah Siswa --}}
@endsection

@push('myjs')
    <script src="{{ url('assets/plugins/select2/js/select2.min.js') }}"></script>
    <script src="{{ url('assets/apps/users.js') }}"></script>
    <script src="{{ url('assets/js/sweetalert2.all.min.js') }}"></script>
    <script src="{{ url('assets/js/toastr.min.js') }}"></script>
    <script src="{{ url('assets/js/loadingoverlay.min.js') }}"></script>
@endpush
