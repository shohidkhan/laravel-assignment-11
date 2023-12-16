@extends('layouts.app')
@section('content')
<div class="main-content">
    <div class="page-content">
      <div class="container-fluid">
        <div class="row">
          <div class="col">
            <div class="h-100">
              <div class="row mb-3 pb-1">
                <div class="col-12">
                  <div
                    class="d-flex align-items-lg-center flex-lg-row flex-column"
                  >
                    <div class="flex-grow-1"> 
                      <h4>Welcome to Dashboard </h4>
                     
                    </div>
                  </div>
                  <!-- end card header -->
                </div>
                <!--end col-->
              </div>
              <!--end row-->

              <div class="row">
                <div class="col-xl-3 col-md-6">
                  <!-- card -->
                  <div class="card card-animate bg-primary">
                    <div class="card-body">
                      <div class="d-flex align-items-center">
                        <div class="flex-grow-1 overflow-hidden">
                          <p
                            class="text-uppercase fw-medium text-white  text-truncate mb-0"
                          >
                            Today Sales
                          </p>
                        </div>
                        
                      </div>
                      <div
                        class="d-flex align-items-end justify-content-between mt-4"
                      >
                        <div>
                          <h4 class="fs-22 text-white fw-semibold ff-secondary mb-4">
                            $<span
                              class="counter-value"
                              data-target="550"
                              >0</span
                            >
                          </h4>
                        </div>
                      </div>
                    </div>
                    <!-- end card body -->
                  </div>
                  <!-- end card -->
                </div>
                <!-- end col -->

                <div class="col-xl-3 col-md-6">
                  <!-- card -->
                  <div class="card card-animate bg-danger">
                    <div class="card-body">
                      <div class="d-flex align-items-center">
                        <div class="flex-grow-1 overflow-hidden">
                          <p
                            class="text-uppercase fw-medium text-white text-truncate mb-0"
                          >
                          Yesterday Sales
                          </p>
                        </div>
                      </div>
                      <div
                        class="d-flex align-items-end justify-content-between mt-4"
                      >
                        <div>
                          <h4 class="fs-22 text-white fw-semibold ff-secondary mb-4">
                            $<span class="counter-value" data-target="860"
                              >0</span
                            >
                          </h4>
                        </div>
                      </div>
                    </div>
                    <!-- end card body -->
                  </div>
                  <!-- end card -->
                </div>
                <!-- end col -->

                <div class="col-xl-3 col-md-6">
                  <!-- card -->
                  <div class="card card-animate bg-warning text-white">
                    <div class="card-body">
                      <div class="d-flex align-items-center">
                        <div class="flex-grow-1 overflow-hidden">
                          <p
                            class="text-uppercase fw-medium  text-truncate mb-0"
                          >
                            This Month Sales
                          </p>
                        </div>
                      </div>
                      <div
                        class="d-flex align-items-end justify-content-between mt-4"
                      >
                        <div>
                          <h4 class="fs-22 text-white fw-semibold ff-secondary mb-4">
                            $<span class="counter-value" data-target="10"
                              >0</span
                            >k
                          </h4>
                          
                        </div>
                      </div>
                    </div>
                    <!-- end card body -->
                  </div>
                  <!-- end card -->
                </div>
                <!-- end col -->

                <div class="col-xl-3 col-md-6">
                  <!-- card -->
                  <div class="card card-animate bg-success ">
                    <div class="card-body">
                      <div class="d-flex align-items-center">
                        <div class="flex-grow-1 overflow-hidden">
                          <p
                            class="text-uppercase text-white  fw-medium  text-truncate mb-0"
                          >
                            Last Month Sales
                          </p>
                        </div>
                      </div>
                      <div
                        class="d-flex text-white align-items-end justify-content-between mt-4"
                      >
                        <div>
                          <h4 class="fs-22 text-white fw-semibold ff-secondary mb-4">
                            $<span
                              class="counter-value"
                              data-target="23"
                              >0</span
                            >k
                          </h4>
                        </div>
                      </div>
                    </div>
                    <!-- end card body -->
                  </div>
                  <!-- end card -->
                </div>
                <!-- end col -->
              </div>
              <!-- end row-->

             
              <!-- end row-->
            </div>
            <!-- end .h-100-->
          </div>
          <!-- end col -->
        </div>
      </div>
      <!-- container-fluid -->
    </div>
    <!-- End Page-content -->

    @include('components.footer')
  </div>
  <!-- end main content-->
@endsection