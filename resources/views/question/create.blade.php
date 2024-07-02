<h1>Teste</h1>

@if ($errors->any())
    <div>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<a href="{{ route('questions.index') }}">Listagem de Perguntas</a>
<br><br>
<form action="{{ route('questions.store') }}" method="POST">
    @csrf
    <input type="text" name="subject" value="{{ @old('subject') }}"><br>
    <textarea name="text" id="" cols="30" rows="10">{{ @old('text') }}</textarea><br>
    <select name="category_id" id="">
        @foreach ($categories as $category)
            <option value="{{ $category->id }}"
                @if (@old('category_id') == $category->id)
                    selected
                @endif
            >
                {{ $category->name }}
            </option>
        @endforeach
    </select><br>
    <button type="submit">Enviar</button>
</form>
