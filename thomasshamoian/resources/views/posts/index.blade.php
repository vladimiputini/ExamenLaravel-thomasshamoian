<?php
/**
 * Created by PhpStorm.
 * User: mac
 * Date: 04/07/18
 * Time: 10:18
 */?>
@extends('layouts.master')


@section('content')
    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <!-- Blog Entries Column -->
            <div class="col-md-12">

                <h1 class="my-4">Informatie
                    <small>Jouw taken</small>
                </h1>

                <!-- Blog Post -->
                @foreach($taak as $post)
                    @include('posts.taken')
                @endforeach
            </div>
        </div>
    </div>
@endsection
