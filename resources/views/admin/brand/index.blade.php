<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>ADMIN Panel | <?= $title ?></title>
  @include('admin.layouts.parts.link-header')
</head>

<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed">
  <div class="wrapper">
    <!-- Navbar -->
    @include('admin.layouts.parts.navbar')
    <!-- endnavbar -->

    <!-- sidebar -->
    @include('admin.layouts.parts.sidebar')
    <!-- endsidebar -->

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
                <li class="breadcrumb-item active">List All Brand</li>
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
              <div class="card">

                <div class="card-header">
                  <h3 class="card-title">List All Brand</h3>
                </div>
                <!-- /.card-header -->

                <!-- /.card-header -->
                <div class="card-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr class="text-center">
                        <th>NO</th>
                        <th>IMG</th>
                        <th>NAME</th>
                        <th>ACTION</th>
                      </tr>
                    </thead>
                    <tbody>

                      <?php $i = 1; ?>
                      <?php foreach ($brands as $row) : ?>
                        <tr class="text-center">
                          <td><?= $i++; ?></td>
                          <td><img src="{{ asset('image/'. $row->img) }}" alt="" class="img-tumbnail rounded" width="100px"></td>
                          <td><?= strtoupper($row["name"]); ?></td>

                          <td rowspan="2" class="row">
                            <div class="col-md-3"></div>
                            <a href="edit.php?id=<?= $row['id']; ?>" class="btn btn-sm btn-info col-md-3 update-link">Edit</a>
                            <a href="delete.php?id=<?= $row['id'] ?>" class="btn btn-sm btn-danger col-md-3 delete-link">Delete</a>
                            <div class="col-md-3"></div>
                          </td>
                        </tr>
                      <?php endforeach; ?>

                    </tbody>
                    <tfoot>
                      <tr class="text-center">
                        <th>NO</th>
                        <th>IMG</th>
                        <th>NAME</th>
                        <th>ACTION</th>
                      </tr>
                    </tfoot>
                  </table>
                </div>
                <!-- /.card -->
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


    <!-- footer -->
    @include('admin.layouts.parts.footer')
    <!-- endfooter -->

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->

  </div>

  @include('admin.layouts.parts.script-body')
  @include('admin.layouts.parts.script-dataTable')
  <script>
    $(function() {
      $("#example1").DataTable({
        "responsive": true,
        "lengthChange": false,
        "autoWidth": false,
        "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
      }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
      $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
      });
    });
    jQuery(document).ready(function($) {
      $('.delete-link').on('click', function() {
        var getLink = $(this).attr('href');

        Swal.fire({
          title: 'Warning!',
          text: 'Are you sure you want to delete it? data will be lost',
          type: 'warning',
          // html:true,
          showCancelButton: true,
          cancelButtonColor: '#d33',
          confirmButtonColor: '#3085d6',
          confirmButtonText: 'Yes, Delete It!',
          allowOutsideClick: false
        }).then((result) => {
          if (result.value) {
            Swal.fire({
              title: 'Success!',
              text: 'One Brand has been deleted',
              type: 'success',
              confirmButtonColor: '#3085d6',
              confirmButtonText: 'OK',
              allowOutsideClick: false
            }).then((result) => {
              if (result.value) {
                window.location.href = getLink;
              }
            })

          }
        });
        return false;
      });
    });

    jQuery(document).ready(function($) {
      $('.update-link').on('click', function() {
        var getLink = $(this).attr('href');

        Swal.fire({
          title: 'Warning!',
          text: 'Are you sure you want to edit it?',
          type: 'question',
          // html:true,
          showCancelButton: true,
          cancelButtonColor: '#d33',
          confirmButtonColor: '#3085d6',
          confirmButtonText: 'Yes'
        }).then((result) => {
          if (result.value) {
            window.location.href = getLink;
          }
        });
        return false;
      });
    });
  </script>
</body>

</html>