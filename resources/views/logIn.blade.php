<?php
/**
 *
 * Description
 *
 * @package        Consonance
 * @category       Source
 * @author         Ashinze Ekene <ashinzekene@gmail.com> {@link http://github.com/ashinzekene}
 * @date           2018-02-16
 *
 */
?>

{{--use Default Layout--}}
@extends('Layouts.default')

@push('scripts')
<link rel="stylesheet" href="/css/login.css">
@endpush
{{--set Title--}}
@section('title', 'Log In')

{{--set content--}}
@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-12 col-md-6 login-container">
            <h3>LOG IN</h3>
            <hr>
            <form action="">
                <input type="text" placeholder="email address" class="form-control login-input">
                <input type="password" placeholder="password" class="form-control login-input">
                <div class="row clearfix">
                    <label class="pull-right ">
                        <input class="checkbox" type="checkbox"> Remember me
                    </label>
                </div>
                <div class="row clearfix">
                    <button class="log-in-btn pull-right" type="submit">LOG IN</button>
                </div>
            </form>
        </div>
        <div class="col-sm-12 col-md-6 right">
            <div class="personal-info-container clearfix">
                <h3>PERSONAL INFORMATION</h3>
                <input type="text" placeholder="first name" class="form-control login-input">
                <input type="text" placeholder="last name" class="form-control login-input">
                <input type="text" placeholder="emal address" class="form-control login-input">
                <input type="password" placeholder="password" class="form-control login-input">
                <input type="text" placeholder="school" class="form-control login-input">
                <div class="pull-right">
                    <div class="next">NEXT <i class="fa fa-chevron-right"></i></div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-5 col-sm-offset-7 col-md-4 col-md-offset-8">
            <p class="text-right">SKIP TO HOMEPAGE</p>
            <p class="text-right">YOU CAN CONTINUE YOUR REGISTRATION LATER</p>
            <hr>
        </div>
    </div>
</div>
@endsection

