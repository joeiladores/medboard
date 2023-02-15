@extends('layouts.app')
<!-- Add SweetAlert2 CDN to your HTML file -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

@if ($message = Session::get('success'))
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Success!',
            text: '{{ $message }}',
        })
    </script>
@endif

@if ($message = Session::get('error'))
    <script>
        Swal.fire({
            icon: 'error',
            title: 'Error!',
            text: '{{ $message }}',
        })
    </script>
@endif

@if ($message = Session::get('warning'))
    <script>
        Swal.fire({
            icon: 'warning',
            title: 'Warning!',
            text: '{{ $message }}',
        })
    </script>
@endif

@if ($message = Session::get('info'))
    <script>
        Swal.fire({
            icon: 'info',
            title: 'Info',
            text: '{{ $message }}',
        })
    </script>
@endif