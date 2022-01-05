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
@isset($fornecedor[1]['cnpj'])
    <br>
    Fornecedor = {{ $fornecedor[0]['nome'] }}
    <br>
    Status = {{ $fornecedor[0]['status'] }}
    <br>
    {{-- -Verifica uma condição contraria a vinda da variavel --}}
    @unless($fornecedor[0]['status'] == 'S')
        Fornecedor Inativo
        <br>
    @endunless


@endisset
<br>
{{-- -- VARIAVEL VAZIA --}}
@empty($fornecedor[1]['cnpj'])
    vazia
@endempty
<br>
