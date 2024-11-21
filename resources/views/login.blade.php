@extends('master')
@section("content")

<div class="container custom-login">
    <div class="row">
        <div class="col-sm-4 col-sm-offset-4">
            <form action="login" method="POST">
                @csrf
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
                <button type="submit" class="btn btn-default btn-login">Login</button>
            </form>
        </div>
    </div>
</div>

<style>
    /* Background color and padding for the container */
    .custom-login {
        background-color: #f7f7f7;
        padding: 40px 0;
    }

    /* Form group spacing */
    .custom-login .form-group {
        margin-bottom: 15px;
    }

    /* Input fields style */
    .custom-login .form-control {
        border-radius: 25px; /* Rounded edges */
        border: 1px solid #ccc; /* Light grey border */
        padding: 12px 20px; /* Padding for the fields */
        font-size: 14px; /* Font size */
        transition: border-color 0.3s, box-shadow 0.3s; /* Smooth transition for focus effect */
    }

    /* Input fields on focus */
    .custom-login .form-control:focus {
        border-color: #2575fc; /* Blue border on focus */
        box-shadow: 0 0 10px rgba(37, 117, 252, 0.3); /* Light shadow on focus */
        outline: none; /* Remove default outline */
    }

    /* Login button style */
    .btn-login {
        background-color: #2575fc; /* Blue background */
        color: white; /* White text */
        border-radius: 25px; /* Rounded edges */
        padding: 12px 20px; /* Padding for button */
        width: 100%; /* Full width */
        font-size: 16px; /* Button text size */
        border: none; /* Remove default border */
        cursor: pointer; /* Pointer cursor on hover */
        transition: background-color 0.3s, transform 0.3s ease-in-out; /* Smooth transition */
    }

    /* Login button hover effect */
    .btn-login:hover {
        background-color: #1e5bb5; /* Darker blue on hover */
        transform: scale(1.05); /* Slightly enlarge button on hover */
    }

    /* Button active state */
    .btn-login:active {
        background-color: #1a4f8a; /* Even darker blue on click */
    }

    /* Responsive form container */
    .col-sm-4 {
        width: 100%;
        max-width: 400px;
        margin: 0 auto;
    }

    /* Media query for smaller devices */
    @media (max-width: 576px) {
        .col-sm-4 {
            width: 90%;
        }
    }
</style>

@endsection
