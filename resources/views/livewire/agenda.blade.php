
<div class="">
        <h1 class="">Lista de matérias de {{auth()->user()->name}}</h1>

        @if(auth()->user()->subjects->isEmpty())
            <p> Sem matérias encontrados </p>
        @else
            <table class="tableSubjectsUser">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nome</th>
                        <th>Professores</th>
                        <th> 

                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach(auth()->user()->subjects as $subject)
                    <tr>
                        <td class ="">{{ $loop->iteration }}</td>
                        <td>{{ $subject->name_subject }}</td>
                        <td> {{ $subject->teacher_subject }} </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>
