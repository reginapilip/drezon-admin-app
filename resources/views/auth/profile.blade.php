@extends('layouts.master-layouts')
@section('title') @lang('translation.Profile') @endsection
@section('content')
    @component('components.breadcrumb')
        @slot('pagetitle') User @endslot
        @slot('title') Profile @endslot
    @endcomponent
    <div class="row align-items-center justify-content-center">
        <div class="col-md-8 col-lg-6 col-xl-5">
            <div class="p-2 mt-4">
                <form id="updateProfile" action="{{ url('/profile') }}" method="POST">
                @csrf
                    <input type="hidden" id="custId" name="custId" value="{{ id }}">
                    <div class="form-group">
                        <label for="name">{{ __('First Name') }}</label>
                        <input id="name" type="text"
                            class="form-control @error('name') is-invalid @enderror" name="name" autocomplete="name" autofocus placeholder="Update first name" value=" {{ first_name }}">

                      <!--  @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror -->
                    </div>

                    <div class="form-group">
                        <label for="lastname">{{ __('Last Name') }}</label>
                        <input id="lastname" type="text"
                            class="form-control @error('lastname') is-invalid @enderror" name="lastname" autocomplete="lastname" autofocus placeholder="Update last name" value="{{ last_name }}">

                      <!--  @error('lastname')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror -->
                    </div>

                    <div class="form-group">
                        <label for="email">{{ __('Email') }}</label>
                        <input id="email" type="email"
                            class="form-control @error('email') is-invalid @enderror" name="email" autocomplete="email" placeholder="Update email" value="{{ email }}">

                       <!-- @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror -->
                    </div>

                    <div class="form-group">
                        <label for="phone">{{ __('Phone') }}</label>
                        <input id="phone" type="text"
                            class="form-control @error('phone') is-invalid @enderror" name="phone" autocomplete="phone" autofocus placeholder="Update phone" value="{{ phone }}">

                       <!-- @error('phone')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror -->
                    </div>

                    <div class="mt-3 text-right">
                        <button class=" btn btn-primary btn-block waves-effect waves-light" type="submit">Update Profile</button>
                    </div>
                </form> 
            </div>
        </div> 
    </div>
    
@endsection
@section('script')
<script>
$("#updateProfile").submit(function(e) {
    e.preventDefault()
    console.log("hello")
    $.ajax({
        url: '{{ url('/profile') }}', 
        type: 'POST',
        dataType: 'json',
        headers: {
            'X-CSRF-TOKEN': '{{ csrf_token() }}',
        },
        data: {
            id: id,
            first_name: name,
            last_name: lastname,
            email: email,
            phone: phone
        },
        success: function(response) {
            alert('Success! Updates made.')
        }
    })
})
</script>

@endsection
