@extends('layouts.public.app')

@section('content')
  <main id="main">

    <!-- ======= Hero Section ======= -->
    @include('components.Home.Jumbotron')

    <!-- ======= About Section ======= -->
    @include('components.Home.about')

    <!-- ======= Resume Section ======= -->
    @include('components.Home.resume')

    <!-- ======= Portfolio Section ======= -->
    @include('components.Home.portofolio')

    <!-- ======= Contact Section ======= -->
    @include('components.Home.contact')

  </main>
@endsection
