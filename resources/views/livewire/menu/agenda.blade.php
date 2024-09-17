<div class="containerActiveCenterAgenda">
    <div class="containerLeftAgenda">
        <h1 class="">Lista de compromissos</h1>

        @if(auth()->user()->verifyIfCommitmentNull)
            <p> Sem compromissos marcados!! </p>
        @else
            <table>
                <thead class="theadTable">
                    <tr class="trTable">
                        <th id="thName">Nome</th>
                        <th id="thDescription">descrição</th>
                        <th id="thSubject"> Materia</th>
                        <th id="thDate">Prazo</th>
                    </tr>
                </thead>
                <tbody class="tbodyTable">
                    @foreach(auth()->user()->subjects as $subject)

                        @foreach($subject->commitments as $commitment)
                            <tr>
                                <td id="tdNameCommitment">{{ $commitment->name_commitment }}</td>
                                <td id="tdDescription"> {{ $commitment->description_commitment }} </td>
                                <td id="tdNameSubject"> {{$subject->name_subject}}</td>
                                <td id="tdDateSubject">{{ $commitment->date_commitment }} </td>
                            </tr>
                        @endforeach
                    @endforeach
                </tbody>
            </table>
        @endif

        @if ($activeComponentAgendaL == 'create')
            <div class="containerCreate">
                <h1>Adicionar compromisso</h1>
                <form action="">
                    <input type="text" name="" id="" placeholder="Nome">
                    <input type="text" name="" id="" placeholder="Descrição">
                    <input type="text" name="" id="" placeholder="Data">
                </form>
            </div>

        @elseif ($activeComponentAgendaL == 'edit')
            <h1>edit</h1>

        @elseif ($activeComponentAgendaL == 'delete')
            <h1>delete</h1>

        @endif

        <div class="buttons">
            <button class="createButton" wire:click=" setActiveComponentAgendaL('create')">Criar</button>
            <button class="editButton" wire:click=" setActiveComponentAgendaL('edit')">Editar</button>
            <button class="deleteButton" wire:click=" setActiveComponentAgendaL('delete')">Excluir</button>
        </div>

    </div>
    <div class="containerRightAgenda">
        <h1 class="">Lista de matérias</h1>

        @if(auth()->user()->subjects->isEmpty())
            <p> Sem matérias encontrados </p>
        @else
            <table>
                <thead class="theadTable">
                    <tr class="trTable">
                        <th>Nome</th>
                        <th>Professor</th>
                        <th>

                        </th>
                    </tr>
                </thead>
                <tbody class="tbodyTable">
                    @foreach(auth()->user()->subjects as $subject)
                        <tr>
                            <td>{{ $subject->name_subject }}</td>
                            <td> {{ $subject->teacher_subject }} </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif

        @if ($activeSubjectAgendaR == 'create')
            <div class="containerCreate">
                <h1>Adicionar disciplina</h1>
                <form action="">
                    <input type="text" name="" id="" placeholder="Nome">
                    <input type="text" name="" id="" placeholder="Professor">
                </form>
            </div>
        @elseif ($activeSubjectAgendaR == 'edit')
            <div class="containerEdit">
                <h1>edit</h1>

            </div>
        @elseif ($activeSubjectAgendaR == 'delete')
            <div class="containerDelete">
                <h1>delete</h1>
            </div>

        @endif
        <div class="buttons">
            <div class="buttons">
                <button class="createButton" wire:click=" setActiveSubjectAgendaR('create')">Criar</button>
                <button class="editButton" wire:click=" setActiveSubjectAgendaR('edit')">Editar</button>
                <button class="deleteButton" wire:click=" setActiveSubjectAgendaR('delete')">Excluir</button>
            </div>
        </div>
    </div>



</div>