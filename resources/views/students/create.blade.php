 @extends('layout')
 @section('content')
 

 <x-app-layout>
 
 <!-- Form Section -->
  <div class="row justify-content-center mt-4">
            <div class="col-md-8">
                <div class="form-area bg-light p-4 rounded">
                    <form method="post" action="{{ url('students')}}">
                        @csrf
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="emp_name">Student Name</label>
                                <input type="text" class="form-control" name="name" placeholder="Enter student name">
                            </div>
                            <div class="col-md-6">
                                <label for="dob">Student Address</label>
                                <input type="text" class="form-control" name="address">
                            </div>
                        </div>
                        <!-- <div class="mb-3">
                            <label for="phone">Phone</label>
                            <input type="text" class="form-control" name="phone" placeholder="Enter phone number">
                        </div> -->
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Register</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        </x-app-layout>

        @endsection
        