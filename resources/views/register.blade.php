@extends('layouts.layout')
@section('food')
<div class="container">
    
        <form action="" method="POST">
       
            <div class="container">
                <h1>Register</h1>
                <p>Please fill in this form to create an account.</p>
                <hr>

                <label for="text"><b>Username:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></label>
                <input type="text" placeholder="Enter name" name="text" id="text" required><br><br>

                <label
                    for="email"><b>Email:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></label>
                <input type="text" placeholder="Enter Email" name="email" id="email" required><br><br>

                <label
                    for="psw"><b>Password:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></label>
                <input type="password" placeholder="Enter Password" name="psw" id="psw" required><br><br>

                <label for="psw-repeat"><b>Confirm Password:</b></label>
                <input type="password" placeholder="Repeat Password" name="psw-repeat" id="psw-repeat" required><br><br>
                <hr>

                <p>By creating an account you agree to our <a href="/terms">Terms & Privacy</a>.</p>
                <button type="submit" class="registerbtn">Register</button>
            </div>

            <div class="container signin">
                <p>Already have an account? <a href="/login">Sign in</a>.</p>
            </div>
        </form>
        </div>
        </div>
        @endsection