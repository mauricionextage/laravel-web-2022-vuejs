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

@isset($fornecedor[1]['cnpj'] )

    Fornecedor = {{ $fornecedor[0]['nome'] }}

    Status = {{ $fornecedor[0]['status'] }}

    @unless($fornecedor[0]['status'] == 'S')
        Fornecedor Inativo
    @endunless


@endisset
