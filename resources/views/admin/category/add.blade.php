@extends('admin.layouts.main')
@section('container')
    <!-- Main content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Brand</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Add New Brand</li>
              </ol>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">
              <div class="card card-info">
                <div class="card-header">
                  <h3 class="card-title">Add New Brand</h3>
                </div>
                <div class="card-body">
                  <form class="row needs-validation" novalidate method="post" action="" enctype="multipart/form-data">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Name</label>
                        <div class="input-group mb-3">
                          <input type="text" class="form-control" name="name" id="name" placeholder="Brand Name" required>
                          <div class="invalid-feedback">
                            Please provide a valid Brand Name.
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Image</label>
                        <div class="custom-file mb-2">
                          <input type="file" class="custom-file-input form-control" name="img" id="img" onchange="showImage(this);" required>
                          <label class="custom-file-label" for="img">Choose an image</label>
                          <div class="invalid-feedback">
                            Please provide a valid Brand Image.
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-md-3 mx-auto d-block">
                            <img class="rounded" src="#" alt="" id="show-image" style="width: 100%;">
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group ">
                        <button type="submit" class="btn btn-primary  start" name="tambah">
                          <i class="fas fa-upload"></i>
                          <span> Add New Brand</span>
                        </button>
                        <a href="index.php" class="btn btn-warning  cancel">
                          <i class="fas fa-times-circle"></i>
                          <span> Cancel</span>
                        </a>
                      </div>
                    </div>
                  </form>
                  <!-- /input-group -->
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->
          </div>
          <!-- /.container-fluid -->
      </section>
      <!-- /.content -->
    </div>
    <!-- end main content -->
@endsection
@section('script-custom')
    <!-- Select2 -->
  <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
  <!-- bs-custom-file-input -->
  <script src="../../../themes/js/input-form/bs-custom-file-input.min.js"></script>

  <!-- Page specific script -->
  <script>
    // validasi form
    (function() {
      'use strict';
      window.addEventListener('load', function() {
        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.getElementsByClassName('needs-validation');
        // Loop over them and prevent submission
        var validation = Array.prototype.filter.call(forms, function(form) {
          form.addEventListener('submit', function(event) {
            if (form.checkValidity() === false) {
              event.preventDefault();
              event.stopPropagation();
            }
            form.classList.add('was-validated');
          }, false);
        });
      }, false);
    })();
    // menampilkan gambar ketika dipilih
    function showImage(input) {
      if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
          $('#show-image')
            .attr('src', e.target.result)
        };
        reader.readAsDataURL(input.files[0]);
      }
    }
    // select2
    $(function() {
      bsCustomFileInput.init();
    });
