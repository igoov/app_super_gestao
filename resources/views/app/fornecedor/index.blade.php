<h3>Fornecedor</h3>

{{ 'Texto de teste'}}

{{--Fica o comentario que sera descartadoo peo interpretador do blade--}}

    @php
        /*
        if  (!<condicao>) {} //enquanto executa se o retorno for true
        */
    @endphp  

    {{-- @unless executa se o retorno for false --}}

    Fornecedor: {{ $fornecedores[0]['nome'] }}
    <br>
    Status: {{ $fornecedores[0]['status'] }}
    <br>

    @if (!($fornecedores[0]['status'] == 'S'))
            Fornecedor inativo
    @endif
    <br>
    @unless($fornecedores[0]['status'] == 'S') <!-- se o retorno da condicao for false --> 
            Fornecedor inativo
    @endunless