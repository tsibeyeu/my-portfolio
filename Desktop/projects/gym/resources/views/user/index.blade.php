@extends('layouts.layout')
@section('content')
<x-NavBar.NAVBAR/>
<div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4 mt-5">
                   
                    <div class="row">
                    <div class="col-xl-3 col-md-6">
                             <div class="card bg-info  text-white mb-4">
                                <div class="card-body " style="margin-top:-0.7rem">
                                    <span style="font-size:2rem;">136.15</span>
                                   
                                    <div style=" margin-top:2rem display:inline-block;" >
                                        Total Revenue
                                    </div>   
                                </div>
                            </div> 
                        </div>
                        <div class="col-xl-3 col-md-6">
                             <div class="card bg-success  text-white mb-4">
                                <div class="card-body " style="margin-top:-0.7rem" >
                                    <span style="font-size:2rem;" >25</span>
                                    <div style=" margin-top:2rem display:inline-block;" >
                                        Branches
                                    </div>   
                                </div>
                                <div   style="display:inline; margin-left:10rem; margin-top:-5.5rem; margin-bottom:2rem;  
                                   font-size:2.5rem;">
                                  <span ><i class="fas fa-city"></i></span>  
                                </div>
                            </div> 
                        </div>
                        <div class="col-xl-3 col-md-6">
                             <div class="card bg-secondary text-white mb-4">
                                <div class="card-body" style="margin-top:-0.7rem">
                                    <span style="font-size:2rem;" >24</span>
                                    
                                        <div style=" margin-top:2rem display:inline-block;">
                                            Branche Manager
                                        </div>   
                                    </div>
                                    <div style="display:inline; margin-left:10rem; margin-top:-5.5rem; margin-bottom:2rem;  
                                   font-size:2.5rem;">
                                    <span><i class="fas fa-user-tie"></i></span>  
                                </div>
                            </div> 
                        </div>
                        <div class="col-xl-3 col-md-6">
                             <div class="card bg-danger text-white mb-4">
                                <div class="card-body" style="margin-top:-0.7rem">
                                    <span style="font-size:2rem;">50</span>
                                    <div style=" margin-top:2rem display:inline-block;">
                                        Gyms
                                    </div>   
                                </div>
                                <div  style="display:inline; margin-left:10rem; margin-top:-5.5rem; margin-bottom:2rem;  
                                   font-size:2.5rem;">
                                  <span><i class="fas fa-dumbbell"></i></span>  
                                </div>
                            </div> 
                        </div>
                        <div class="col-xl-3 col-md-6">
                             <div class="card bg-warning text-dark mb-4">
                                <div class="card-body" style="margin-top:-0.7rem">
                                    <span style="font-size:2rem;">40</span>
                                    <div  style=" margin-top:2rem display:inline-block;" >
                                        Gyms Manager
                                    </div>   
                                </div>
                                    <div style="display:inline; margin-left:10rem; margin-top:-5.5rem; margin-bottom:2rem;  
                                   font-size:2.5rem;">
                                      <span><i class="fas fa-user-tie"></i></span>  
                                    </div>
                            </div> 
                        </div>
                        <div class="col-xl-3 col-md-6">
                             <div class="card bg-white text-dark mb-4">
                                <div class="card-body" style="margin-top:-0.7rem">
                                    <span style="font-size:2rem;">60</span>
                                    <div  style=" margin-top:2rem display:inline-block;" >
                                        Coaches
                                    </div>   
                                </div>
                                <div style="display:inline; margin-left:10rem; margin-top:-5.5rem; margin-bottom:2rem;  
                                   font-size:2.5rem;">
                                  <span><i class="fas fa-user-tie"></i></span>  
                                </div>
                            </div> 
                        </div>
                        <div class="col-xl-3 col-md-6">
                             <div class="card bg-dark text-white mb-4">
                                <div class="card-body" style="margin-top:-0.7rem">
                                    <span style="font-size:2rem;">100</span>
                                    <div style=" margin-top:2rem display:inline-block;">
                                        Users
                                    </div>   
                                </div>
                                    <div style="display:inline; margin-left:10rem; margin-top:-5.5rem; margin-bottom:2rem;  
                                   font-size:2.5rem;">
                                      <span><i class="fas fa-users"></i></span>  
                                    </div>
                            </div> 
                        </div>     
                    
            </main>
           
        </div>
    </div>
@endsection
