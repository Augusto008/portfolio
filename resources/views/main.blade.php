@extends('layouts.template')

@section('header')

    @include('layouts.topMenu')

@endsection
@section('content')

    <div class="m-5"></div>

    <div id="about-me" class="my-5 py-5 text-light d-flex flex-column justify-content-center align-items-center">
        <div class="d-flex flex-column" style="width: 60%;">
            <h2 class="subtitles mb-4 text-center text-primary fw-bolder">Quem sou eu?</h2>
            <div id="about">
                <div class="about-info">
                    <div id="description" class="info-text">
                        <p class="justify">
                            &ensp;&ensp;Olá, eu me chamo <strong>Áquila Trindade</strong>, mas pode me chamar de <strong>Augusto</strong>. Eu tenho {{ $age }} anos de idade.
                                Sou <strong>desenvolvedor fullstack júnior</strong> buscando por uma nova oportunidade no mercado.
                            <br>
                            &ensp;&ensp;Meu objetivo é desenvolver softwares e aplicações web.
                            <br>
                            &ensp;&ensp;Meu foco atual vem sendo o desenvolvimento web e de APIs REST.
                        </p>
                        <div class="px-2 d-flex flex-wrap row row-cols-2 row-cols-md-3 row-cols-xl-6">
                            <div class="col-6 col-md-4 col-xl-2 p-1">
                                <button class="my-index btn btn-dark btn-outline-light bg-gradient w-100" type="button" data-bs-toggle="collapse" data-bs-target="#biography" aria-expanded="false" aria-controls="biography">Biografia</button>
                            </div>
                            <div class="col-6 col-md-4 col-xl-2 p-1">
                                <button class="my-index btn btn-dark btn-outline-light bg-gradient w-100" type="button" data-bs-toggle="collapse" data-bs-target="#idioms" aria-expanded="false" aria-controls="idioms">Idiomas</button>
                            </div>
                            <div class="col-6 col-md-4 col-xl-2 p-1">
                                <button class="my-index btn btn-dark btn-outline-light bg-gradient w-100" type="button" data-bs-toggle="collapse" data-bs-target="#education" aria-expanded="false" aria-controls="education">Educação</button>
                            </div>
                            <div class="col-6 col-md-4 col-xl-2 p-1">
                                <button class="my-index btn btn-dark btn-outline-light bg-gradient w-100" type="button" data-bs-toggle="collapse" data-bs-target="#soft-skills" aria-expanded="false" aria-controls="soft-skills">SoftSkills</button>
                            </div>
                            <div class="col-6 col-md-4 col-xl-2 p-1">
                                <button class="my-index btn btn-dark btn-outline-light bg-gradient w-100" type="button" data-bs-toggle="collapse" data-bs-target="#hard-skills" aria-expanded="false" aria-controls="hard-skills">HardSkills</button>
                            </div>
                            <div class="col-6 col-md-4 col-xl-2 p-1">
                                <button class="my-index btn btn-dark btn-outline-light bg-gradient w-100" type="button" data-bs-toggle="collapse" data-bs-target="#experience" aria-expanded="false" aria-controls="experience">Experiência</button>
                            </div>
                        </div>
                        <div id="personal" class="accordion">
                            <div id="biography" class="about-info bg-dark bg-gradient border-0 text-light p-3 rounded-4 accordion-item accordion-collapse collapse" data-bs-parent="#personal">
                                <h3 class="info-title mb-4">Biografia</h3>
                                <p class="justify" style="text-align: justify;">&ensp;&ensp;Busco uma oportunidade para continuar meu aprendizado e para crescer, expandir meu conhecimento e poder contribuir com esta empresa. No futuro, quero ser a resposta para todos os problemas, liderar meus próprios projetos e me tornar um exemplo a ser seguido por meus colegas de profissão</p>
                            </div>
                            <div id="idioms" class="about-info bg-dark bg-gradient border-0 text-light p-3 rounded-4 accordion-item accordion-collapse collapse" data-bs-parent="#personal">
                                <h3 class="info-title mb-4">Idiomas</h3>
                                <div class="info-text">
                                    <ul>
                                        <li>
                                            <p class="m-0 p-0">Fluente</p>
                                            <ul>
                                                <li>Português</li>
                                            </ul>
                                        </li>
                                        <li>
                                            <p class="m-0 p-0">Avançado</p>
                                            <ul>
                                                <li>Inglês</li>
                                            </ul>
                                        </li>
                                        {{-- <li>
                                            <p class="m-0 p-0">Intermediário</p>
                                            <ul>
                                                <li></li>
                                            </ul>
                                        </li> --}}
                                        <li>
                                            <p class="m-0 p-0">Básico</p>
                                            <ul>
                                                <li>Japonês</li>
                                            </ul>
                                        </li>
                                        <li>
                                            <p class="m-0 p-0">Estudando</p>
                                            <ul>
                                                <li>Árabe</li>
                                                <li>Latim</li>
                                            </ul>
                                        </li>
                                    </ul>
                                    {{-- <ul>
                                        <p>Want to Learn</p>
                                        <ul>
                                            <li></li>
                                            <li></li>
                                        </ul>
                                    </ul> --}}
                                </div>
                            </div>
                            <div id="education" class="about-info bg-dark bg-gradient border-0 text-light p-3 rounded-4 accordion-item accordion-collapse collapse" data-bs-parent="#personal">
                                <h3 class="info-title mb-4">Education</h3>
                                <div class="info-text">
                                    <ul>
                                        <li class="mb-3">BACHAREL EM SISTEMAS DE INFORMAÇÃO | CURSANDO | UNIPAR (UNIV. PARANAENSE)</li>
                                        <li class="mb-3">ENSINO MÉDIO | 2015 | E. E. E. B. DR. LAURO DORNELLES</li>
                                    </ul>
                                </div>
                            </div>
                            <div id="soft-skills" class="about-info bg-dark bg-gradient border-0 text-light p-3 rounded-4 accordion-item accordion-collapse collapse" data-bs-parent="#personal">
                                <h3 class="info-title mb-4">SoftSkills</h3>
                                <div class="info-text">
                                    <ul class="my-list row row-cols-1 row-cols-md-2 row-cols-xl-3">
                                        <li class="col py-1 px-2">Proatividade</li>
                                        <li class="col py-1 px-2">Positividade</li>
                                        <li class="col py-1 px-2">Criatividade</li>
                                        <li class="col py-1 px-2">Capacidade de Resolver Problemas</li>
                                        <li class="col py-1 px-2">Pensamento Crítico</li>
                                        <li class="col py-1 px-2">Orientação para Resultados</li>
                                        <li class="col py-1 px-2">Controle Emocional</li>
                                        <li class="col py-1 px-2">Flexibilidade</li>
                                        <li class="col py-1 px-2">Resiliência</li>
                                        <li class="col py-1 px-2">Ética</li>
                                        <li class="col py-1 px-2">Comunicação</li>
                                        <li class="col py-1 px-2">Trabalho em Equipe</li>
                                        <li class="col py-1 px-2">Empatia</li>
                                        <li class="col py-1 px-2">Inteligência Emocional</li>
                                        <li class="col py-1 px-2">Colaboração</li>
                                        <li class="col py-1 px-2">Visão Geral</li>
                                    </ul>
                                </div>
                            </div>
                            <div id="hard-skills" class="about-info bg-dark bg-gradient border-0 text-light p-3 rounded-4 accordion-item accordion-collapse collapse" data-bs-parent="#personal">
                                <h3 class="info-title mb-4">HardSkills</h3>
                                <div class="info-text">
                                    <ul>
                                        <li class="mb-3">Lógica de Programação</li>
                                        <li class="mb-3">
                                            Linguagens de Programação
                                            <ul class="list-group list-group-horizontal flex-wrap">
                                                <li class="list-group-item" title="C">
                                                    <img class="m-auto" src="{{env('APP_URL')}}/assets/icons/c.svg" width="auto" height="40px" alt="C">
                                                </li>
                                                <li class="list-group-item" title="Java">
                                                    <img class="m-auto" src="{{env('APP_URL')}}/assets/icons/java.svg" width="auto" height="40px" alt="Java">
                                                </li>
                                                <li class="list-group-item" title="JavaScript">
                                                    <img class="m-auto" src="{{env('APP_URL')}}/assets/icons/javascript.svg" width="auto" height="40px" alt="JavaScript">
                                                </li>
                                                <li class="list-group-item" title="PHP">
                                                    <img class="m-auto" src="{{env('APP_URL')}}/assets/icons/php.svg" width="auto" height="40px" alt="PHP">
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="mb-3">
                                            Banco de Dados
                                            <ul class="list-group list-group-horizontal flex-wrap">
                                                <li class="list-group-item" title="SQL">
                                                    <img class="m-auto" src="{{env('APP_URL')}}/assets/icons/sql.svg" width="auto" height="40px" alt="SQL">
                                                </li>
                                                <li class="list-group-item" title="PostgreSQL">
                                                    <img class="m-auto" src="{{env('APP_URL')}}/assets/icons/postgres.svg" width="auto" height="40px" alt="PostgreSQL">
                                                </li>
                                                <li class="list-group-item" title="Prisma">
                                                    <img class="m-auto" src="{{env('APP_URL')}}/assets/icons/prisma-orm.svg" width="auto" height="40px" alt="Prisma">
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="mb-3">
                                            Desenvolvimento WEB
                                            <ul class="list-group list-group-horizontal flex-wrap">
                                                <li class="list-group-item" title="HTML">
                                                    <img class="m-auto" src="{{env('APP_URL')}}/assets/icons/html5.svg" width="auto" height="40px" alt="HTML">
                                                </li>
                                                <li class="list-group-item" title="CSS">
                                                    <img class="m-auto" src="{{env('APP_URL')}}/assets/icons/css.svg" width="auto" height="40px" alt="CSS">
                                                </li>
                                                <li class="list-group-item" title="jQuery">
                                                    <img class="m-auto" src="{{env('APP_URL')}}/assets/icons/jquery.svg" width="auto" height="40px" alt="jQuery">
                                                </li>
                                                <li class="list-group-item" title="RegEx">
                                                    <img class="m-auto" src="{{env('APP_URL')}}/assets/icons/regex.svg" width="auto" height="40px" alt="RegEx">
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="mb-3">
                                            Back End
                                            <ul class="list-group list-group-horizontal flex-wrap">
                                                <li class="list-group-item" title="NodeJS">
                                                    <img class="m-auto" src="{{env('APP_URL')}}/assets/icons/NodeJS.svg" width="auto" height="40px" alt="NodeJS">
                                                </li>
                                                <li class="list-group-item" title="CRON">
                                                    <img class="m-auto" src="{{env('APP_URL')}}/assets/icons/cron.svg" width="auto" height="40px" alt="CRON">
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="mb-3">
                                            Ferramentas
                                            <ul class="list-group list-group-horizontal flex-wrap">
                                                <li class="list-group-item" title="Laravel">
                                                    <img class="m-auto" src="{{env('APP_URL')}}/assets/icons/laravel.svg" width="auto" height="40px" alt="Laravel">
                                                </li>
                                                <li class="list-group-item" title="Bootstrap">
                                                    <img class="m-auto" src="{{env('APP_URL')}}/assets/icons/bootstrap.svg" width="auto" height="40px" alt="Bootstrap">
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="mb-3">
                                            Versionamento
                                            <ul class="list-group list-group-horizontal flex-wrap">
                                                <li class="list-group-item" title="Git">
                                                    <img class="m-auto" src="{{env('APP_URL')}}/assets/icons/git.svg" width="auto" height="40px" alt="Git">
                                                </li>
                                                <li class="list-group-item" title="GitHub">
                                                    <img class="m-auto" src="{{env('APP_URL')}}/assets/icons/github.svg" width="auto" height="40px" alt="GitHub">
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div id="experience" class="about-info bg-dark bg-gradient border-0 text-light p-3 rounded-4 accordion-item accordion-collapse collapse" data-bs-parent="#personal">
                                <h3 class="info-title mb-4">Experiências</h3>
                                <div class="info-text">
                                    <ul>
                                        <li class="mb-3">
                                            PROJETOS PESSOAIS EM ANDAMENTO | https://github.com/Augusto008<br>
                                            · Páginas WEB e bancos de dados multi-idiomas · API REST · Mais
                                        </li>
                                        <li class="mb-3">
                                            SYSTEMS DEVELOPMENT ANALYST | TEN BRASIL DISTRIBUIDORA | 02-2023 ATÉ 08-2023<br>
                                            · Desenvolvimento de páginas WEB comerciais, bancos de dados multi-idiomas e API REST. Competências adicionais: Node.Js · PostgreSQL · Insomnia · CRON · Nodemailer · Prisma · JsonWebToken
                                        </li>
                                        <li class="mb-3">
                                            JÚNIOR SOFTWARE DEVELOPER (FREELANCE) | TEN BRASIL DISTRIBUIDORA | 01-2023 ATÉ 01-2023<br>
                                            · Desenvolvimento WEB, atuando principalmente na padronização LGPD dos sites da empresa.
                                            Competências: Laravel · Bootstrap · PHPMailer · Composer · XAMPP · AJAX · HTML5 · CSS · JavaScript · PHP · HTML
                                        </li>
                                        <li class="mb-3">
                                            TÉCNICO DE FIBRA ÓPTICA (INFRA) | METRONET INFORMÁTICA LTDA. | 01-2021 ATÉ 11-2022<br>
                                            · Atuava na infraestrutura de fibra óptica da empresa, instalando CTOs (Caixa de Terminação Óptica) externas e redes internas em prédios, realizando a fusão de fibras e a manutenção da rede.
                                        </li>
                                        <li class="mb-3">
                                            MEIO OFICIAL (INFRA) | METRONET INFORMÁTICA LTDA. | 05-2019 ATÉ 12-2022<br>
                                            · Na equipe de fusão (responsável pela manipulação das fibras ópticas, instalação de CTOs externos e internos), atuava como um auxiliar, porém, com mais responsabilidades. Na falta de um técnico, eu deveria que substituir o mesmo.
                                        </li>
                                        <li class="mb-3">
                                            AUXILIAR DE CAMPO (INFRA) | METRONET INFORMÁTICA LTDA. | 11-2018 ATÉ 04-2019<br>
                                            · Auxiliava os técnicos e chefes de equipe da INFRA nas tarefas de lançamento de cabos e instalação de equipamentos externos.
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="projects-container" class="py-5">
        <div class="mt-5 pb-4 d-flex justify-content-center align-items-center">
            <h2 id="projects" class="subtitles text-center text-primary fw-bolder">Projects:&nbsp;&nbsp;</h2>
            <select name="project-selector" id="project-selector" class="indicators p-1" autocomplete="false">
                @foreach ($projects as $project)
                    @if ($loop->first)
                        <option value="" data-bs-target="#my-projects" data-bs-slide-to="0" aria-current="true" aria-label="{{$project['title']}}" selected>{{$project['title']}}</option>
                    @else
                        <option value="" data-bs-target="#my-projects" data-bs-slide-to="{{$loop->index}}" aria-label="{{$project['title']}}">{{$project['title']}}</option>
                    @endif
                @endforeach
            </select>
        </div>
        <div id="my-projects" class="carousel mb-5 slide carousel-fade accordion">
            <div class="carousel-inner">
                @foreach ($projects as $project)
                    @if ($loop->first)
                        <div class="carousel-item active">
                    @else
                        <div class="carousel-item">
                    @endif
                        <div class="card mx-auto col-10">
                            <div class="row g-0" style="max-height: 320px; height: 32vw;">
                                <div class="col-4 m-0 p-1 h-100 d-flex justify-content-center align-items-center">
                                    <img src="{{$project['image']}}" class="object-fit-contain rounded m-0 p-0 mh-100" alt="Project {{$loop->iteration}}: {{$project['title']}}">
                                </div>
                                <div class="col-8 overflow-scroll" style="max-height: 100%;">
                                    <div class="card-body">
                                        <h5 class="card-title">{{$project['title']}}</h5>
                                        <p class="card-text">{{$project['description']}}</p>
                                        <p class="card-text"><small class="text-body-secondary">{{$project['link']}}</small></p>
                                        <button class="btn btn-outline-dark" type="button" data-bs-toggle="collapse" data-bs-target="#proj-{{$loop->iteration}}" aria-controls="proj-{{$loop->iteration}}">Technical Details</button>
                                    </div>
                                </div>
                            </div>
                            <div id="proj-{{$loop->iteration}}" class="accordion-collapse collapse" data-bs-parent="#my-projects" style="height: 60vw; overflow: scroll;">
                                <div class="accordion-body">
                                    {{-- General Information and links --}}
                                    <div id="general-info">
                                        <h5>This Project was created using:</h5>
                                        <ul class="row">
                                            <li>Markup Languages</li>
                                            <li>Programming Languages</li>
                                            <li>Frameworks</li>
                                            <li>APIs</li>
                                            <li>Dependencies</li>
                                            <li>Database</li>
                                            <li>styles</li>
                                            <li>More</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>                          
                        </div>
                    </div>
                @endforeach
            </div>
            {{-- <button class="carousel-control-prev d-block m-auto" type="button" data-bs-target="#my-projects" data-bs-slide="prev" style="width: 8%;">
                <div class="d-flex justify-content-start align-items-center">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </div>
            </button>
            <button class="carousel-control-next d-block m-auto" type="button" data-bs-target="#my-projects" data-bs-slide="next" style="width: 8%;">
                <div class="d-flex justify-content-end align-items-center">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </div>
            </button> --}}
        </div>
    </div>

@endsection
@section('footer')

    @include('layouts.footer')
    
@endsection