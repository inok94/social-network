@extends('layouts.master')

@section('title')
    Hi!
@endsection

@section('content')
<div class="row">
    <div class="col-md-6">
        <h3>Зарегистрироваться</h3>
        <form action="#" method="post">
            <div class="form-group">
                <label for="email">Ваш EMAIL</label>
                <input class="form-control" type="text" name="email" id="email">
            </div>
            <div class="form-group">
                <label for="first_name">Имя</label>
                <input class="form-control" type="text" name="first_name" id="first_name">
            </div>
            <div class="form-group">
                <label for="password">Ваш пароль</label>
                <input class="form-control" type="password" name="password" id="password">
            </div>
            <button type="submit" class="btn btn-primary">Вход</button>
        </form>
    </div>
    <div class="col-md-6">
        <h3>Войти</h3>
        <form action="#" method="post">
            <div class="form-group">
                <label for="email">Ваш EMAIL</label>
                <input class="form-control" type="text" name="email" id="email">
            </div>
            <div class="form-group">
                <label for="password">Ваш пароль</label>
                <input class="form-control" type="password" name="password" id="password">
            </div>
            <button type="submit" class="btn btn-primary">Вход</button>
        </form>
    </div>
</div>
@endsection
