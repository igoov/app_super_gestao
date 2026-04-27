<h3>Fornecedor</h3>

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

    @forelse($fornecedores as $indice => $fornecedor)
        Interacao atual: {{ $loop->iteration }}
        <br>
        Fornecedor: {{ $fornecedor['nome'] }}
        @php $fornecedor['nome'] = 'Outro nome para o fornecedor' @endphp 
        <br>
        Status: {{ $fornecedor['status'] }}
        <br>
        CNPJ: {{ $fornecedor['cnpj'] ?? ''}}
        <br>
        Telefone: ({{ $fornecedor['ddd'] ?? ''}}) {{ $fornecedor['telefone'] ?? ''}}
        <br>
        @if($loop->first)
            Primeira interacao do Loop
        @endif

        @if($loop->last)
            Ultima interacao do Loop

            <br>
            Total de resgistros: {{$loop->count}}

        @endif
        <hr>
    @empty
        Nao existem fornecedores cadastrados!!!
    @endforelse
@endisset
