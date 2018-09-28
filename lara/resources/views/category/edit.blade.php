@extends('category.create')
@section('editId',$category->id)
@section('headTitle','Edit Category')
@section('edit_catname',$category->cat_name)
@section('editMethod')
{{method_field('PUT')}}
@endsection