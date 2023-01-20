<nav id="sidebar" class="sidebar" >
    <div class="sidebar-content js-simplebar">
        <a class="sidebar-brand" href="index.html">
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
                    <li class="sidebar-item"><a class="sidebar-link" href="{{URL::to('/home')}}">{{__('text.operation')}}</a></li>
                </ul>
            </li>
            <li class="sidebar-header">
                {{__('text.management')}}
            </li>
            
           

            

            

            <li class="sidebar-item">
                <a class="sidebar-link" href="{{route('customer.index')}}">
      <i class="align-middle" data-feather="users"></i> <span class="align-middle">{{__('text.customers')}}</span>
    </a>
            </li>

            <li class="sidebar-item">
                <a class="sidebar-link" href="{{route('mcscr.index')}}">
      <i class="align-middle" data-feather="archive"></i> <span class="align-middle">{{__('text.mcscr')}}</span>
    </a>
            </li>

            <li class="sidebar-header">
                {{__('text.finances')}}
            </li>

            

            
            

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

            

          
        </ul>

        
    </div>
</nav>