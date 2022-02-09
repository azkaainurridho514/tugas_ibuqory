@extends('dashboard.layout.main')

@section('container')
<div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Legacy User Menu</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Legacy User Menu</li>
            </ol>
          </div>
        </div>
      </div>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-lg-8">
                <div class="row">
                    <div class="col">
                        <div class="card">
                            <div class="card-header">
                              <h3 class="card-title">{{ auth()->user()->name }}</h3>
                              {{-- <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                  <i class="fas fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                                  <i class="fas fa-times"></i>
                                </button>
                              </div> --}}
                            </div>
                            <div class="card-body">
                              <h5>Welcome back {{ auth()->user()->name }}, Your profile : </h5>
                              <h5><small>Name: {{ auth()->user()->name }} </small></h5>
                              <h5><small>Username: {{ auth()->user()->username }} </small></h5>
                              <h5><small>Email: {{ auth()->user()->email }} </small></h5>
                              <h5><small>Member since: {{ auth()->user()->created_at }} </small></h5>
                            </div>
                            <div class="card-footer">
                              Thanks for your visit!
                            </div>
                          </div>
                    </div>
                </div>
        <div class="row">
            <div class="col-lg-6">
             <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title">Bar Chart</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <div class="card-body">
                <div class="chart">
                  <canvas id="barChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
        </div>
           <div class="col-lg-6">            
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Bar Chart</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <div class="card-body">
                <div class="chart">
                  <canvas id="barChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
           </div>
         </div>
           </div>
            <div class="col-lg-4">
                <div class="card">
                  <div class="card-header">
                    <h3 class="card-title">Your last post</h3>
                  </div>
                  <div class="card-body">
                    <table id="example1" class="table table-striped">
                        <thead>
                        <tr>
                          <th>Image</th>
                          <th>Date post</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                          <td class="d-flex justify-content-center"><img src="/img/projects.jpg" alt="" class="img-fluid" style="max-width: 90px;"></td>
                          <td>Win 95+</td>
                        </tr>
                        <tr>
                          <td class="d-flex justify-content-center"><img src="/img/projects.jpg" alt="" class="img-fluid" style="max-width: 90px;"></td>
                          <td>Win 95+</td>
                        </tr>
                        <tr>
                          <td class="d-flex justify-content-center"><img src="/img/projects.jpg" alt="" class="img-fluid" style="max-width: 90px;"></td>
                          <td>Win 95+</td>
                        </tr>
                        <tr>
                          <td class="d-flex justify-content-center"><img src="/img/projects.jpg" alt="" class="img-fluid" style="max-width: 90px;"></td>
                          <td>Win 95+</td>
                        </tr>
                        <tr>
                          <td class="d-flex justify-content-center"><img src="/img/projects.jpg" alt="" class="img-fluid" style="max-width: 90px;"></td>
                          <td>Win 95+</td>
                        </tr>
                        </tbody>
                      </table>
                  </div>
                  <div class="card-footer">
                    just 5 show entries
                  </div>
                </div>
            </div>
        </div>


    </section>
  </div>
  
@endsection