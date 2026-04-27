<h3>Fornecedor</h3>

{{ 'Texto de teste'}}

{{--Fica o comentario que sera descartadoo peo interpretador do blade--}}

    @php
        /*
        if  (isset($variavel)) {} //retornar true se a variavel estivedr definida
        */
    @endphp  

@isset($fornecedores)
    Fornecedor: {{ $fornecedores[0]['nome'] }}
    <br>
    Status: {{ $fornecedores[0]['status'] }}
    <br>

    @isset($fornecedores[0]['cnpj'])
        CNPJ: {{ $fornecedores[0]['cnpj'] }}
    @endisset
@endisset