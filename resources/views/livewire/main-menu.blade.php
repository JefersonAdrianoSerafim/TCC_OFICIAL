<div class="containerMain">
    <nav>
        <ul>
            <li>
                <a href="#" class="logo">
                    <i class="fa-solid fa-book"></i>
                    <span class="nav-item">MENU</span>
                </a>
            </li>
            <li><a href="#" wire:click=" setActiveComponent('home')">
                    <i class="fa-solid fa-house"></i>
                    <span class="nav-item">Home</span>
                </a></li>
            <li><a href="#" wire:click=" setActiveComponent('profile')">
                    <i class="fa-solid fa-user"></i>
                    <span class="nav-item">Perfil</span>
                </a></li>
            <li><a href="#" wire:click=" setActiveComponent('agenda')">
                    <i class="fa-solid fa-calendar-days"></i>
                    <span class="nav-item">Agenda</span>
                </a></li>
            <li><a href="#" wire:click=" setActiveComponent('graphics')">
                    <i class="fa-solid fa-chart-column"></i>
                    <span class="nav-item">Gráficos</span>
                </a></li>
            <li><a href="#" wire:click=" setActiveComponent('configuration')">
                    <i class="fa-solid fa-gear"></i>
                    <span class="nav-item">Configurações</span>
                </a></li>
            <li><a href="#" wire:click=" setActiveComponent('help')">
                    <i class="fa-solid fa-circle-question"></i>
                    <span class="nav-item">Ajuda</span>
                </a></li>
            <li><a href="{{ route('logout')}}" class="logout">
                    <i class="fa-solid fa-right-from-bracket"></i>
                    <span class="nav-item">Sair</span>
                </a></li>

        </ul>

    </nav>
    <div>
        @if ($activeComponent == 'home')
            @livewire('Home')
        @elseif ($activeComponent == 'profile')
            @livewire('Profile')
        @elseif ($activeComponent == 'agenda')
            @livewire('Agenda')
        @elseif ($activeComponent == 'graphics')
            @livewire('Graphics')
        @endif
    </div>
</div>