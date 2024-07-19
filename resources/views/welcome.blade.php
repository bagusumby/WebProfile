@extends('layouts.public.app')
@section('title', 'Web Profile - Bagus Nur Solayman')

@section('navigation')
  <!-- ======= Navigation Added ======= -->
@endsection

@section('content')
  <main id="main">

    <!-- ======= Hero Section ======= -->
    @include('components.Home.Jumbotron')

    <!-- ======= About Section ======= -->
    @include('components.Home.about')

    <!-- ======= Portfolio Section ======= -->
    @include('components.Home.portofolio')

    <!-- ======= Contact Section ======= -->
    @include('components.Home.contact')

  </main>
@endsection
