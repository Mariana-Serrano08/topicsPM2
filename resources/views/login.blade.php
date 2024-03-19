<x-layout>
<div>
    <!-- Smile, breathe, and go slowly. - Thich Nhat Hanh -->
    <h1>Log In</h1>
    <form action="/login" method="POST">
        @csrf

        <div>
       <x-input title="Email" type="text" nombre="email"/>
        @error('email')
            <p> {{ $message }} </p>
        @enderror
    </div>

    <div>
        <x-input title="Password" type="password" nombre="password"/>
        @error('password')
            <p> {{ $message }} </p>
        @enderror
    </div>

    <button type="submit" class="text-x1 border p-6">Log in</button>
</div>
</x-layout>
