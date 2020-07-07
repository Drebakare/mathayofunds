@extends('layouts.app')
@section('contents')
    <!-- Section -->
    <div class="section section-pad">
        <div class="container">
            <div class="tab-custom">
                <!-- Tab panes -->
                <div class="tab-content">
                    <div class="tab-pane fade in active" id="tab1">
                        <div class="row">
                            <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                                <h3 class="heading-lead center">Account Verification</h3>
                                <div class="alert alert-danger" style="margin-top: 10px;">
                                    <h6>Kindly Click on The Link Sent to Your Email for Account Verification or Click on The Button Below to Resend Link</h6>
                                </div>
                                <a href="{{route('user.resend-verification-link', ['token' => Auth::user()->token])}}" class="btn btn-alt">Resend Link</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Section -->
@endsection
