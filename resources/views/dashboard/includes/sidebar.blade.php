<div class="container-fluid">
<div class="main-menu menu-static menu-dark menu-accordion menu-shadow mt-5 mr-2" data-scroll-to-active="true">
    <div class="main-menu-content">
      <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
        <li class=" navigation-header text-center">
            <span data-i18n="nav.category.layouts">{{__('admin/sidebar.Main')}}</span><i class="la la-ellipsis-h ft-minus" data-toggle="tooltip"
            data-placement="right" data-original-title="Layouts"></i>
          </li>
        <li class=" nav-item"><a href="index.html"><i class="la la-home"></i><span class="menu-title" data-i18n="nav.dash.main">{{__('admin/sidebar.Main')}}</span><span class="badge badge badge-info badge-pill float-right mr-2">3</span></a>
        </li>
        <li class="nav-item"><a href="#"><i class="la la-cog"></i><span class="menu-title" data-i18n="nav.templates.main">{{__('admin/sidebar.Settings')}}</span></a>
          <ul class="menu-content">
            <li><a class="menu-item" href="#" data-i18n="nav.templates.vert.main">{{__('admin/sidebar.General')}}</a>
              <ul class="menu-content">
                <li><a class="menu-item" href="{{ route('Shipping.Methods') }}" data-i18n="nav.templates.vert.classic_menu"><i class="la la-truck"></i>{{__('admin/sidebar.shippingMethods')}}</a>
                </li>
                {{-- <li><a class="menu-item" href="">شحن محلي</a>
                </li>
                <li><a class="menu-item" href=""
                  data-i18n="nav.templates.vert.compact_menu">شحن خارجي</a>
                </li> --}}
              </ul>
            </li>
            {{-- <li><a class="menu-item" href="#" data-i18n="nav.templates.horz.main">Horizontal</a>
              <ul class="menu-content">
                <li><a class="menu-item" href="../horizontal-menu-template" data-i18n="nav.templates.horz.classic">Classic</a>
                </li>
                <li><a class="menu-item" href="../horizontal-menu-template-nav" data-i18n="nav.templates.horz.top_icon">Full Width</a>
                </li>
              </ul>
            </li> --}}
          </ul>
        </li>
      </ul>
    </div>
  </div>
</div>
