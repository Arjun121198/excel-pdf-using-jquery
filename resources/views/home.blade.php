@extends('layouts.master')
@section('title', 'home')
@section('content')

    <div class="container">
    <table class="table table-bordered" id="Table_ID">
    <thead>
       <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Gender</th>
            <th>Age</th>
        </tr>
    </thead>
    <tbody>
        @foreach($cruds as $product)
        <tr>
                <td>{{ $product->id }}</td>
                <td>{{ $product->name }}</td>
                <td>{{ $product->email }}</td>
                <td>{{ $product->phone }}</td>
                <td>{{ $product->gender }}</td>
                <td>{{ $product->age }}</td>
        </tr>
        @endforeach
    </tbody>
    </table>
    </div>
@endsection
@section('styles')
<style>
.container{
    max-width:815px !important;
}
</style>
@endsection

@section('scripts')
<script>
$(document).ready(function() {
    $('#Table_ID').dataTable({
               
                dom: 'Bfrtip',
                buttons: [
                    {
                        extend: 'excelHtml5',
                        title: 'Excel',
                        text:'Export to excel'
                    },
                    {
                        extend: 'pdfHtml5',
                        title: 'PDF',
                        text: 'Export to PDF'
                    }
                ]
            });
} );
</script>
@endsection
