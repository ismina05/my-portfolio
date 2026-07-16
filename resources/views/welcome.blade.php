@extends('layouts.app')

@section('content')
    
    <!-- Hero Section -->
    @include('sections.hero', ['profile' => $profile])
    
    <!-- Statistics Section -->
    @include('sections.statistics', ['statistics' => $statistics])
    
    <!-- Core Expertise Section -->
    @include('sections.expertise', ['expertise' => $expertise])
    
    <!-- About Section -->
    @include('sections.about', ['profile' => $profile])
    
    <!-- Education Section -->
    @include('sections.education', ['education' => $education])
    
    <!-- Featured Projects Section -->
    @include('sections.projects', ['projects' => $projects])
    
    <!-- Experience Section -->
    @include('sections.experience', ['experiences' => $experiences])
    
    <!-- Certifications Section -->
    @include('sections.certifications', ['certifications' => $certifications])
    
    <!-- Activities Section -->
    @include('sections.activities', ['activities' => $activities])
    
    <!-- Contact Section -->
    @include('sections.contact', ['profile' => $profile])

@endsection
