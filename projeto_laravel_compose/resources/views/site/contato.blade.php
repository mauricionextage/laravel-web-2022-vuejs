@extends('site.layout.basico')
@section('titulo', $titulo)
@section('conteudo')

    <div class="conteudo-pagina">
        <div class="titulo-pagina">
            <h1>Entre em contato conosco</h1>
        </div>

        <div class="informacao-pagina">
            <div class="contato-principal">
                <form action={{ route('site.contato') }} method="get">
                    <input type="text" placeholder="Nome" name="nome" class="borda-preta">
                    <br>
                    <input type="text" placeholder="Telefone" name="telefone" class="borda-preta">
                    <br>
                    <input type="text" placeholder="E-mail" name="email" class="borda-preta">
                    <br>
                    <select class="borda-preta" name="motivo_contato">
                        <option value="">Qual o motivo do contato?</option>
                        <option value="1">Dúvida</option>
                        <option value="2">Elogio</option>
                        <option value="3">Reclamação</option>
                    </select>
                    <br>
                    <textarea class="borda-preta">Preencha aqui a sua mensagem</textarea>
                    <br>
                    <button type="submit" class="borda-preta">ENVIAR</button>
                </form>
            </div>
        </div>
    </div>

    <div class="rodape">
        <div class="redes-sociais">
            <h2>Redes sociais</h2>
            <img src="{{ asset('img/facebook.png') }}">
            <img src="{{ asset('img/youtube.png') }}">
            <img src="{{ asset('img/linkedin.png') }}">

        </div>
        <div class="area-contato">
            <h2>Contato</h2>
            <span>(11) 3333-4444</span>
            <br>
            <span>supergestao@dominio.com.br</span>
        </div>
        <div class="localizacao">
            <h2>Localização</h2>


            <img src="{{ asset('img/mapa.png') }}">
        </div>
    </div>
@endsection
