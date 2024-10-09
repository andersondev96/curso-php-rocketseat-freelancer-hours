<div>
    <h1>Meu componente livewire</h1>

    <input wire:model.live="search" type="text" />

    <br>

    <ul>
        @foreach($users as $user)
            <li>{{ $user->name }}</li>
        @endforeach
    </ul>
</div>
