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

        </ul>

        
    </div>
</nav>