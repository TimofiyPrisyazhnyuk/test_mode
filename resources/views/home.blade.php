@extends('layouts.app')

@section('content')
    <div class="container" xmlns:v-bind="http://www.w3.org/1999/xhtml" xmlns:v-bind="http://www.w3.org/1999/xhtml"
         xmlns:v-bind="http://www.w3.org/1999/xhtml" xmlns:v-bind="http://www.w3.org/1999/xhtml"
         xmlns:v-bind="http://www.w3.org/1999/xhtml" xmlns:v-bind="http://www.w3.org/1999/xhtml"
         xmlns:v-bind="http://www.w3.org/1999/xhtml" xmlns:v-bind="http://www.w3.org/1999/xhtml"
         xmlns:v-bind="http://www.w3.org/1999/xhtml" xmlns:v-bind="http://www.w3.org/1999/xhtml"
         xmlns:v-bind="http://www.w3.org/1999/xhtml" xmlns:v-bind="http://www.w3.org/1999/xhtml">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Dashboard</div>

                    <div class="panel-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif

                        You are logged in! Your account
                        is: {{ auth()->user()->verified() ? 'Verified' : 'Not verified' }}

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="alert alert-success app-container">
                    <b>Vue lear</b>
                    <hr>
                    <input v-model="name" type="text" title="text">
                    <hr>
                    <h4>Hello @{{ name }}</h4>
                    <hr>
                    <div v-bind:title="message">Lorem ipsum dolor sit amet, consectetur
                        adipisicing elit. Aut deleniti iusto vitae.
                    </div>
                    <hr>
                    <div id="app">
                        <span v-if="seen">Сейчас меня видно</span>
                    </div>
                    <hr>
                    <ol>
                        <li v-for="todo in todos">
                            @{{ todo.text }}
                        </li>
                    </ol>
                    <hr>

                    <ol>
                        <!--
                          Теперь мы можем передать каждому компоненту todo-item объект
                          с информацией о задаче, который будет динамически меняться.
                          Мы также определяем для каждого компонента "key",
                          значение которого будет объяснено далее в руководстве.
                        -->
                        <todo-item
                                v-for="item in groceryList"
                                v-bind:todo="item"
                                v-bind:key="item.id">
                        </todo-item>
                    </ol>


                </div>
            </div>
        </div>
    </div>
@endsection

