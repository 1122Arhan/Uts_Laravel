@extends('layouts.master')
@section('title','Dashboard')
@section('heading','Halaman Dashboard')

@section('content')
        <div class="card-body">
        Halo {{ Auth::user()->name }}, <br> Halaman Dashboard Dalam Proses...
        </div>
        <!-- /.card-body -->

@endsection