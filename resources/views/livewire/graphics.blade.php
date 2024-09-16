<div>
    <h1 class="">Lista de compromissos de {{auth()->user()->name}}</h1>

    @if(auth()->user()->verifyIfCommitmentNull)
        <p> Sem compromissos marcados!! </p>
    @else
        <table class="tableSubjectsUser">
            <thead class="theadTable">
                <tr class = "trTable">
                    <th id="thName">Nome</th>
                    <th id="thDescription">descrição</th>
                    <th id="thSubject"> Materia</th>
                </tr>
            </thead>
            <tbody>
                @foreach(auth()->user()->subjects as $subject)

                    @foreach($subject->commitments as $commitment)
                        <tr>
                            <td id="tdNameCommitment">{{ $commitment->name_commitment }}</td>
                            <td id="tdDescription"> {{ $commitment->description_commitment }} </td>
                            <td id="tdNameSubject"> {{$subject->name_subject}}</td>
                        </tr>
                    @endforeach
                @endforeach
            </tbody>
        </table>
    @endif
</div>