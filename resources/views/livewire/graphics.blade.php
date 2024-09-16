<div>
<h1 class="">Lista de compromissos de {{auth()->user()->name}}</h1>

@if(auth()->user()->verifyIfCommitmentNull)
    <p> Sem compromissos marcados!! </p>
@else
    <table class="tableSubjectsUser">
        <thead>
            <tr>
                <th>Nome</th>
                <th>descrição</th>
                <th> Materia

                </th>
            </tr>
        </thead>
        <tbody>
            @foreach(auth()->user()->subjects as $subject)

                @foreach($subject->commitments as $commitment)
                    <tr>
                        <td>{{ $commitment->name_commitment }}</td>
                        <td> {{ $commitment->description_commitment }} </td>
                        <td> {{$subject->name_subject}}</td>
                    </tr>
                @endforeach
            @endforeach
        </tbody>
    </table>
@endif
</div>
