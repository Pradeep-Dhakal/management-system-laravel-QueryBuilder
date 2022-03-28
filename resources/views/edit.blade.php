@extends('Master.master')
<div class="container">
    <div class="row">
        <div class="col md-6 text-center">
            <form method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="username" class="form-label">Name</label>
                    <input type="text" name="name" class="form-control" id="exampleInputEmail1"
                        aria-describedby="emailHelp" value="{{ $manxeharu->name }}">

                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="text" name="email" class="form-control" id="exampleInputEmail1"
                        aria-describedby="" value="{{ $manxeharu->email }}">

                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Address</label>
                    <input type="text" name="address" class="form-control" id="" aria-describedby="" value="{{ $manxeharu->address }}">

                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
        <div class="col md-6">

        </div>
    </div>

</div>
