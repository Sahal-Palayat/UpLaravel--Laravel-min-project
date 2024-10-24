@extends('layout')

@section('content')
<x-app-layout>

    <div class="container">
        <h3 class="text-center mt-5">Student Application</h3>

      <a href="{{url('students/create')}}" class="btn btn-success btn-sm" title="Add New Student"><i class="fa fa-plus" aria-hidden="true"></i>Add New </a>

        <!-- Table Section -->
        <table class="table mt-5">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Student Name</th>
                    <th scope="col">Address</th>
                    <!-- <th scope="col">Mobile</th> -->
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($students as $key => $student)
                    <tr>
                        <td>{{ ++$key }}</td>
                        <td>{{ $student->name }}</td>
                        <td>{{ $student->address }}</td>
                        <!-- <td>{{ $student->mobile }}</td> -->
                        <td>
                           <a href='{{ url('/students/' .$student->id)}}' class="btn btn-success btn-sm">View</a>
                            <a href='{{url('/students/' .$student->id . '/edit')}}' class="btn btn-primary btn-sm">Edit</a>
                            <form  method="POST" action="{{url('/students' . '/' . $student->id)}}" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button  type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    </x-app-layout>
@endsection

@push('css')
<style>
    .form-area {
        background-color: #f8f9fa;
        border-radius: 8px;
    }
</style>
@endpush
