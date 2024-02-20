@extends('layouts.app')

@section('contents')

@include('beranda')

    

        <form action="/logout" method="post">
            @csrf
            <button type="submit" class="btn btn-primary">Logout</button>
            

        </form>
        
    </div>
@endsection
