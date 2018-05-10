 
<ul class="sub-menu children dropdown-menu">
 @if(Auth::user()->can('academico'))
	@if(Auth::user()->can('instituicao'))
    	<li><i class="fa fa-puzzle-piece"></i><a href="#">Instituição</a></li>
    @endif
    @if(Auth::user()->can('curso'))
    	<li><i class="fa fa-id-badge"></i><a href="#">Cursos</a></li>
    @endif
@endif

@if(Auth::user()->can('acesso'))
    @if(Auth::user()->can('usuario'))
    	<li><i class="fa fa-puzzle-piece"></i><a href="#">Usuário</a></li>
    @endif
    @if(Auth::user()->can('perfil'))
    	<li><i class="fa fa-id-badge"></i><a href="#">Perfil</a></li>
    @endif
    @if(Auth::user()->can('acesso-configuracao'))
    	<li><i class="fa fa-id-badge"></i><a href="#">Configuração</a></li>
    @endif
@endif
</ul>