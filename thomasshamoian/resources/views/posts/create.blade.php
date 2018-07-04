<?php
/**
 * Created by PhpStorm.
 * User: mac
 * Date: 04/07/18
 * Time: 10:37
 */?>
@extends('layouts.master')
@section('content')


    <div id="form-main">
        <div id="form-div">
            <form class="form" id="form1" method="post" action="/posts">
                    {{csrf_field()}}
                <p class="Titel">
                    <input name="titel" type="text" class="validate[required,custom[onlyLetter],length[0,100]] feedback-input" placeholder="Titel" id="Titel" />
                </p>

                {{--<p class="email">--}}
                {{--<input name="email" type="text" class="validate[required,custom[email]] feedback-input" id="email" placeholder="Email" />--}}
                {{--</p>--}}

                <p class="bericht">
                    <textarea name="bericht" class="validate[required,length[6,300]] feedback-input" id="bericht" placeholder="bericht"></textarea>
                </p>


                <div class="submit">
                    <input type="submit" value="SEND" id="button-blue"/>
                    <div class="ease"></div>
                </div>
            </form>
        </div>

@endsection