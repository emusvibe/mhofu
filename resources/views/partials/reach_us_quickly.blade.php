<div class="col-md-7">

    @include('partials.alerts.errors')

    @if(Session::has('flash_message'))
    <div class="alert alert-success">
        {{ Session::get('flash_message') }}
    </div>
    @endif

    {!! Form::open(['route' => 'contact.store']) !!}

    <h5>Reach us quickly</h5>
    <div class="row">
        <div class="col-sm-6 col-12">

            <div class="form-group">
                {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Enter Name',
                'required' => 'required']) !!}
            </div>

        </div>

        <div class="col-sm-6 col-12">

            <div class="form-group">
                {!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'Enter Email',
                'required' => 'required']) !!}
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6 col-12">
            <div class="form-group">
                {!! Form::text('phone', null, ['class' => 'form-control', 'placeholder' => 'Your Phone',
                'required' => 'required']) !!}
            </div>
        </div>
        <div class="col-sm-6 col-12">
            <div class="form-group">
                {!! Form::text('company', null, ['class' => 'form-control', 'placeholder' => 'Your Company',
                'required' => 'required']) !!}
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="form-group">
                {!! Form::textarea('message', null, ['class' => 'form-control', 'placeholder' => 'Message',
                'required' => 'required']) !!}
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12 mt-3">
            {!! Form::submit('Send Message', ['class' => 'btn primary-solid-btn']) !!}

            {!! Form::close() !!}
        </div>
    </div>
    </form>
    <p class="form-message"></p>
</div>