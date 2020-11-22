@include('admin/header')
@include('admin/nav')
@include('admin/sidebar')

    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-table"></i> Seminar</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="{{ url('/admin') }}">Home</a></li>
              <li><i class="fa fa-table"></i><a href="{{ url('/listseminar') }}">Seminar</a></li>
              <li><i class="fa fa-th-list"></i>Create Seminar</li>
            </ol>
          </div>
        </div>
         <!-- page start-->
		<div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">
                Create seminar
              </header>
              <div class="panel-body">
              <form method="post" action="/store_seminar" enctype="multipart/form-data">
              	 <input type ='hidden' name ='_token' value ='<?php echo csrf_token(); ?>' >
                  <div class="form-group col-sm-6">
                    <label for="judul">Seminar</label>
                    <input type="text" class="form-control" id="judul" name="judul">
                  </div>
                  <div class="form-group col-sm-6">
                    <label for="tanggal">Date</label>
                    <input type="date" class="form-control" id="tanggal" name="tanggal">
                  </div>
                  <div class="form-group col-sm-6">
                    <label for="harga">Price</label>
                    <input type="text" class="form-control" id="harga" name="harga">
                  </div>
                  <div class="form-group  col-sm-6">
                    <label for="images">Image</label>
                    <input type="file" id="images" name="image">
                  </div>
                  <input type="hidden" name="status" value="1">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </form>

              </div>
            </section>
          </div>
        </div>
<!-- page end-->
       </section>
    </section>
@include('admin/footer')