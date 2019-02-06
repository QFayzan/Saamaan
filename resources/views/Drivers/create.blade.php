@extends('layouts.user')

@section('content')
    <main class="py-4">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card text-justify">
                        <div class="card-header">Request to be a Driver</div>
                        <div class="card-body">
                            <p>
                                Being a driver on Saaman is a great freelancing opportunity.
                                In order to be a Driver for Saamaan and take deliveries on our behalf there are some
                                basic requirements that any potential driver must fulfil.
                            </p>
                            <h5>Requirements</h5>
                            <ul>
                                <li> You must have a verified CNIC and a Driver's licence (Learner's license is invalid).</li>
                                <li>A vehicle on your own name is a standard requirement.</li>
                                <li>Vehicle Ownership documents WILL be verified by us (which may take 2 business days).</li>
                                <li>Client's personal legal history would be taken in account during the process.</li>
                                <li>The company holds full control over a driver's membership which may be terminated anytime.
                            </ul>
                            
                            <p>
                                In order to be a driver any candidate must approach our one of may offices in their respective
                                cities city.
                                This step is Mandatory.
                            </p>
                            <h5> Our Offices include</h5>
                            <ul>
                                <li>XYZ Colony, Lahore</li>
                                <li>ABC Market, Islamabad</li>
                                <li>JKL Road, Karachi</li>
                            </ul>
                        </div>
                        <div class="card-footer">
                            <button class="btn btn-success"
                                    data-toggle="modal" data-target="#apply-for-driver">Apply Now !
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Model -->
            <div class="modal fade" id="apply-for-driver" tabindex="-1"
                 aria-labelledby="apply-for-driver" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <form action="{{ route('drivers.store') }}" method="post" enctype="multipart/form-data">
                            <div class="modal-header">
                                <h5 class="modal-title">Apply now to be a driver</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                @csrf
                                <div class="form-group row">
                                    <label for="password" class="col-sm-2 col-form-label">Password :</label>
                                    <div class="col-sm-10">
                                        <input id="password" type="password" name="password"
                                               class="form-control {{ $errors->has('password') ? "is-invalid" : "" }}"
                                               value="{{ old('password') }}" placeholder="Your Password">
                                        @if($errors->has('password'))
                                            <strong class="invalid-feedback">{{ $errors->first('password') }}</strong>
                                        @endif
                                    </div>
                                </div>
                                
                                <div class="form-group row">
                                    <label for="cnic_number" class="col-sm-2 col-form-label">CNIC Number :</label>
                                    <div class="col-sm-10">
                                        <input id="cnic_number" type="text" name="cnic_number" class="form-control {{ $errors->has
                                    ('cnic_number') ? "is-invalid" : "" }}" value="{{ old('cnic_number') }}"
                                               placeholder="Your CNIC Number">
                                        @if($errors->has('cnic_number'))
                                            <strong class="invalid-feedback">{{ $errors->first('cnic_number') }}</strong>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="picture" class="col-sm-2 col-form-label">Picture :</label>
                                    <div class="col-sm-10">
                                        <div class="custom-file">
                                            <input id="custom-file" type="file" name="image"
                                                   class="custom-file-input {{ $errors->has('image') ? "is-invalid" : "" }}"
                                                   value="{{ old('image') }}" placeholder="image">
                                            <label class="custom-file-label" for="custom-file">Upload Your Image</label>
                                        </div>
                                        @if($errors->has('image'))
                                            <strong class="invalid-feedback">{{ $errors->first('image') }}</strong>
                                        @endif
                                    </div>
                                </div>
                            
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Apply</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        
        </div>
    </main>
@endsection