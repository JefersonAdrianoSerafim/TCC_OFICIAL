<div class="containerActive">
    <div class="containerLeftAgenda">
        @if ($activeComponentAgendaL == 'create')
            <h1 class="">Lista de compromissos</h1>

            @if(App\Http\Controllers\UserController::verifyIfCommitmentNull())
                <p> Sem compromissos marcados!! </p>
            @else
                <table>
                    <thead class="theadTable">
                        <tr class="trTable">
                            <th id="thName">Nome</th>
                            <th id="thDescription">Descrição</th>
                            <th id="thSubject"> Materia</th>
                            <th id="thAction"> Ações</th>
                        </tr>
                    </thead>
                    <tbody class="tbodyTable">
                        @foreach(auth()->user()->subjects as $subject)

                            @foreach($subject->commitments as $commitment)
                                <tr>
                                    <td id="tdNameCommitment">{{ $commitment->name_commitment }}</td>
                                    <td id="tdDescription"> {{ $commitment->description_commitment }} </td>
                                    <td id="tdNameSubject"> {{$subject->name_subject}}</td>
                                    <td>
                                        <div class="buttons">
                                            <button class="editButton"
                                                wire:click="setActiveComponentAgendaL('edit', {{ $commitment->id }})">Editar</button>
                                            <form method="POST" action="{{ route('commitment.destroy', $commitment->id) }}">
                                                @csrf
                                                @method('DELETE')
                                                <button class="deleteButton" type="submit">Excluir</button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>

                            @endforeach
                        @endforeach

                    </tbody>
                </table>
            @endif
            <div class="containerCreate">
                <h1>Adicionar compromisso</h1>
                <form method="POST" action=" {{route('commitment.store')}}">
                    @csrf
                    <input type="text" name="name_commitment" id="" placeholder="Nome" value="{{old('name_commitment')}}">
                    <input type="text" name="description_commitment" id="" placeholder="Descrição"
                        value="{{old('description_commitment')}}">
                    <select name="subject_commitment">
                        <option selected disabled></option>
                        @foreach (auth()->user()->subjects as $subject)
                            <option value="{{$subject->id}}"> {{ $subject->name_subject }}</option>
                        @endforeach
                    </select>
                    @if($errors->any())
                        <div class='invalid-feedback'>
                            <ul>
                                <li> {{ $errors->first() }}</li>
                            </ul>
                        </div>
                    @endif
                    <button class="createButton" id="submitRegister" type="submit">Criar Compromisso</button>
                </form>
            </div>

        @elseif ($activeComponentAgendaL == 'edit')
            <div class="containerEdit">
                <form method="POST" action=" {{route('commitment.update', $selected_commitment->id)}}">
                    @csrf
                    @method('PUT')
                    <input type="text" name="name_commitment" id="" placeholder="Nome"
                        value="{{$selected_commitment->name_commitment}}">
                    <input type="text" name="description_commitment" id="" placeholder="Descrição"
                        value="{{$selected_commitment->description_commitment }}">
                    <select name="subject_commitment">
                        <option selected value="{{$selected_commitment->subjects->name_subject }}"></option>
                        @foreach (auth()->user()->subjects as $subject)
                            <option value="{{$subject->id}}"> {{ $subject->name_subject }}</option>
                        @endforeach
                    </select>
                    @if($errors->any())
                        <div class='invalid-feedback'>
                            <ul>
                                <li> {{ $errors->first() }}</li>
                            </ul>
                        </div>
                    @endif
                    <button class="editButton" type="submit" id="voltar" wire:click="setActiveComponentAgendaL('create', 0)">Editar
                        Compromisso</button>
                </form>
                <button class="createButton" wire:click=" setActiveComponentAgendaL('create', 0)">Voltar</button>
            </div>

        @endif
    </div>
    <div class="containerRightAgenda">


        @if ($activeSubjectAgendaR == 'create')
            <h1>Lista de disciplinas</h1>

            @if(auth()->user()->subjects->isEmpty())
                <p> Sem disciplinas encontrados </p>
            @else
                <table>
                    <thead class="theadTable">
                        <tr class="trTable">
                            <th>Nome</th>
                            <th>Professor</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody class="tbodyTable">
                        @foreach(auth()->user()->subjects as $subject)
                            <tr>
                                <td>{{ $subject->name_subject }}</td>
                                <td> {{ $subject->teacher_subject }} </td>
                                <td>
                                    <div class="buttons">
                                        <button class="editButton"
                                            wire:click=" setActiveSubjectAgendaR('edit', {{$subject->id}})">Editar</button>
                                        <form method="POST" action="{{ route('subject.destroy', $subject->id) }}">
                                            @csrf
                                            @method('DELETE')
                                            <button class="deleteButton " type="submit">Excluir</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @endif
            <div class="containerCreate">
                <h1>Adicionar disciplina</h1>
                <form method="POST" action="{{route('subject.store')}}">
                    @csrf
                    <input type="text" name="name_subject" id="" placeholder="Nome" value="{{ old('name_subject') }}">
                    <input type="text" name="teacher_subject" id="" placeholder="Professor"
                        value="{{ old('teacher_subject') }}">
                    @if($errors->any())
                        <div class='invalid-feedback'>
                            @foreach($errors as $error)
                                    <ul>
                                        <li> {{ $error }}</li>
                                    </ul>
                                </div>
                            @endforeach
                    @endif
                    <button class="createButton" id="submitRegister" type="submit">Criar matéria</button>
                </form>
            </div>
        @elseif ($activeSubjectAgendaR == 'edit')
            <div class="containerEdit">
                <form method="POST" action=" {{route('subject.update', $selected_subject->id)}}">
                    @csrf
                    @method('PUT')
                    <input type="text" name="name_subject" id="" placeholder="Nome"
                        value="{{$selected_subject->name_subject}}">
                    <input type="text" name="teacher_subject" id="" placeholder="Descrição"
                        value="{{$selected_subject->teacher_subject }}">
                    @if($errors->any())
                        <div class='invalid-feedback'>
                            <ul>
                                <li> {{ $errors->first() }}</li>
                            </ul>
                        </div>
                    @endif
                    <button class="editButton" type="submit" id="voltar"
                        wire:click="setActiveSubjectAgendaR('create', 0)">Editar Matéria</button>

                </form>
                <button class="createButton" wire:click=" setActiveSubjectAgendaR('create', 0)">Voltar</button>

            </div>

        @endif
    </div>



</div>