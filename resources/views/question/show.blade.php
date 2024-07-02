<a href="{{ route('questions.index') }}">Voltar</a>

<h1>Detalhes da pergunta: {{ $question->subject }}</h1>

<p><b>Assunto:</b> {{ $question->subject }}</p>
<p><b>Conteúdo:</b> {{ $question->text }}</p>
<p><b>Categoria:</b> {{ $question->category->name }}</p>
