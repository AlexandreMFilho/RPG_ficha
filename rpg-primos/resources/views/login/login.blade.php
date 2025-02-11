@extends('layouts.app')

@section('content')
<style>
.card{
    display:flex;
            flex-direction:column;
            justify-content:center;
            align-items:center;
            align-content:center;
            background-color:#E9D8A6;
            border-radius: 10px;
            padding: 50px;
            margin: 20px;
            border: 10px solid #9B2226;
}
input{
    margin: 10px;
    padding: 10px;
    border-radius: 10px;
    border: 1px solid #9B2226;
}
</style>

<div class="card">

    <div>
        <svg width="80px" height="80px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M3 11.9914C3 17.6294 7.23896 20.3655 9.89856 21.5273C10.62 21.8424 10.9807 22 12 22V8L3 11V11.9914Z" fill="#BB3E03"/>
            <path opacity="0.5" d="M14.1014 21.5273C16.761 20.3655 21 17.6294 21 11.9914V11L12 8V22C13.0193 22 13.38 21.8424 14.1014 21.5273Z" fill="#BB3E03"/>
            <path opacity="0.5" d="M8.83772 2.80472L8.26491 3.00079C5.25832 4.02996 3.75503 4.54454 3.37752 5.08241C3 5.62028 3 7.21907 3 10.4167V11L12 8V2C11.1886 2 10.405 2.26824 8.83772 2.80472Z" fill="#BB3E03"/>
            <path d="M15.7351 3.00079L15.1623 2.80472C13.595 2.26824 12.8114 2 12 2V8L21 11V10.4167C21 7.21907 21 5.62028 20.6225 5.08241C20.245 4.54454 18.7417 4.02996 15.7351 3.00079Z" fill="#BB3E03"/>
        </svg>
    </div>
    <div class="min-h-screen flex items-center justify-center bg-gray-100 ">
        <div class="bg-gray shadow-md rounded-lg p-6 w-full max-w-md">
            <h2 class="text-2xl font-semibold text-gray-800 text-center">Login</h2>
            <form method="POST" action="" class="mt-6">
                @csrf
                <div class="mb-4">
                    <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                    <input type="email" id="email" name="email" required autofocus
                        class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                </div>
                <div class="mb-4">
                    <label for="password" class="block text-sm font-medium text-gray-700">Senha</label>
                    <input type="password" id="password" name="password" required
                        class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                </div>
                <div class="flex items-center justify-between mb-4">
                    <a href="" class="text-sm text-indigo-600 hover:underline">Esqueceu sua senha?</a>
                </div>
                <div class="flex items-center justify-between mb-4">
                    <button type="submit"
                        class="w-full font-medium py-2 px-4 rounded-md flex justify-center"
                        style="background-color: #BB3E03;
                            color:#EE9B00;
                            hover:background-color: #AE2012;
                            focus:ring-offset-2;
                            focus:outline: none;
                            focus:ring: 2px;
                            focus:ring:#9B2226;
                            focus:ring-offset:#AE2012;
                        ">
                        Entrar
                    </button>
                </div>
            </form>
            <p class="mt-6 text-sm text-center text-gray-600">
                Não tem uma conta?
                <a href="" class="text-indigo-600 hover:underline">Registrar-se</a>
            </p>
        </div>
    </div>
    </div>

@endsection
