	<script>
    $(document).ready(function(){
        $('#submit').prop('disabled', true);
        $("#form-tambah").validate({
            rules: {
                nama: {
                    required: true,
                    minlength: 5,
                },
                email: {
                    required: true,
                    email: true,
                },   
                password : {
                    required : true,
                    minlength : 6
                }
            },
            messages: {
                    nama: {
                        required: "Nama harus di isi.",
                        minlength: "Nama minimal 5 karakter."
                    },
                    email: {
                        required: "Email harus di isi.",
                        email: "Email tidak valid."
                    },
                    password : {
                        required : "Password haru di isi.",
                        minlength : "Password minimal 6 karakter"
                    }
                },
            highlight: function ( element, errorClass, validClass ) {
                $(element).addClass("is-invalid").removeClass("is-valid");
            },
            unhighlight: function (element, errorClass, validClass) {
                $(element).addClass("is-valid").removeClass("is-invalid");
            }
        });

        $('#form-tambah input').on('keyup',function(){
            if ($('#form-tambah').valid()) {
                $('#submit').prop('disabled', false)
            }else{
                $('#submit').prop('disabled', 'disabled')
            }
        })

        $('#update').prop('disabled', true);
        $('#form-edit').validate({
            rules : {
                password : {
                    required : true,
                    minlength : 6
                }
            },
            messages :{
                password : {
                        required : "Password haru di isi.",
                        minlength : "Password minimal 6 karakter"
                    }
            },
            highlight: function ( element, errorClass, validClass ) {
                $(element).addClass("is-invalid").removeClass("is-valid");
            },
            unhighlight: function (element, errorClass, validClass) {
                $(element).addClass("is-valid").removeClass("is-invalid");
            }
        });

        $('#form-edit input').on('keyup',function(){
            if ($('#form-edit').valid()) {
                $('#update').prop('disabled', false);
            }else{
                $('#update').prop('disabled', 'disabled');
            }
        })

    });

        
</script>
    <script src="<?php echo base_url() ?>assets/plugin/js/popper.min.js"></script>
    <script src="<?php echo base_url() ?>assets/plugin/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url() ?>assets/plugin/js/my-swal.js"></script>
    <script src="<?php echo base_url() ?>assets/plugin/js/myscript.js"></script>
    <script src="<?php echo base_url() ?>assets/plugin/js/dataTables.bootstrap.min.js"></script>
    <script src="<?php echo base_url() ?>assets/plugin/js/bootstrap-datepicker.min.js"></script>
  </body>
</html>