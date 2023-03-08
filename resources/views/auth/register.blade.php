@extends('layout.auth')

@section('content')
<div class="d-flex flex-row vh-100">
    <div class="d-flex w-50 h-100 flex-column justify-content-center bg-danger px-5 text-white">
        <h4>Welcome to Oiku</h4>
        <div class="border border-bottom border-2 border-white w-25 mb-4"></div>
        <p>Oiku is a food and beverage store consisting of home-industry level to industrial level products</p>
        <a href="/" class="btn btn-outline-light w-50 mt-3 rounded-4">Home</a>
    </div>
    <div class="d-flex w-50 h-100 flex-column align-items-center justify-content-center">
        <h4>Be A Part of Us</h4>
        <form action="{{ url('store-user') }}" method="post" class="w-50 mt-5">
            @csrf
            <div class="mb-3">
                <label for="userName" class="form-label">Full Name</label>
                <input type="text" class="form-control" id="userName" name="name" placeholder="Full Name">
            </div>
            <div class="mb-3">
                <label for="userEmail" class="form-label">Email</label>
                <input type="text" class="form-control" id="userEmail" name="email" placeholder="Email">
            </div>
            <div class="mb-3">
                <label for="userPhone" class="form-label">Phone</label>
                <input type="text" class="form-control" id="userPhone" name="phone" placeholder="Phone">
            </div>
            <div class="mb-4">
                <label for="userPassword" class="form-label">Password</label>
                <input type="password" class="form-control" id="userPassword" name="password" placeholder="Password">
            </div>
            <button type="submit" class="btn btn-danger rounded-4 w-50">Login</button>
        </form>
    </div>
</div>
@endsection