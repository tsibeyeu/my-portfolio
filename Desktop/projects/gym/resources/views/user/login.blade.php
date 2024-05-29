
@extends('layouts.layout')
@section('content')
    <body class="bg-white">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="  container">
                   
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card  border-0  mt-5">
                                    <div class=" logo-text text-center font-weight-light mb-2 mt-2 ">
                                    <img src="{{ asset('gym.jpg') }}" alt="icon" style="width: 70px; margin-bottom:-7px ">
                                        <h4>Signature Residence</h4>
                                    </div>
                                    <div class=" brown-hieght brown card-body">
                                        <form action="{{route('user.login')}}" method="post">
                                            @csrf
                                            <div class=" brown-margin text-center font-weight-light mt-2" ><h2>SIGN IN</h2></div>
                                            <div class="col-10 mb-3 mx-auto ">
                                                <input class="form-control" name="email" id="inputEmail" type="email" placeholder="Email" />
                                            </div>
                                            <div class="col-10 mx-auto mb-3">
                                                <input class="form-control" name="password" id="inputPassword" type="password" placeholder="Password" />
                                            </div>
                                            <!-- <div class="form-check mb-3">
                                                <input class="form-check-input" id="inputRememberPassword" type="checkbox" value="" />
                                                <label class="form-check-label" for="inputRememberPassword">Remember Password</label>
                                            </div> -->
                                            <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                                
                                                <button class="btn-submit btn " type="submit" >Sign In</button>
                                            </div>
                                            <div class="text-center link-password mb-2 mt-2"><a href="">Forgot password?</a>
                                        </div>
                                        </form>
                                    </div>
                                    <!-- <div class="brown card-footer text-center py-3">
                                    
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <div id="layoutAuthentication_footer">
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Signature Residence 2024</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        
    </body>
@endsection


    

    
