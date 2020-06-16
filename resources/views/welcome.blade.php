<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Speakable Me
                </div>

                <div class="container">
                                            <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#RegistrationForTeachers">
                            Become a Teacher
                        </button>
                        
                        <!-- Modal -->
                        <div class="modal fade" id="RegistrationForTeachers" tabindex="-1" role="dialog" aria-labelledby="RegistrationForTeachersLabel" aria-hidden="true">
                            <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h5 class="modal-title" id="RegistrationForTeachersLabel">Teacher's Registration</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                </div>
                                <form action="{{ route('mail.store') }}" method="POST">   
                                    @csrf                       
                                        <div class="modal-body">
                                        <div class="form-group">
                                        <label for="RegistrationForTeachersInput">Email address</label>
                                        <input type="email" class="form-control" name="email" id="RegistrationForTeachersInput" placeholder="name@example.com">
                                      </div>
                                      <small id="passwordHelpBlock" class="form-text text-muted">
                                        Please enter your email address below in order for us to send the application form to you directly. 
                                      </small>
                                </div>
                                <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                                </div>
                            </div>
                            </div>
                        </div>

                         &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#schoolPartner">
                            Become a School Partner
                        </button>
                        
                        <!-- Modal -->
                        <div class="modal fade" id="schoolPartner" tabindex="-1" role="dialog" aria-labelledby="schoolPartnerLabel" aria-hidden="true">
                            <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h5 class="modal-title" id="schoolPartnerLabel">School Partner Registration</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                </div>
                                <form action="{{ route('partnermail.store') }}" method="POST">    
                                    @csrf                      
                                        <div class="modal-body">
                                         <div class="form-group">
                                        <label for="schoolPartnerControlInput">Email address</label>
                                        <input type="email" class="form-control" name="schoolPartnerEmail" id="schoolPartnerControlInput" placeholder="name@example.com">
                                      </div>

                                      <small id="passwordHelpBlock" class="form-text text-muted">
                                        Please enter your email address below in order for us to send the application form to you directly. 
                                      </small>
                                </div>
                                <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                                </div>
                            </div>
                            </div>
                        </div>
                </div>

                {{-- <div class="links">
                    <a href="{{ url('teacher.registration') }}">Become a Teacher</a>
                    <a href="https://laracasts.com">Become a School Partner</a>    
                </div> --}}
            </div>
        </div>

        <script src="{{ asset('js/app.js') }}" defer></script>
    </body>

</html>
