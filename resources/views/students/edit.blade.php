@extends('layout')

@section('content')
<x-app-layout>

    <div class="container">

        <h3 align="center" class="mt-5">Edit Page</h3>

        <div class="row">
            <div class="col-md-2">
            </div>
            <div class="col-md-8">

            <div class="form-area">
                <form method="post" action="{{ url('students/' .$students->id) }}">
                {!! csrf_field() !!}
                  @method("PATCH")
                    <div class="row">
                        <div class="col-md-6">
                            <label>Student Name</label>
                            <input type="text" class="form-control" name="name" value="{{ $students->name }}">
                        </div>
                        <div class="col-md-6">
                            <label>Student DOB</label>
                            <input type="text" class="form-control" name="address" value="{{ $students->address }}">
                        </div>
                    </div>
                    <!-- <div class="row">
                        <div class="col-md-12">
                            <label>Address</label>
                            <input type="text" class="form-control" name="phone" value="{{ $students->phone }}">
                        </div>

                    </div> -->
                    <div class="row">
                        <div class="col-md-12 mt-3">
                            <input type="submit" class="btn btn-primary" value="Update">
                        </div>

                    </div>
                </form>
            </div>

            </div>
        </div>
    </div>
    </x-app-layout>

@endsection


@push('css')
    <style>
        .form-area{
            padding: 20px;
            margin-top: 20px;
            background-color:#b3e5fc;
        }

        .bi-trash-fill{
            color:red;
            font-size: 18px;
        }

        .bi-pencil{
            color:green;
            font-size: 18px;
            margin-left: 20px;
        }
    </style>
@endpush