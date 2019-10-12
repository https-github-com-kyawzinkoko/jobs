@extends(layouts.app)
@section('content')
        <h3>Create New Job</h3>
    
    <hr>

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    {{ Form::open(['route' => 'products.store', 'method' => "POST"]) }}

        @include('form')

        <button class="btn btn-primary">Create New Product</button>

    {{ Form::close() }}


    
@endsection






















