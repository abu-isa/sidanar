@include('admin/header')
@include('admin/nav')
@include('admin/sidebar')

    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-table"></i> Table</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
              <li><i class="fa fa-table"></i>Table</li>
              <li><i class="fa fa-th-list"></i>Basic Table</li>
            </ol>
          </div>
        </div>
        <!-- page start-->
        <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">
                Advanced Table
              </header>

              <table class="table table-striped table-advance table-hover">
                <tbody>
                  <tr>
                    <th><i ></i> No</th>
                    <th><i class="icon_profile"></i> Judul Seminar</th>
                    <th><i class="icon_calendar"></i> Tanggal</th>
                    <th><i class="icon_mail_alt"></i> Harga</th>
                    <th><i class="icon_pin_alt"></i> Status</th>
                    <th><i class="icon_cogs"></i> Action</th>
                  </tr>
                  @foreach( $seminar as $data ) 
                  <tr>
                    <td></td>
                    <td>{{ $data->judul }}</td>
                    <td>{{ $data->tanggal }}</td>
                    <td>{{ $data->harga }}</td>
                    <td>{{ $data->status }}</td>
                    <td>
                      <div class="btn-group">
                        <a class="btn btn-primary" href="#"><i class="icon_plus_alt2"></i></a>
                        <a class="btn btn-success" href="#"><i class="icon_check_alt2"></i></a>
                        <form action="/deleteseminar/" method="post" class="d-inline">
                         
                          <button type="submit" class="btn btn-danger" ><i class="icon_close_alt2"></i></button>
                      </form>
                      </div>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </section>
          </div>
        </div>
        <!-- page end-->
      </section>
    </section>
@include('admin/footer')
   