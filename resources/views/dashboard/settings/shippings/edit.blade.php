@extends('layouts.admin')

@section('content')

<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-6 col-12">
                <div class="row breadcrumbs-top">
                    <div class="breadcrumb-wrapper col-12 ">
                        <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('Dashboard.index') }}">{{__('admin/sidebar.Main')}}</a>
                            </li>
                            {{-- <li class="breadcrumb-item"><a href="{{route('admin.vendors')}}">المتاجر </a>
                            </li> --}}
                            <li class="breadcrumb-item active">Edit Shipping Method</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-body bg-white">
            <!-- Basic form layout section start -->
            <section id="">
                <div class="row match-height">
                    <div class="col-md-12">
                        <div class="row">

                            <div class="col-3 mt-5 ml-3 pt-2 border-right border-bottom-lighten-1">
                              <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                <a class="nav-link btn btn-outline-instagram mb-1 pr-1 border-bottom text-dark btn-lg" href="{{ route('Shipping.Methods.Edit', 'Free') }}" >{{__('admin/sidebar.Free')}}</a>
                                <a class="nav-link btn btn-outline-instagram mb-1 pr-1 border-bottom text-dark btn-lg" href="{{ route('Shipping.Methods.Edit', 'Outer') }}" >{{__('admin/sidebar.Outer')}}</a>
                                <a class="nav-link btn btn-outline-instagram mb-1 pr-1 border-bottom text-dark btn-lg" href="{{ route('Shipping.Methods.Edit', 'Local') }}">{{__('admin/sidebar.Local')}}</a>
                              </div>
                            </div>
                            <div class="col-6">
                              <div class="tab-content" id="v-pills-tabContent">
                                @if (!empty($shippingmethod))
                              <h2 class="text-center border-bottom py-2"><i class="fa fa-truck fa-4x"></i>{{__('admin/sidebar.Edit')}}</h2>
                                <form class="mt-3" action="{{ route('Shipping.Methods.Update',$shippingmethod->id) }}" method="POST">
                                   @csrf
                                    @include('dashboard.includes.alerts.success')
                                    @include('dashboard.includes.alerts.errors')
                                    <div class="form-group form-check">
                                        <input type="checkbox" class="form-check-inline" id="exampleCheck1">
                                        <label class="form-check-label" for="exampleCheck1">{{__('admin/sidebar.Enable')}}</label>
                                      </div>
                                    <div class="form-group">
                                      <label for="Name">{{__('admin/sidebar.Name')}}</label>
                                    <input type="text" class="form-control" id="Name"  value="{{$shippingmethod->value}}" name="name">
                                    </div>
                                        @error('Name')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    <div class="form-group">
                                      <label for="value">{{__('admin/sidebar.Cost')}}</label>
                                    <input type="number" class="form-control" id="value" name="value" value="{{$shippingmethod->plain_value}}">
                                    </div>
                                    @error('value')
                                    <div class="alert alert-red text-center">{{ $message }}</div>
                                    @enderror
                                    <button type="submit" class="btn btn-tumblr">{{__('admin/sidebar.Save')}}</button>
                                    @else
                                      <h2 class="text-center text-danger py-4">{{__('admin/sidebar.Choose')}}</h2>
                                  </form>
                                  @endif
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
