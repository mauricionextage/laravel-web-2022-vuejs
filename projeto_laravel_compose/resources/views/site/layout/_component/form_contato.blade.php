{{ $slot }}

<form action={{ route('site.contato') }} method="post">
    @csrf
    <input type="text" placeholder="Nome" name="nome" class="{{ $classe }}">
    <br>
    <input type="text" placeholder="Telefone" name="telefone" class="{{ $classe }}">
    <br>
    <input type="text" placeholder="E-mail" name="email" class="{{ $classe }}">
    <br>
    <select class="{{ $classe }}" name="motivo_contato">
        <option value="">Qual o motivo do contato?</option>
        <option value="1">Dúvida</option>
        <option value="2">Elogio</option>
        <option value="3">Reclamação</option>
    </select>
    <br>
    <textarea class="{{ $classe }}">Preencha aqui a sua mensagem</textarea>
    <br>
    <button type="submit" class="{{ $classe }}">ENVIAR</button>
</form>
