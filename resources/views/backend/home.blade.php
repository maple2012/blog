@extends('layouts.backend')

@section('title','Finley')

@section('header')
    <h1>
        Home
        <small>Finley Blog</small>
    </h1>
@endsection

@section('content')
    <style>
        p {
            text-indent: 10px;
        }
    </style>
    <div class="row">
        <div class="col-xs-12">
            <div class="box box-solid" style="padding: 10px;">
                <h3>欢迎使用Finley Blog!</h3>
                <strong>简介</strong>
                <p> Finley Blog 是一个基于Laravel开发，支持markdown语法开源的简易博客。</p>
                <strong>开发者信息</strong>
                <p>Name : Finley</p>
                <strong>依赖开源程序</strong>
                <ul>
                    <li>LAMP</li>
                    <li>
                        <a href="https://laravel.com/" target="_blank">Laravel</a>
                    </li>
                    <li>
                        <a href="https://www.almsaeedstudio.com" target="_blank">
                            AdminLTE
                        </a>
                    </li>
                    <li>
                        <a href="http://getbootstrap.com/" target="_blank">
                            Bootstrap
                        </a>
                    </li>
                    <li>
                        <a href="https://pandao.github.io/editor.md/examples/index.html" target="_blank">
                            Editor.md
                        </a>
                    </li>
                    <li>
                        <a href="https://github.com/andersao/l5-repository" target="_blank">
                            andersao/l5-repository
                        </a>
                    </li>
                    <li>
                        <a href="https://github.com/etrepat/baum" target="_blank">
                            etrepat/baum
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
@endsection
