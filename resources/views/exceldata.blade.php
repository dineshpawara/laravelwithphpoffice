@extends('layout.main')
@section('main-container')
<div class="container">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Excel Data</th>
            </tr>
        </thead>
        @if(isset($uniqueEmails))
        <tbody>
            @foreach($uniqueEmails as $emails)
            <tr>
                <td>{{$emails}}</td>
            </tr>
            @endforeach
        </tbody>
        @endif
        @if(isset($dataread))
        <tbody>
            @for($data=0;$data<count($dataread);$data++)
            <tr>
                <td>{{$dataread[$data]}}</td>
            </tr>
            @endfor
        </tbody>
        @endif
    </table>
</div>
@endsection
