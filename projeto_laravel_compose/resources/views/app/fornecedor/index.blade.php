<h1>fornecedor</h1>
{{-- TESTE COMENTARIO --}}
{{-- @php
// teste
/*
    asdasd
*/
    echo "TESTE"
@endphp

{{  "teste 1" }}
<?php echo 'teste 2'; ?> --}}


{{-- @if (count($fornecedor) > 0 && count($fornecedor) < 10)
    <h3>Existe alguns fornecedores</h3>
@elseif(count($fornecedor)>10)
    <h3>Existe varios fornecedores</h3>
@else
    <h3>não há fornecedores</h3>
@endif --}}

@php

@endphp
{{-- -ISSET VERIFICA A EXISTENCIA --}}
{{-- @isset($fornecedor[1]['cnpj'])
    <br>
    Fornecedor = {{ $fornecedor[1]['nome'] }}
    <br>
    Status = {{ $fornecedor[1]['status'] }}
    <br>
    CNPJ {{ $fornecedor[1]['cnpj'] ?? 'Dado nao preenchido '}}
    {{--  -Verifica uma condição contraria a vinda da variavel
    @unless($fornecedor[0]['status'] == 'S')
        Fornecedor Inativo
        <br>
    @endunless

    @endisset --}}



@for ($i = 0; isset($fornecedor[$i]); $i++)
    <br>
    Fornecedor = {{ $fornecedor[$i]['nome'] }}
    <br>
    Status = {{ $fornecedor[$i]['status'] }}
    <br>
    CNPJ {{ $fornecedor[$i]['cnpj'] ?? 'Dado nao preenchido ' }}
    <br>
    Telefone {{ $fornecedor[$i]['telefone'] ?? 'Dado nao preenchido ' }}
    <br>

@endfor


{{-- @switch ($fornecedor[0]['ddd'])
    @case('41')
        paraná
    @break
    @case('42')
        Cascavel
    @break
    @case('42')
        Londrina
    @break
@endswitch --}}
{{-- -- VARIAVEL VAZIA --}}
{{-- @empty($fornecedor[1]['cnpj'])
    vazia
@endempty --}}
<br>
