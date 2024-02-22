<nav id="sidebar" class="sidebar" >
    <div class="sidebar-content js-simplebar">
        <a class="sidebar-brand" href="/home">
          <span class="align-middle">InoGest</span>
        </a>

        <ul class="sidebar-nav">
            <li class="sidebar-header">
                {{__('text.pages')}}
            </li>
            <li class="sidebar-item">
                <a href="#dashboard" data-toggle="collapse" class="sidebar-link collapsed">
                <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">{{__('text.dashboard')}}</span>
                </a>
                <ul id="dashboard" class="sidebar-dropdown list-unstyled collapse " data-parent="#sidebar">
                    <li class="sidebar-item"><a class="sidebar-link" href="{{route('operationedc.index')}}">Operação EDC</a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="{{route('operationeds.index')}}">{{__('text.operationeds')}}</a></li> 

                    @if (auth()->user()->role_id ==1)
                    <li class="sidebar-item"><a class="sidebar-link" href="{{route('human-resource.index')}}">{{__('text.human_resource')}}</a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="{{route('finance.index')}}">{{__('text.financial')}}</a></li>
                    @endif

                </ul>
            </li>
            @if (auth()->user()->role_id ==1)
            <li class="sidebar-header">
                {{__('text.human_resource')}}
            </li>
            
            <li class="sidebar-item">
                <a class="sidebar-link" href="{{route('employee.index')}}">
                <i class="align-middle" data-feather="users"></i> <span class="align-middle">{{__('text.employees')}}</span>
                </a>
            </li>

            <li class="sidebar-item">
                <a class="sidebar-link" href="{{route('absence.index')}}">
                <i class="align-middle" data-feather="users"></i> <span class="align-middle">{{__('text.absences')}}</span>
                </a>
            </li>
            @endif

            <li class="sidebar-header">
                {{__('text.finances')}}
            </li>

            
            @if (auth()->user()->role_id ==1)
            <li class="sidebar-item">
                <a class="sidebar-link" href="{{route('process_salary.index')}}">
                <i class="align-middle" data-feather="dollar-sign"></i> <span class="align-middle">{{__('text.process_salary')}}</span>
                </a>
            </li>
            @endif
            
            

            <li class="sidebar-item">
                <a class="sidebar-link" href="{{route('quotation.index')}}">
                <i class="align-middle" data-feather="activity"></i> <span class="align-middle">{{__('text.quotation')}}</span>
                </a>
            </li>

            <li class="sidebar-item">
                <a class="sidebar-link" href="{{route('invoice.index')}}">
                <i class="align-middle" data-feather="trending-up"></i> <span class="align-middle">{{__('text.invoice')}}</span>
                </a>
            </li>

            <li class="sidebar-item">
                <a class="sidebar-link" href="{{route('expenses.index')}}">
                <i class="align-middle" data-feather="bar-chart-2"></i> <span class="align-middle">{{__('text.expense')}}</span>
                </a>
            </li>

            


            <li class="sidebar-header">
                {{__('text.management')}}
            </li>

            @if (auth()->user()->role_id ==1)
                
            <li class="sidebar-item">
                <a class="sidebar-link" href="{{route('user.index')}}">
                <i class="align-middle" data-feather="user"></i> <span class="align-middle">{{__('text.users')}}</span>
                </a>
            </li>

            <li class="sidebar-item">
                <a class="sidebar-link" href="{{route('position.index')}}">
                <i class="align-middle" data-feather="briefcase"></i> <span class="align-middle">{{__('text.positions')}}</span>
                </a>
            </li>


            <li class="sidebar-item">
                <a class="sidebar-link" href="{{route('department.index')}}">
                <i class="align-middle" data-feather="briefcase"></i> <span class="align-middle">{{__('text.departments')}}</span>
                </a>
            </li>

            @endif

            <li class="sidebar-item">
                <a class="sidebar-link" href="{{route('reports.index')}}">
                <i class="align-middle" data-feather="activity"></i> <span class="align-middle">{{__('text.reports')}}</span>
                </a>
            </li>

            <li class="sidebar-item">
                <a class="sidebar-link" href="{{route('customer.index')}}">
                <i class="align-middle" data-feather="users"></i> <span class="align-middle">{{__('text.customers')}}</span>
                </a>
            </li>

            <li class="sidebar-item">
                <a class="sidebar-link" href="{{route('activity.index')}}">
                <i class="align-middle" data-feather="activity"></i> <span class="align-middle">{{__('text.activity')}}</span>
                </a>
            </li>

            <li class="sidebar-item">
                <a class="sidebar-link" href="{{route('meeting.index')}}">
                <i class="align-middle" data-feather="activity"></i> <span class="align-middle">Acta de Reunião</span>
                </a>
            </li>

            <li class="sidebar-item">
                <a class="sidebar-link" href="{{route('mcscr.index')}}">
                <i class="align-middle" data-feather="archive"></i> <span class="align-middle">{{__('text.mcscr')}}</span>
                </a>
            </li>

            <li class="sidebar-item">
                <a class="sidebar-link" href="{{route('accountmanagement.index')}}">
                <i class="align-middle" data-feather="archive"></i> <span class="align-middle">{{__('text.accountmanagement')}}</span>
                </a>
            </li>

            <li class="sidebar-header">
                {{__('text.platforms')}}
            </li>

            <li class="sidebar-item">
                <a href="#edc" data-toggle="collapse" class="sidebar-link collapsed">
                <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">{{__('EDC')}}</span>
                </a>
                <ul id="edc" class="sidebar-dropdown list-unstyled collapse " data-parent="#sidebar">
                    <li class="sidebar-item"><a class="sidebar-link" href="{{route('edcuser.index')}}">{{__('text.edcusers')}}</a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="{{route('edcuseronline.index')}}">{{__('text.edcusersonline')}}</a></li>
                    {{--<li class="sidebar-item"><a class="sidebar-link" href="{{route('finance.index')}}">{{__('text.confirm_user')}}</a></li>--}}
                    <li class="sidebar-item"><a class="sidebar-link" href="{{route('voucher.index')}}">Recargas</a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="{{route('shift.index')}}">{{__('text.closeshift')}}</a></li>
                    
                  
                </ul>
            </li>

            <li class="sidebar-item">
                <a href="#eds" data-toggle="collapse" class="sidebar-link collapsed">
                <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">EDS</span>
                </a>
                <ul id="eds" class="sidebar-dropdown list-unstyled collapse " data-parent="#sidebar">
                   
                    <li class="sidebar-item"><a class="sidebar-link" href="{{route('edsuseronline.index')}}">{{__('text.edsuseronline')}}</a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="{{route('vouchereds.index')}}">Recargas</a></li>
                   
                  
                </ul>
            </li>

            <li class="sidebar-item">
                <a class="sidebar-link" href="{{route('usersedc.index')}}">
                <i class="align-middle" data-feather="user"></i> <span class="align-middle">Usuários EDC</span>
                </a>
            </li>
            
            <li class="sidebar-item">
                <a class="sidebar-link" href="{{route('feedbackuser.index')}}">
                <i class="align-middle" data-feather="archive"></i> <span class="align-middle">Estatisticas Usuário</span>
                </a>
            </li>

            <li class="sidebar-header">
                InoSecure
            </li>
            <li class="sidebar-item">
                <a class="sidebar-link" href="{{URL::to('/inosecure')}}">
                <i class="align-middle" data-feather="archive"></i> <span class="align-middle">Painel</span>
                </a>
            </li>
            <li class="sidebar-item">
                <a href="#inosecureuser" data-toggle="collapse" class="sidebar-link collapsed">
                <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Usuários</span>
                </a>
                <ul id="inosecureuser" class="sidebar-dropdown list-unstyled collapse " data-parent="#sidebar">
                   
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="{{URL::to('/inosecure/user/in')}}">
                         <span class="align-middle">Entrada</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="{{URL::to('/inosecure/user/out')}}">
                         <span class="align-middle">Saída</span>
                        </a>
                    </li>
                    
                   
                  
                </ul>
            </li>
            <li class="sidebar-item">
                <a href="#inosecureguest" data-toggle="collapse" class="sidebar-link collapsed">
                <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Convidado</span>
                </a>
                <ul id="inosecureguest" class="sidebar-dropdown list-unstyled collapse " data-parent="#sidebar">
                   
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="{{URL::to('/inosecure/guest/in')}}">
                        <span class="align-middle">Entrada Convidado</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="{{URL::to('/inosecure/guest/out')}}">
                        <span class="align-middle">Saída Convidado</span>
                        </a>
                    </li>
                   
                  
                </ul>
            </li>
            
             <li class="sidebar-header">
                InoGest Atas
            </li>
            <li class="sidebar-item">
                <a class="sidebar-link" href="{{URL::to('/inogest-atas')}}">
                <i class="align-middle" data-feather="archive"></i> <span class="align-middle">Painel</span>
                </a>
            </li>

            <li class="sidebar-item">
                <a class="sidebar-link" href="{{URL::to('/inogest-atas/faturas')}}">
                <i class="align-middle" data-feather="archive"></i> <span class="align-middle">Faturas</span>
                </a>
            </li>
           


          

            

          
        </ul>

        <!--<div class="sidebar-cta">
            <div class="sidebar-cta-content">
                <strong class="d-inline-block mb-2">Upgrade to Pro</strong>
                <div class="mb-3 text-sm">
                    Are you looking for more components? Check out our premium version.
                </div>
                <a href="https://adminkit.io/pricing" target="_blank" class="btn btn-primary btn-block">Upgrade to Pro</a>
            </div>
        </div>-->
    </div>
</nav>