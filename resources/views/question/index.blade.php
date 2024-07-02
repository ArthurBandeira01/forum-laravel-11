<h1>Listagem de Perguntas</h1>
<a href="{{ route('questions.create') }}">Cadastrar Perguntas</a>
<br><br>

@if (session('success'))
    <p>{{ session('success') }}</p>
@endif

<table>
    <thead>
        <tr>
            <th>Assunto</th>
            <th>Conteúdo</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($questions as $question)
            <tr>
                <td>{{ $question->subject }}</td>
                <td>{{ $question->text }}</td>
                <td>
                    <a href="{{ route('questions.show', $question->id) }}">
                        Visualizar
                    </a>
                    <button
                        onclick="event.preventDefault();
                                if(confirm('Você realmente excluir este item?')) document.getElementById('form-delete').submit()
                    ">
                        Deletar
                    </button>
                    <form action="{{ route('questions.destroy', $question->id) }}" id="form-delete" method="POST">
                        @csrf
                        @method('DELETE')
                    </form>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="2">
                    Não existem perguntas cadastradas.
                </td>
            </tr>
        @endforelse
    </tbody>
</table>
