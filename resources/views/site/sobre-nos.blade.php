@extends('site.layouts.basico')

@section('conteudo')
    {{-- TOPO / NAVBAR --}}
    <div class="topo">
        <div class="logo">
            <div class="logo-icon" style="background: var(--cor-primaria); padding: 8px; border-radius: 8px; display: inline-block;">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#74c69d" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                    <polyline points="22 12 18 12 15 21 9 3 6 12 2 12"/>
                </svg>
            </div>
            <span class="logo-nome" style="color: var(--cor-texto-escuro); margin-left: 12px; font-weight: 600; font-size: 18px;">
                Super Gestão
            </span>
        </div>

        <div class="menu">
            <ul>
                <li><a href="{{ route('site.index') }}">Principal</a></li>
                <li><a href="{{ route('site.sobrenos') }}">Sobre Nós</a></li>
                <li><a href="{{ route('site.contato') }}">Contato</a></li>
            </ul>
        </div>
    </div>

    {{-- CONTEÚDO HERO (DIVISÃO EM DUAS COLUNAS) --}}
    <div class="conteudo-destaque">
        
        {{-- Lado Esquerdo: Título e Descrição --}}
        <div class="esquerda">
            <div class="informacoes">
                <div class="badge-online">
                    <div class="badge-dot"></div>
                    Sistema Online
                </div>
                <h1>Olá, eu sou o Super Gestão</h1>
                <p class="hero-desc">
                    O Super Gestão é o sistema online de controle administrativo que pode transformar e potencializar os negócios da sua empresa.
                </p>
                <p class="hero-desc" style="font-size: 14px; opacity: 0.8;">
                    Desenvolvido com a mais alta tecnologia para você cuidar do que é mais importante: seus negócios!
                </p>

                <div class="hero-features">
                    <div class="feature-item">
                        <div class="feature-content" style="border-left: 3px solid var(--cor-acento); padding-left: 15px;">
                            <span class="feature-title">Controle Total</span>
                            <span class="feature-desc">Gestão administrativa na palma da mão.</span>
                        </div>
                    </div>
                    <div class="feature-item" style="margin-top: 20px;">
                        <div class="feature-content" style="border-left: 3px solid var(--cor-acento); padding-left: 15px;">
                            <span class="feature-title">Tecnologia de Ponta</span>
                            <span class="feature-desc">Segurança e velocidade para seus dados.</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Lado Direito: Imagem ou Chamada para Ação --}}
        <div class="direita" style="align-items: center; text-align: center;">
            <div class="contato">
                <h1 style="font-size: 28px;">Pronto para começar?</h1>
                <p style="margin-bottom: 30px;">Experimente a modernidade na gestão da sua empresa agora mesmo.</p>
                
                {{-- Botão de ação que leva para o contato --}}
                <a href="{{ route('site.contato') }}" style="text-decoration: none;">
                    <button type="button" style="max-width: 250px;">QUERO CONHECER</button>
                </a>
            </div>
        </div>
    </div>

    {{-- RODAPÉ --}}
<div class="rodape">
    <div class="redes-sociais">
        <div class="rodape-icon">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#2d6a4f" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                <path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"/>
            </svg>
        </div>
        <h2>Redes Sociais</h2>
        <span>Siga a gente</span>
        <div class="redes-icones">
            {{-- Ícone Instagram --}}
            <a href="#" title="Instagram">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#2d6a4f" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                    <rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect>
                    <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
                    <line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line>
                </svg>
            </a>
            <a href="#" title="LinkedIn">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#2d6a4f" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"/>
                    <rect x="2" y="9" width="4" height="12"/>
                    <circle cx="4" cy="4" r="2"/>
                </svg>
            </a>
            {{-- Ícone GitHub --}}
            <a href="#" title="GitHub">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#2d6a4f" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22"></path>
                </svg>
            </a>
        </div>
    </div>
    <div class="area-contato">
        <div class="rodape-icon">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#2d6a4f" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.69 13.6 19.79 19.79 0 0 1 1.61 5a2 2 0 0 1 1.84-2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L7.91 10.4a16 16 0 0 0 6 6l.91-.91a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/>
            </svg>
        </div>
        <h2>Contato</h2>
        <span>(11) 3333-4444</span>
        <br>
        <span>supergestao@dominio.com.br</span>
    </div>
    <div class="localizacao">
        <div class="rodape-icon">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#2d6a4f" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/>
                <circle cx="12" cy="10" r="3"/>
            </svg>
        </div>
        <h2>Localização</h2>
        <span>Picos - PI</span>
    </div>
</div>
@endsection