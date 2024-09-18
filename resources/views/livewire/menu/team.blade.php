<div class="containerActive">
    <div class="containerLeftTeam">
        @if ($activeGroupTeamL == 'create')
            <h1>Lista de Turmas</h1>

            @if(auth()->user()->teams->isEmpty())
                <p> Você não está em nenhuma turma. </p>
            @else
                <table>
                    <thead class="theadTable">
                        <tr class="trTable">
                            <th id="thId">Link</th>
                            <th id="thName">Nome</th>
                            <th id="thDescription">Cor</th>
                            <th id="thActions">Ações</th>
                        </tr>
                    </thead>
                    <tbody class="tbodyTable">
                        @foreach(auth()->user()->teams as $team)
                            <tr>
                                <td> localhost:8000/user/team/enter/{{$team->id}}/{{Hash::make($team->id) }}</td>
                                <td>{{$team->name_team }}</td>
                                <td style="background-color:{{$team->color_team}};"></td>
                                <td>
                                    <div class="buttons">
                                        <button class="editButton"
                                            wire:click=" setActiveGroupTeamL('edit', {{$team->id}} )">Editar</button>
                                        <form method="POST" action="{{ route('team.destroy', $team->id) }}">
                                            @csrf
                                            @method('DELETE')
                                            <button class="deleteButton" type="submit">Excluir</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @endif
            <div class="containerCreate">
                <h1>Criar turma</h1>
                <form method="POST" action="{{route('team.store')}}">
                    @csrf
                    <input type="text" name="name_team" id="" placeholder="Nome">
                    <input type="color" name="color_team" id="" placeholder="Cor">
                    <button class="createButton" type="input">Criar</button>
                </form>
            </div>
        @elseif ($activeGroupTeamL == 'edit')
            <div class="containerEdit">
                <form method="POST" action=" {{route('team.update', $selected_team->id)}}">
                    @csrf
                    @method('PUT')
                    <input type="text" name="name_team" id="" placeholder="Nome" value="{{$selected_team->name_team}}">
                    <input type="color" name="color_team" id="" value="{{$selected_team->description_team }}">
                    @if($errors->any())
                        <div class='invalid-feedback'>
                            <ul>
                                <li> {{ $errors->first() }}</li>
                            </ul>
                        </div>
                    @endif
                    <div class="buttons">
                        <button class="editButton" type="submit" id="voltar"
                            wire:click="setActiveGroupTeamL('create', 0)">Editar
                        </button>
                    </div>
                    <button class="createButton" wire:click=" setActiveGroupTeamL('create', 0)">Voltar</button>
                </form>

            </div>


        @elseif ($activeGroupTeamL == 'delete')

        @endif

    </div>
    <div class="containerRightTeam">
        <h1>teste</h1>
    </div>



</div>