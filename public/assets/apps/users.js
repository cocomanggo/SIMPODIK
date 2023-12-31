$(document).ready(function() {
    var table = $('#example2').DataTable({
        lengthChange: false,
        buttons: ['copy', 'excel', 'pdf', 'print']
    });

    table.buttons().container()
        .appendTo('#example2_wrapper .col-md-6:eq(0)');

    $('#provinsi').append('<option value="">Pilih Provinsi</option>');
    $('#kabkot').append('<option value="">Pilih Kab / Kota</option>');
    $('#kecamatan').append('<option value="">Pilih Kecamatan</option>');
    $('#keldes').append('<option value="">Pilih Kel / Desa</option>');
    $('#krjIbu').append('<option value="">Pilih Pekerjaan</option>');
    $('#krjAyh').append('<option value="">Pilih Pekerjaan</option>');
    $('#penghasilan').append('<option value="">Pilih Penghasilan</option>');

    get_penghasilan();
    get_pekerjaan();
    get_data_provinsi();

    // validateForm();


    // NikValdite();

});

// SELECT 2 BOOTSRAP 4

$('#jk').select2({
    theme: 'bootstrap4',
    width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' : 'style',
    placeholder: $(this).data('placeholder'),
    allowClear: Boolean($(this).data('allow-clear')),
    dropdownParent: $("#tambahSiswaModal"),
});

$('#krjIbu').select2({
    theme: 'bootstrap4',
    width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' : 'style',
    placeholder: $(this).data('placeholder'),
    allowClear: Boolean($(this).data('allow-clear')),
    dropdownParent: $("#tambahSiswaModal"),
});

$('#krjAyh').select2({
    theme: 'bootstrap4',
    width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' : 'style',
    placeholder: $(this).data('placeholder'),
    allowClear: Boolean($(this).data('allow-clear')),
    dropdownParent: $("#tambahSiswaModal"),
});

$('#provinsi').select2({
    theme: 'bootstrap4',
    width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' : 'style',
    placeholder: $(this).data('placeholder'),
    allowClear: Boolean($(this).data('allow-clear')),
    dropdownParent: $("#tambahSiswaModal"),
});

$('#kabkot').select2({
    theme: 'bootstrap4',
    width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' : 'style',
    placeholder: $(this).data('placeholder'),
    allowClear: Boolean($(this).data('allow-clear')),
    dropdownParent: $("#tambahSiswaModal"),
});

$('#kecamatan').select2({
    theme: 'bootstrap4',
    width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' : 'style',
    placeholder: $(this).data('placeholder'),
    allowClear: Boolean($(this).data('allow-clear')),
    dropdownParent: $("#tambahSiswaModal"),
});

$('#keldes').select2({
    theme: 'bootstrap4',
    width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' : 'style',
    placeholder: $(this).data('placeholder'),
    allowClear: Boolean($(this).data('allow-clear')),
    dropdownParent: $("#tambahSiswaModal"),
});

$('#penghasilan').select2({
    theme: 'bootstrap4',
    width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' : 'style',
    placeholder: $(this).data('placeholder'),
    allowClear: Boolean($(this).data('allow-clear')),
    dropdownParent: $("#tambahSiswaModal"),
});

$('#provinsi').on('change', function() {
    $("#kabkot").empty();
    $('#kabkot').append('<option value="0">Pilih Kab / Kota</option>');
    var idProv = $("#provinsi option:selected").val();
    // var textProv = $("#provinsi option:selected").text();
    get_data_kabkot(idProv);
});

$('#kabkot').on('change', function() {
    $("#kecamatan").empty();
    $('#kecamatan').append('<option value="0">Pilih Kab / Kota</option>');
    var idKabkot = $("#kabkot option:selected").val();
    // var textKabkot = $("#kabkot option:selected").text();
    get_data_kecamatan(idKabkot);
});

$('#kecamatan').on('change', function() {
    $("#keldes").empty();
    $('#keldes').append('<option value="0">Pilih Kel / Desa</option>');
    var idKecamatan = $("#kecamatan option:selected").val();
    // console.log(idKecamatan);
    // var textKabkot = $("#kabkot option:selected").text();
    get_data_keldes(idKecamatan);
});
// END SELECT 2 BOOTSRAP 4

// AJAX
function get_data_kecamatan(id){
    // console.log(id);
    $.ajax({
        type: 'get',
        url: '/api/get_kecamatan/'+id,
        cache: false,
        dataType: 'JSON',
        success: function(res){
            for(var i=0;i<res.length;i++){
                var o = new Option(res[i].name, res[i].id, true, true);
                $(o).html("<option value='"+res[i].id+"'>"+res[i].name+"</option>");
                $('#kecamatan').append(o);
                $('#kecamatan').val('0');
            }
        }
    });
}

function get_data_keldes(id){
    // console.log(id);
    $.ajax({
        type: 'get',
        url: '/api/get_keldes/'+id,
        cache: false,
        dataType: 'JSON',
        success: function(res){
            for(var i=0;i<res.length;i++){
                var o = new Option(res[i].name, res[i].id, true, true);
                $(o).html("<option value='"+res[i].id+"'>"+res[i].name+"</option>");
                $('#keldes').append(o);
                $('#keldes').val('0');
            }
        }
    });
}

function get_data_kabkot(id){
    $.ajax({
        type: 'get',
        url: '/api/get_kabkot/'+id,
        cache: false,
        dataType: 'JSON',
        success: function(res){
            for(var i=0;i<res.length;i++){
                var o = new Option(res[i].name, res[i].id, true, true);
                $(o).html("<option value='"+res[i].id+"'>"+res[i].name+"</option>");
                $('#kabkot').append(o);
                $('#kabkot').val('0');
            }
        }
    });
}

function get_data_provinsi(){
    $.ajax({
        type: 'get',
        url: '/api/get_provinsi',
        cache: false,
        dataType: 'JSON',
        success: function(response){
            for(var i=0;i<response.length;i++){
                var o = new Option(response[i].name, response[i].id, true, true);
                $(o).html("<option value='"+response[i].id+"'>"+response[i].name+"</option>");
                $('#provinsi').append(o);
                $('#provinsi').val('0');
               }
        }
    });
}

function get_penghasilan(){
    $.ajax({
        type: 'get',
        url: '/api/get_penghasilan',
        cache: false,
        dataType: 'JSON',
        success: function(res) {
            for(var i=0;i<res.length;i++){
                var o = new Option(res[i].name, res[i].id, true, true);
                $(o).html("<option value='"+res[i].id+"'>"+res[i].penghasilan+"</option>");
                $('#penghasilan').append(o);
                $('#penghasilan').val('0');
            }
        }
    });
}

function get_pekerjaan(){
    $.ajax({
        type: 'get',
        url: '/api/get_pekerjaan',
        cache: false,
        dataType: 'JSON',
        success: function(res) {
            for(var i=0;i<res.length;i++){
                var o = new Option(res[i].nama_pekerjaan, res[i].id, true, true);
                var y = new Option(res[i].nama_pekerjaan, res[i].id, true, true);
                $(o).html("<option value='"+res[i].id+"'>"+res[i].nama_pekerjaan+"</option>");
                $(y).html("<option value='"+res[i].id+"'>"+res[i].nama_pekerjaan+"</option>");
                $('#krjIbu').append(y);
                $('#krjIbu').val('0');

                $('#krjAyh').append(o);
                $('#krjAyh').val('0');
            }
        }
    });
}
//END AJAX

// STATIC FUNCTION
function onlyNumbers(e){
    var c=e.which?e.which:e.keyCode;
    if(c<48||c>57){
      return false;
    }
}

function numberValidation(e){
    e.target.value = e.target.value.replace(/[^\d]/g,'');
    return false;
}

$('#showModalAddSiswa').on('click', function(){
    // alert('klik')
    $('#tambahSiswaModal').modal('show');
});

$('#tambahSiswaModal').on('hidden.bs.modal', function (e) {
    var elem = document.getElementById('addSiswaForm').elements;
    for(var i = 0; i < elem.length; i++){
        $('#'+elem[i].id).removeClass('is-invalid');
        $('#'+elem[i].id).removeClass('is-valid');
        $('#'+elem[i].id).val('');
    }
});




$('#saveDataSiswa').on('click', function(){
    $.ajaxSetup({
        headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.ajax({
        type: 'post',
        url: '/api/saveNewSiswa',
        cache: false,
        data: $("#addSiswaForm").serialize(),
        dataType: 'JSON',
        success: function(res){
            toastr["success"]("Data siswa telah disimpan");
            toastr.options = {
              "closeButton": false,
              "debug": false,
              "newestOnTop": false,
              "progressBar": false,
              "positionClass": "toast-top-right",
              "preventDuplicates": false,
              "onclick": null,
              "showDuration": "300",
              "hideDuration": "1000",
              "timeOut": "5000",
              "extendedTimeOut": "1000",
              "showEasing": "swing",
              "hideEasing": "linear",
              "showMethod": "fadeIn",
              "hideMethod": "fadeOut"
            }
        },
        error: function(xhr){
            var res = xhr.responseJSON;
            // console.log(res.errors);

            if($.isEmptyObject(res) == false){
                $.each(res.errors, function(key, value){
                    Swal.fire({
                      icon: "error",
                      title: "Oops...",
                      text: value,
                      // footer: '<a href="#">Why do I have this issue?</a>'
                    });
                    input = document.querySelector('#'+key);
                    input.classList.add('is-invalid');
                });
            }
        }
    });
});
// END STATIC FUNCTION

// VALIDATIONS
// function validateForm(){
//     $('#addSiswaForm').validate({
//         ignore: [],
//         rules:{
//             nik: { required: true, minlength: 16, maxlength: 16, number: true },
//             nis: { required: true, minlength: 10, maxlength: 10, number: true },
//             nama: { required: true },
//             provinsi: { required: true },
//             kabkot: { required: true },
//             keldes: { required: true },
//             alamat: { required: true },
//             sklhAsal: { required: true },
//             ibukandung: { required: true },
//             krjIbu: { required: true },
//             ayahkandung: { required: true },
//             krjAyh: { required: true },
//             penghasilan: { required: true },
//             wali: { required: true },
//             tlpWali: { required: true, number: true },
//             thnMsk: { required: true, number: true }
//         },
//         messages: {
//             nik: {
//                 required: "NIK harus terisi",
//                 minlength: "NIK harus 16 angka",
//                 maxlength: "NIK harus 16 angka",
//                 number: "NIK harus 16 ANGKA",
//             },
//             nis: {
//                 required: "NIK harus terisi",
//                 minlength: "NIK harus 10 angka",
//                 maxlength: "NIK harus 10 angka",
//                 number: "NIK harus 10 ANGKA",
//             },
//             nama: "Harap isi nama lengkap",
//             provinsi: "Harap Pilih Provinsi",
//             kabkot: "Harap Pilih Kab / Kota",
//             keldes: "Harap Pilik Kel / Desa",
//             alamat: "Harap isi alamat lengkap",
//             sklhAsal: "Harap isi sekolah asal",
//             ibukandung: "Harap isi nama Ibu kandung",
//             krjIbu: "Harap pilih pekerjaan",
//             ayahkandung: "Harap isi nama Ayah Kandung",
//             krjAyh: "Harap pilih pekerjaan",
//             penghasilan: "Harap pilih penghasilan",
//             wali: "Harap isi nama wali",
//             tlpWali: {required: "Harap isi teleppon wali", number: "Hanya format angka"},
//             thnMsk: {required: "Harap isi tahun masuk", number: "Hanya format angka"}

//         },
//         submitHandler: function(form){

//         }
//     });
// }

$('#nik').on('keyup', function(){
    const input = document.querySelector("#nik");
    var value = document.getElementById( "nik" ).value;

    if ( value.length < 16 ) {
        input.classList.remove( "is-valid" );
        input.classList.add( "is-invalid" );
    } else {
        input.classList.add( "is-valid" );
        input.classList.remove( "is-invalid" );
    }
});

// $('#nis').on('keyup', function(){
//     const input = document.querySelector("#nis");
//     var value = document.getElementById( "nis" ).value;

//     if ( value.length < 10 ) {
//         input.classList.remove( "is-valid" );
//         input.classList.add( "is-invalid" );
//     } else {
//         input.classList.add( "is-valid" );
//         input.classList.remove( "is-invalid" );
//     }
// });

$('#nama').on('keyup', function(){
    const input = document.querySelector("#nama");
    var value = document.getElementById( "nama" ).value;

    if ( value == ''  || value.length < 1) {
        input.classList.remove( "is-valid" );
        input.classList.add( "is-invalid" );
    } else {
        input.classList.add( "is-valid" );
        input.classList.remove( "is-invalid" );
    }
});

$('#provinsi').on('change', function(){
    const input = document.querySelector("#provinsi");
    var value = document.getElementById( "provinsi" ).value;
    var text = document.getElementById( "provinsiTxt" ).value;
    $('#provinsiTxt').val(text);

    if ( value == 0) {
        input.classList.remove( "is-valid" );
        input.classList.add( "is-invalid" );
    } else {
        input.classList.add( "is-valid" );
        input.classList.remove( "is-invalid" );
    }
});

$('#kabkot').on('change', function(){
    const input = document.querySelector("#kabkot");
    var value = document.getElementById( "kabkot" ).value;
    var text = document.getElementById( "kabkotTxt" ).value;
    $('#kabkotTxt').val(text);


    if ( value == 0) {
        input.classList.remove( "is-valid" );
        input.classList.add( "is-invalid" );
    } else {
        input.classList.add( "is-valid" );
        input.classList.remove( "is-invalid" );
    }
});

$('#kecamatan').on('change', function(){
    const input = document.querySelector("#kecamatan");
    var value = document.getElementById( "kecamatan" ).value;
    var text = document.getElementById( "kecamatanTxt" ).value;
    $('#kecamatanTxt').val(text);

    if ( value == 0) {
        input.classList.remove( "is-valid" );
        input.classList.add( "is-invalid" );
    } else {
        input.classList.add( "is-valid" );
        input.classList.remove( "is-invalid" );
    }
});

$('#keldes').on('change', function(){
    const input = document.querySelector("#keldes");
    var value = document.getElementById( "keldes" ).value;
    var text = document.getElementById( "keldesTxt" ).value;
    $('#keldesTxt').val(text);

    if ( value == 0) {
        input.classList.remove( "is-valid" );
        input.classList.add( "is-invalid" );
    } else {
        input.classList.add( "is-valid" );
        input.classList.remove( "is-invalid" );
    }
});

$('#alamat').on('keyup', function(){
    const input = document.querySelector("#alamat");
    var value = document.getElementById( "alamat" ).value;

    if ( value == ''  || value.length < 10 ) {
        input.classList.remove( "is-valid" );
        input.classList.add( "is-invalid" );
    } else {
        input.classList.add( "is-valid" );
        input.classList.remove( "is-invalid" );
    }
});

$('#sklhAsal').on('keyup', function(){
    const input = document.querySelector("#sklhAsal");
    var value = document.getElementById( "sklhAsal" ).value;

    if ( value == ''  || value.length < 3 ) {
        input.classList.remove( "is-valid" );
        input.classList.add( "is-invalid" );
    } else {
        input.classList.add( "is-valid" );
        input.classList.remove( "is-invalid" );
    }
});

$('#ibukandung').on('keyup', function(){
    const input = document.querySelector("#ibukandung");
    var value = document.getElementById( "ibukandung" ).value;

    if ( value == ''  || value.length < 3 ) {
        input.classList.remove( "is-valid" );
        input.classList.add( "is-invalid" );
    } else {
        input.classList.add( "is-valid" );
        input.classList.remove( "is-invalid" );
    }
});

$('#krjIbu').on('change', function(){
    const input = document.querySelector("#krjIbu");
    var value = document.getElementById( "krjIbu" ).value;

    if ( value == 0) {
        input.classList.remove( "is-valid" );
        input.classList.add( "is-invalid" );
    } else {
        input.classList.add( "is-valid" );
        input.classList.remove( "is-invalid" );
    }
});

$('#ayahkandung').on('keyup', function(){
    const input = document.querySelector("#ayahkandung");
    var value = document.getElementById( "ayahkandung" ).value;

    if ( value == ''  || value.length < 3 ) {
        input.classList.remove( "is-valid" );
        input.classList.add( "is-invalid" );
    } else {
        input.classList.add( "is-valid" );
        input.classList.remove( "is-invalid" );
    }
});

$('#krjAyh').on('change', function(){
    const input = document.querySelector("#krjAyh");
    var value = document.getElementById( "krjAyh" ).value;

    if ( value == 0) {
        input.classList.remove( "is-valid" );
        input.classList.add( "is-invalid" );
    } else {
        input.classList.add( "is-valid" );
        input.classList.remove( "is-invalid" );
    }
});

$('#penghasilan').on('change', function(){
    const input = document.querySelector("#penghasilan");
    var value = document.getElementById( "penghasilan" ).value;

    if ( value == 0) {
        input.classList.remove( "is-valid" );
        input.classList.add( "is-invalid" );
    } else {
        input.classList.add( "is-valid" );
        input.classList.remove( "is-invalid" );
    }
});

$('#jk').on('change', function(){
    const input = document.querySelector("#jk");
    var value = document.getElementById( "jk" ).value;

    if ( value == 0) {
        input.classList.remove( "is-valid" );
        input.classList.add( "is-invalid" );
    } else {
        input.classList.add( "is-valid" );
        input.classList.remove( "is-invalid" );
    }
});

$('#wali').on('keyup', function(){
    const input = document.querySelector("#wali");
    var value = document.getElementById( "wali" ).value;

    if ( value == ''  || value.length < 3 ) {
        input.classList.remove( "is-valid" );
        input.classList.add( "is-invalid" );
    } else {
        input.classList.add( "is-valid" );
        input.classList.remove( "is-invalid" );
    }
});

$('#tlpWali').on('keyup', function(){
    const input = document.querySelector("#tlpWali");
    var value = document.getElementById( "tlpWali" ).value;

    if ( value == ''  || value.length < 3 ) {
        input.classList.remove( "is-valid" );
        input.classList.add( "is-invalid" );
    } else {
        input.classList.add( "is-valid" );
        input.classList.remove( "is-invalid" );
    }
});

$('#thnMsk').on('keyup', function(){
    const input = document.querySelector("#thnMsk");
    var value = document.getElementById( "thnMsk" ).value;

    if ( value == ''  || value.length < 3 ) {
        input.classList.remove( "is-valid" );
        input.classList.add( "is-invalid" );
    } else {
        input.classList.add( "is-valid" );
        input.classList.remove( "is-invalid" );
    }
});


// END VALIDATIONS



