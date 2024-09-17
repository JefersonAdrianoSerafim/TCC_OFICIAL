<div class="containerActive">
    <div class="containerTeam">
        <h1 class="">Lista de Turmas</h1>

        @if(auth()->user()->verifyIfCommitmentNull)
            <p> Sem compromissos marcados!! </p>
        @else
            <table>
                <thead class="theadTable">
                    <tr class="trTable">
                        <th id="thName">Nome</th>
                        <th id="thDescription">cor</th>
                    </tr>
                </thead>
                <tbody class="tbodyTable">
                    @foreach(auth()->user()->teams as $team)
                        <tr>
                            <td>{{ $team->name_team }}</td>
                            <td style=""> {{ $team->color_team }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif

        @if ($activeGroupTeamL == 'create')
            <div class="containerCreate">
                <h1>Criar</h1>
                <form action="">
                    <input type="text" name="" id="" placeholder="Nome">
                    <input type="color" name="" id="" placeholder="Cor">
                </form>
            </div>

        @elseif ($activeGroupTeamL == 'edit')
            <h1>edit</h1>

        @elseif ($activeGroupTeamL == 'delete')
            <h1>delete</h1>

        @endif

        <div class="buttons">
            <button class="createButton" wire:click=" setActiveGroupTeamL('create')">Criar</button>
            <button class="editButton" wire:click=" setActiveGroupTeamL('edit')">Editar</button>
            <button class="deleteButton" wire:click=" setActiveGroupTeamL('delete')">Excluir</button>
        </div>
    </div>



</div>