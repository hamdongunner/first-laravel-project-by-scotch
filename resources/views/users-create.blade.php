@extends('layouts.main')

@section('content')
<!-- اليوست احسن ميثود نستخدمها-->
    <form action="/users" method="POST">

        {!! csrf_field() !!}

        <div class="form-group">
            <label>Name</label>
            <input type="text" name="name" class="form-control">
        </div>


        <div class="form-group">
            <label>Email</label>
            <input type="email" name="email" class="form-control">
        </div>
<!--من اخلي التايب ايميل هو راح يبدي يجيك الصحة مالته-->

        <div class="form-group">
            <label>Password</label>
            <input type="password" name="password" class="form-control">
        </div>


        <div class="form-group">
            <button type="submit" class="btn btn-block btn-primary">
                Create
            </button>
        </div>
        
    </form>

@endsection