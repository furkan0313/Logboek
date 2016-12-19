@extends('layouts.app')

@section('stylesheets')
    <link href="/css/home/styles.css" rel="stylesheet">
    <link href="/css/home/Hero-Technology.css" rel="stylesheet">
@endsection

@section('content')
    <form action="example" method="POST">
        <input type="text" name="title">
        <input type="text" name="group">
        <input type="text" name="group">

        <input type="submit">
    </form>
@endsection
