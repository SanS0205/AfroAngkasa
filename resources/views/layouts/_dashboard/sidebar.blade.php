<nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
    <div class="sb-sidenav-menu">
       <div class="nav">
          <a class="nav-link active" href="{{ route('dashboard.index') }}">
             <div class="sb-nav-link-icon">
                <i class="fas fa-tachometer-alt"></i>
             </div>
             {{ trans('dashboard.link.dashboard') }}
          </a>
          <div class="sb-sidenav-menu-heading">{{ trans('dashboard.menu.Master') }}</div>
 
          <a class="nav-link" href="{{ route('mastercabang.index') }}">
             {{-- <div class="sb-nav-link-icon">
                <i class="far fa-newspaper"></i>
             </div> --}}
             {{ trans('dashboard.link.master_branch') }}
          </a>
          <a class="nav-link" href="#">
             {{-- <div class="sb-nav-link-icon">
                <i class="fas fa-bookmark"></i>
             </div> --}}
             {{ trans('dashboard.link.master_customer') }}
          </a>
          <a class="nav-link" href="#">
             {{-- <div class="sb-nav-link-icon">
                <i class="fas fa-tags"></i>
             </div> --}}
             {{ trans('dashboard.link.master_competitor') }}
          </a>
          <a class="nav-link" href="#">
            {{-- <div class="sb-nav-link-icon">
               <i class="fas fa-tags"></i>
            </div> --}}
            {{ trans('dashboard.link.master_employee') }}
         </a>
          <div class="sb-sidenav-menu-heading">{{ trans('dashboard.menu.transaction_menu') }}</div>
          <a class="nav-link" href="#">
             {{-- <div class="sb-nav-link-icon">
                <i class="fas fa-user"></i>
             </div> --}}
             {{ trans('dashboard.link.transaction') }}
          </a>
          <a class="nav-link" href="#">
             {{-- <div class="sb-nav-link-icon">
                <i class="fas fa-user-shield"></i>
             </div> --}}
             {{ trans('dashboard.link.transaction_history') }}
          </a>
          <a class="nav-link" href="#">
            {{-- <div class="sb-nav-link-icon">
               <i class="fas fa-tags"></i>
            </div> --}}
            {{ trans('dashboard.link.goods_status') }}
         </a>
          <div class="sb-sidenav-menu-heading">{{ trans('dashboard.menu.finance') }}</div>
          <a class="nav-link" href="#">
             {{-- <div class="sb-nav-link-icon">
                <i class="fas fa-photo-video"></i>
             </div> --}}
             {{ trans('dashboard.link.master_debt') }}
          </a>
          <a class="nav-link" href="#">
            {{-- <div class="sb-nav-link-icon">
               <i class="fas fa-tags"></i>
            </div> --}}
            {{ trans('dashboard.link.master_receivable') }}
         </a>
         <div class="sb-sidenav-menu-heading">{{ trans('dashboard.menu.report') }}</div>
       </div>
    </div>
    <div class="sb-sidenav-footer">
       <div class="small">{{ trans('dashboard.label.logged_in_as') }} :</div>
       <!-- show username -->
       {{ Auth::user()->name }}
    </div>
 </nav>
 