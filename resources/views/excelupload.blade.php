@extends('layout.main')
@section('main-container')
<div class="container mt-4">
    <h3>Excel file with all data</h3>
    <form action="{{route('file.upload')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Upload Excel File</label>
            <input type="file" class="form-control" name="excel_file" id="excel_file"
                aria-describedby="emailHelp" accept="application/vnd.openxmlformats-officedocument.spreadsheetml.sheet">
            <span class="text-danger">
                @error('excel_file')
                {{$message}}
                @enderror
            </span>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

<hr>

<div class="container mt-4">
    <h3>Excel file with validation</h3>
    <p>such as unique emails, without having text and blank file restrtiction</p>
    <form action="{{route('file.restrict')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Upload Excel File</label>
            <input type="file" class="form-control" name="excel_file" id="excel_file"
                aria-describedby="emailHelp" accept="application/vnd.openxmlformats-officedocument.spreadsheetml.sheet">
            <span class="text-danger">
                @error('excel_file')
                {{$message}}
                @enderror
                @if(session('error'))
                {{ session('error') }}
                @endif
            </span>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection
