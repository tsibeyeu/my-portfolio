@extends('layouts.layout')
@section('content')
<x-nav-bar.NAVBAR/>
<div id="layoutSidenav_content">
         <main>
            <div class="container-fluid px-4">
                <h1 class="mt-4"></h1>
                    <ol class="breadcrumb mb-4">
                         <li class="breadcrumb-item active"></li>
                    </ol>            
             </div>
            <div class="container mt-3">
                <div class="row justify-content-center">
                    <div class="col-md-">
                        <div class="card">
                            <div class="card-header">
                                <h4>Manager Entry Form
                                    <a href="{{route('manager.show')}}" class="btn btn-danger float-end">Back</a>
                                </h4>
                            </div>
                            <div class="card-body">
                                <form action="{{route('manager.store')}}" method="POST">
                                    @csrf
                                    <input type="hidden" name="manager_id" >
                                    <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-md-10">
                                    <div class="my-2">
                                           <div class="row mb-3">
                                                    <div class="col-md-9">
                                                        <label for="inputEmail">Full Name </label>
                                                        <input class="form-control"  name="name" id="inputFirstName" type="text"  required />
                                                    </div>
                                                    </div>
                                                    <div class="row mb-3">
                                                    <div class="col-md-9">
                                                <label for="inputEmail">Email </label>
                                                <input type="text" id="member" name="email" class="form-control" required />
                                                    </div>
                                                    </div>
                                                    <div class="row mb-3">
                                                    <div class="col-md-9">
                                                        <label for="mobile_number">phone number</label>
                                                        <input class="form-control"  name="phone_number" id="mobile_number" type="tel" required />
                                                    </div>
                                                    </div>
                                                    <div class="row mb-3">
                                                    <div class="col-md-9">
                                                            <label for="password">password</label>
                                                        <input class="form-control" name="password" id="password" type="text" required/>
                                                    </div>
                                                    </div>
                                    <div>
                                        <button class="btn btn-primary" type="submit">store</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
   </div>
  
@endsection