
 @if(Auth::user()->can('academico'))
    <li class="menu-item-has-children dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-laptop"></i>Academico</a>
        <ul class="sub-menu children dropdown-menu">
            @if(Auth::user()->can('instituicao'))
                <li><i class="fa fa-puzzle-piece"></i><a href="#">Instituição</a></li>
            @endif
            @if(Auth::user()->can('curso'))
                <li><i class="fa fa-id-badge"></i><a href="#">Cursos</a></li>
            @endif
        </ul>
    </li>
@endif

 @if(Auth::user()->can('acesso'))
    <li class="menu-item-has-children dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-laptop"></i>Acesso</a>
        <ul class="sub-menu children dropdown-menu">
            @if(Auth::user()->can('usuario'))
                <li><i class="fa fa-puzzle-piece"></i><a href="#">Usuário</a></li>
            @endif
            @if(Auth::user()->can('perfil'))
                <li><i class="fa fa-id-badge"></i><a href="#">Perfil</a></li>
            @endif
            @if(Auth::user()->can('acesso-configuracao'))
                <li><i class="fa fa-id-badge"></i><a href="#">Configuração</a></li>
            @endif
        </ul>
    </li>
@endif