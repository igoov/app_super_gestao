<h3>Fornecedor</h3>

{{ 'Texto de teste'}}

{{--Fica o comentario que sera descartadoo peo interpretador do blade--}}

    @php
    
    @endphp  

    @if (count($fornecedores) > 0 && count($fornecedores) < 10)
        <h3>Existem alguns fornecedores cadastrados</h3>
    @elseif(count($fornecedores) > 10)
        <h3>Existem vários fornecedores cadastrados</h3>
    @else
        <h3>Ainda não existem fornecedores cadastrados</h3>
    @endif