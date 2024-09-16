<div class="containerActiveCenter">
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
        <div class="buttons">
            <button class="createButton">Criar</button>
            <button class="editButton">Editar</button>
            <button class="deleteButton">Excluir</button>
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
        <div class="buttons">
            <button class="createButton">Criar</button>
            <button class="editButton">Editar</button>
            <button class="deleteButton">Excluir</button>

        </div>
    </div>



</div>