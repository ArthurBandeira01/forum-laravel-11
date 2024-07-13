<h1>Olá, a sua pergunta foi respondida no fórum por: {{ $userRepliedQuestion->user->name }}</h1>

<a href="{{ route('forum.show', $userRepliedQuestion->question_id) }}">
    Verifique sua resposta
</a>
