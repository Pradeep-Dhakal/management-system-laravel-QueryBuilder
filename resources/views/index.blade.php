@extends('Master.master')
<div class="container">
    <div class="container mt-5">
        <div class="row">
            <div class="col md-4">
                <form method="POST">
                    @csrf

                    <div>
                        <label for="username" class="form-label">Name</label>
                        <input type="text" name="name" class="form-control" id="exampleInputEmail1"
                            aria-describedby="">
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="text" name="email" class="form-control" id="exampleInputEmail1"
                            aria-describedby="">

                    </div>

                    <div class="mb-3">
                        <label for="" class="form-label">Address</label>
                        <input type="text" name="address" class="form-control" id="" aria-describedby="">
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
                @if (session()->has('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
            </div>
            <div class="col-md-8">
                <div class="table-responsive">
                    <div>
                        <table class="table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Address</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($manxeharu as $manxe)
                                    <tr>
                                        <th scope="row">{{ $manxe->id }}</th>
                                        <td class="w-25">{{ $manxe->name }}</td>
                                        <td class="w-25">{{ $manxe->email }}</td>
                                        <td class="w-35">{{ $manxe->address }}</td>
                                        <td class="w-25">
                                            <a href="{{ url('/edit', $manxe->id) }}"
                                                class="btn btn-primary btn-sm">Edit</a>
                                            <a href="{{ url('/delete', $manxe->id) }}"
                                                class="btn btn-danger btn-sm">Delete</a>
                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>

                    </div>
                </div>

            </div>
        </div>
    </div>
