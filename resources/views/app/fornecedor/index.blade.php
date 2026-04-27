<h3>Fornecedor</h3>

{{ 'Texto de teste'}}

{{--Fica o comentario que sera descartadoo peo interpretador do blade--}}

    @php
        /*
        if  (empty($variavel)) {} //retornar true se a variavel estiver vazia
        - ''
        - 0
        - 0.0
        -'0'
        -Null
        -false
        -array()
        -$var
        */
    @endphp  

@isset($fornecedores)

    Fornecedor: {{ $fornecedores[0]['nome'] }}
    <br>
    Status: {{ $fornecedores[0]['status'] }}
    <br>
    CNPJ: {{ $fornecedores[1]['cnpj'] ?? 'Dado nao preenchido'}}
    <!--
        $variavel testada nao estiver definida (isset)
        ou
        $variavel testada possuir o valor null
    -->

@endisset