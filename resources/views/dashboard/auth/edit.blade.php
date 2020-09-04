@extends('layouts.admin')

@section('content')

<div class="app-content content">
    <div class="content-wrapper">
      <div class="content-body">
        <!-- Basic form layout section start -->
        <section id="basic-form-layouts">
          <div class="row match-height">
            <div class="col-md-12">
              <div class="card">
                <div class="card-content collapse show">
                  <div class="card-body">
                      <!-- Alerts -->
                    @include('dashboard.includes.alerts.success')
                    @include('dashboard.includes.alerts.errors')
                      <!-- Form -->
                    <form class="form" action="{{ route('admin.update') }}" method="POST">

                        @csrf
                        @method('PUT')
                      <div class="form-body">
                        <input type="hidden" value="{{$admin->id}}" name="id">
                        <h4 class="form-section text-center"><i class="la la-eye"></i>Edit Admin Info</h4>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="userinput1">Name</label>
                            <input type="text" id="userinput1" class="form-control border-primary" value="{{$admin->aname}}"
                              name="aname">
                              @error('aname')
                              <span class="text-danger mb-2">{{$message}}</span>
                              @enderror
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="userinput2">E-mail</label>
                              <input type="email" id="userinput2" class="form-control border-primary" value="{{$admin->aemail}}"
                              name="aemail">
                              @error('aemail')
                              <span class="text-danger">{{$message}}</span>
                              @enderror
                            </div>
                            </div>
                        </div>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="userinput3">Password</label>
                              <input type="password" id="userinput3" class="form-control border-primary" placeholder="Password"
                              name="password">
                              @error('password')
                              <span class="text-danger mb-2">{{$message}}</span>
                              @enderror
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="userinput4">Password Confirmation</label>
                              <input type="password" id="userinput4" class="form-control border-primary" placeholder="Password Confirmation"
                              name="password_confirmation">
                              @error('password_confirmation')
                              <span class="text-danger mb-2">{{$message}}</span>
                              @enderror
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="form-actions right">
                        <button type="button" class="btn btn-warning mr-1">
                          <i class="ft-x"></i> Cancel
                        </button>
                        <button type="submit" class="btn btn-primary">
                          <i class="la la-check-square-o"></i> Save
                        </button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- // Basic form layout section end -->
      </div>
    </div>
  </div>

@endsection
