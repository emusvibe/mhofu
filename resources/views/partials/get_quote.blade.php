<div class="sign-up-form-wrap position-relative rounded p-5 gray-light-bg mt-5">
    @include('partials.alerts.errors')

    @if(Session::has('flash_message'))
    <div class="alert alert-success">
        {{ Session::get('flash_message') }}
    </div>
    @endif

    {!! Form::open(['route' => 'quote.store']) !!}
    <div class="sign-up-form-header text-center mb-4">
        <h4 class="mb-0">Get a quote today</h4>
        <p>Get response within 24 hours</p>
    </div>

    <div class="form-group input-group">
        {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Enter your name', 'type' => 'email',
        'required' => 'required']) !!}
    </div>
    <div class="form-group input-group">
        {!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'Enter your email',
        'required' => 'required']) !!}
    </div>
    <div class="form-group input-group">
        {!! Form::text('subject', null, ['class' => 'form-control', 'placeholder' => 'Enter subject',
        'required' => 'required']) !!}
    </div>
    <div class="form-group input-group">
        {!! Form::textarea('message', null, ['class' => 'form-control','rows'=>'6', 'placeholder' => 'Write your message',
        'required' => 'required']) !!}
    </div>
    <div class="form-group">
        {!! Form::submit('Send', ['class' => 'btn solid-btn btn-block']) !!}
    </div>
    <div class="form-check d-flex align-items-center text-center">
        <input type="checkbox" class="form-check-input mt-0 mr-3" id="agree" required>
        <label class="form-check-label" for="exampleCheck1">I agree your <a href="#">terms & conditions</a></label>
        {!! Form::close() !!}
    </div>

</div>