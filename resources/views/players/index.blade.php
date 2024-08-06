@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="section-title">Players</h1>
   
    
    <h2 class="position-title">Goalkeepers</h2>
    <div class="player-cards">
        <div class="player-card">
            <div class="player-card-image">
                <img src="{{ asset('images/ortega.png') }}" alt="Stefan Ortega Moreno">
                <div class="player-number">18</div>
            </div>
            <div class="player-card-info">
                <img src="{{ asset('images/duitsland.png') }}" class="flag" alt="Germany">
                <p class="player-name">Stefan Ortega Moreno</p>
            </div>
        </div>
        <div class="player-card">
            <div class="player-card-image">
                <img src="{{ asset('images/carson.png') }}" alt="Scott Carson">
                <div class="player-number">33</div>
            </div>
            <div class="player-card-info">
                <img src="{{ asset('images/england.png') }}" class="flag" alt="England">
                <p class="player-name">Scott Carson</p>
            </div>
        </div>
        <div class="player-card">
            <div class="player-card-image">
                <img src="{{ asset('images/eddy.png') }}" alt="Ederson">
                <div class="player-number">31</div>
            </div>
            <div class="player-card-info">
                <img src="{{ asset('images/brazil.png') }}" class="flag" alt="Brazil">
                <p class="player-name">Ederson</p>
            </div>
        </div>
    </div>

    <h2 class="position-title">Defenders</h2>
    <div class="player-cards">
        <div class="player-card">
            <div class="player-card-image">
                <img src="{{ asset('images/dias.png') }}" alt="Ruben Dias">
                <div class="player-number">3</div>
            </div>
            <div class="player-card-info">
                <img src="{{ asset('images/port.png') }}" class="flag" alt="Portugal">
                <p class="player-name">Ruben Dias</p>
            </div>
        </div>
        <div class="player-card">
            <div class="player-card-image">
                <img src="{{ asset('images/kyle.png') }}" alt="Kyle Walker">
                <div class="player-number">2</div>
            </div>
            <div class="player-card-info">
                <img src="{{ asset('images/england.png') }}" class="flag" alt="England">
                <p class="player-name">Kyle Walker</p>
            </div>
        </div>
        <div class="player-card">
            <div class="player-card-image">
                <img src="{{ asset('images/rico.png') }}" alt="Rico Lewis">
                <div class="player-number">82</div>
            </div>
            <div class="player-card-info">
                <img src="{{ asset('images/england.png') }}" class="flag" alt="England">
                <p class="player-name">Rico Lewis</p>
            </div>
        </div>
        <div class="player-card">
            <div class="player-card-image">
                <img src="{{ asset('images/ake.png') }}" alt="Nathan Ake">
                <div class="player-number">6</div>
            </div>
            <div class="player-card-info">
                <img src="{{ asset('images/nederland.png') }}" class="flag" alt="Netherlands">
                <p class="player-name">Nathan Ake</p>
            </div>
        </div>
        <div class="player-card">
            <div class="player-card-image">
                <img src="{{ asset('images/josko.png') }}" alt="Josko Gvardiol">
                <div class="player-number">24</div>
            </div>
            <div class="player-card-info">
                <img src="{{ asset('images/croatia.png') }}" class="flag" alt="Croatia">
                <p class="player-name">Josko Gvardiol</p>
            </div>
        </div>
        <div class="player-card">
            <div class="player-card-image">
                <img src="{{ asset('images/stones.png') }}" alt="John Stones">
                <div class="player-number">5</div>
            </div>
            <div class="player-card-info">
                <img src="{{ asset('images/england.png') }}" class="flag" alt="England">
                <p class="player-name">John Stones</p>
            </div>
        </div>
        <div class="player-card">
            <div class="player-card-image">
                <img src="{{ asset('images/akanji.png') }}" alt="Manuel Akanji">
                <div class="player-number">25</div>
            </div>
            <div class="player-card-info">
                <img src="{{ asset('images/swiss.png') }}" class="flag" alt="Switzerland">
                <p class="player-name">Manuel Akanji</p>
            </div>
        </div>
    </div>

    <h2 class="position-title">Midfielders</h2>
    <div class="player-cards">
        <div class="player-card">
            <div class="player-card-image">
                <img src="{{ asset('images/bobb.png') }}" alt="Oscar Bobb">
                <div class="player-number">52</div>
            </div>
            <div class="player-card-info">
                <img src="{{ asset('images/nro.png') }}" class="flag" alt="Norway">
                <p class="player-name">Oscar Bobb</p>
            </div>
        </div>
        <div class="player-card">
            <div class="player-card-image">
                <img src="{{ asset('images/kdb.png') }}" alt="Kevin De Bruyne">
                <div class="player-number">17</div>
            </div>
            <div class="player-card-info">
                <img src="{{ asset('images/belg.png') }}" class="flag" alt="Belgium">
                <p class="player-name">Kevin De Bruyne</p>
            </div>
        </div>
        <div class="player-card">
            <div class="player-card-image">
                <img src="{{ asset('images/doku.png') }}" alt="Jeremy Doku">
                <div class="player-number">11</div>
            </div>
            <div class="player-card-info">
                <img src="{{ asset('images/belg.png') }}" class="flag" alt="Belgium">
                <p class="player-name">Jeremy Doku</p>
            </div>
        </div>
        <div class="player-card">
            <div class="player-card-image">
                <img src="{{ asset('images/phil.png') }}" alt="Phil Foden">
                <div class="player-number">47</div>
            </div>
            <div class="player-card-info">
                <img src="{{ asset('images/england.png') }}" class="flag" alt="England">
                <p class="player-name">Phil Foden</p>
            </div>
        </div>
        <div class="player-card">
            <div class="player-card-image">
                <img src="{{ asset('images/jack.png') }}" alt="Jack Grealish">
                <div class="player-number">10</div>
            </div>
            <div class="player-card-info">
                <img src="{{ asset('images/england.png') }}" class="flag" alt="England">
                <p class="player-name">Jack Grealish</p>
            </div>
        </div>
        <div class="player-card">
            <div class="player-card-image">
                <img src="{{ asset('images/kov.png') }}" alt="Mateo Kovacic">
                <div class="player-number">8</div>
            </div>
            <div class="player-card-info">
                <img src="{{ asset('images/croatia.png') }}" class="flag" alt="Croatia">
                <p class="player-name">Mateo Kovacic</p>
            </div>
        </div>
        <div class="player-card">
            <div class="player-card-image">
                <img src="{{ asset('images/nunes.png') }}" alt="Matheus Nunes">
                <div class="player-number">27</div>
            </div>
            <div class="player-card-info">
                <img src="{{ asset('images/port.png') }}" class="flag" alt="Portugal">
                <p class="player-name">Matheus Nunes</p>
            </div>
        </div>
        <div class="player-card">
            <div class="player-card-image">
                <img src="{{ asset('images/rodri.png') }}" alt="Rodri">
                <div class="player-number">16</div>
            </div>
            <div class="player-card-info">
                <img src="{{ asset('images/spain.png') }}" class="flag" alt="Spain">
                <p class="player-name">Rodri</p>
            </div>
        </div>
        <div class="player-card">
            <div class="player-card-image">
                <img src="{{ asset('images/bernardo.png') }}" alt="Bernardo Silva">
                <div class="player-number">20</div>
            </div>
            <div class="player-card-info">
                <img src="{{ asset('images/port.png') }}" class="flag" alt="Portugal">
                <p class="player-name">Bernardo Silva</p>
            </div>
        </div>
    </div>

    <h2 class="position-title">Attackers</h2>
    <div class="player-cards">
        <div class="player-card">
            <div class="player-card-image">
                <img src="{{ asset('images/erling.png')}}" alt="Erling Haaland">
                <div class="player-number">9</div>
            </div>
            <div class="player-card-info">
                <img src="{{ asset('images/nro.png') }}" class="flag" alt="Norway">
                <p class="player-name">Erling Haaland</p>
            </div>
        </div>
        <div class="player-card">
            <div class="player-card-image">
                <img src="{{ asset('images/julian.png')}}" alt="Julian Alvarez">
                <div class="player-number">19</div>
            </div>
            <div class="player-card-info">
                <img src="{{ asset('images/arg.png') }}" class="flag" alt="Argentina">
                <p class="player-name">Julian Alvarez</p>
            </div>
        </div>
    </div>
    
    <div>
    @if(Auth::check() && Auth::user()->is_admin)
    <a href="{{ url('admin.players.create') }}" class="btn btn-primary mb-3">Add Player</a>
    @endif
    </div>
   
    @if($manager)
    <h2 class="position-title">Manager</h2>
    <div class="manager-cards">
        <div class="manager-card">
            <div class="manager-card-image">
                <img src="{{ asset('images/pep.png') }}" alt="Pep Guardiola">
            </div>
            <div class="player-card-info">
                <img src="{{ asset('images/spain.png') }}" class="flag" alt="Spain">
                <p class="manager-name">Pep Guardiola</p>
            </div>
            @if(Auth::check() && Auth::user()->is_admin)
            <a href="{{ route('players.edit', $manager->id) }}" class="btn btn-warning">Edit</a>
            <form action="{{ route('players.destroy', $manager->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
            @endif
        </div>
    @endif
</div>
@endsection

<style>
    .section-title {
        font-size: 2rem;
        font-weight: bold;
        color: #003566;
        margin-bottom: 20px;
        text-transform: uppercase;
    }
    .position-title {
        font-size: 1.5rem;
        font-weight: bold;
        color: #003566;
        margin: 30px 0 10px;
        text-transform: uppercase;
        border-bottom: 2px solid #003566;
        display: inline-block;
    }
    .player-cards {
        display: flex;
        flex-wrap: wrap;
        gap: 20px;
    }
    .player-card {
        background-color: #fff;
        border-radius: 10px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        overflow: hidden;
        width: 200px;
        text-align: center;
        position: relative;
    }
    .player-card-image {
        position: relative;
    }
    .player-card-image img {
        width: 100%;
        height: auto;
    }
    .player-number {
        position: absolute;
        top: 10px;
        right: 10px;
        font-size: 2rem;
        font-weight: bold;
        color:#003566;
    }
    .player-card-info {
        padding: 10px;
    }
    .flag {
        width: 30px;
        height: auto;
        margin-bottom: 10px;
    }
    .player-name {
        font-size: 1rem;
        font-weight: bold;
        color: #003566;
        text-transform: uppercase;
    }
    .manager-cards {
        display: flex;
        flex-wrap: wrap;
        gap: 20px;
    }
    .manager-card {
        background-color: #fff;
        border-radius: 10px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        overflow: hidden;
        width: 200px;
        text-align: center;
        position: relative;
    }
    .manager-card-image {
        position: relative;
        background-color: lightblue;
    }
    .manager-card-image img {
        width: 100%;
        height: auto;
    }
    .manager-card-info {
        padding: 10px;
    }
    .manager-name {
        font-size: 1rem;
        font-weight: bold;
        color: #003566;
        text-transform: uppercase;
    }
</style>
