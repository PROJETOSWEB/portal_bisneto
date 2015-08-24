<ul id="nav"
    data-ng-controller="NavCtrl"
    data-collapse-nav
    data-slim-scroll
    data-highlight-active>
    <li><a href="#/dashboard"> <i class="fa fa-dashboard"></i><span data-i18n="Dashboard"></span> </a></li>
    <li><a href="#/biografia"> <i class="fa fa-edit"></i><span data-i18n="Biografia"></span> </a></li>
    <li>
        <a href="#/ui"><i class="fa fa-tags"></i><span data-i18n="Post"></span></a>
        <ul>
            
            <li><a href="#/post/posts"><i class="fa fa-caret-right"></i><span data-i18n="Todos os Posts"></span></a></li>
            <li><a href="#/post/adicionar_post"><i class="fa fa-caret-right"></i><span data-i18n="Adicionar Post"></span></a></li>
            
        </ul>
    </li>
    <li>
        <a href="#/table"><i class="fa fa-table"></i><span data-i18n="Tables"></span></a>
        <ul>
            <li><a href="#/tables/static"><i class="fa fa-caret-right"></i><span data-i18n="Static Tables"></span></a></li>
            <li><a href="#/tables/responsive"><i class="fa fa-caret-right"></i><span data-i18n="Responsive Tables"></span></a></li>
            <li><a href="#/tables/dynamic"><i class="fa fa-caret-right"></i><span data-i18n="Dynamic Tables"></span></a></li>
        </ul>
    </li>
    <li>
        <a href="#/form"><i class="fa fa-pencil"></i><span data-i18n="Forms"></span></a>
        <ul class="sub-nav">
            <li><a href="#/forms/elements"><i class="fa fa-caret-right"></i><span data-i18n="Form Elements"></span> <span class="badge badge-warning">11</span></a></li>
            <li><a href="#/forms/validation"><i class="fa fa-caret-right"></i><span data-i18n="Form Validation"></span></a></li>
            <li><a href="#/forms/wizard"><i class="fa fa-caret-right"></i><span data-i18n="Form Wizard"></span></a></li>
            <li><a href="#/forms/layouts"><i class="fa fa-caret-right"></i><span data-i18n="Form Layouts"></span></a></li>
        </ul>
    </li>
    <li class="nav-task">
        <a href="#/tasks">
            <i class="fa fa-tasks"></i><span data-i18n="Tasks"></span>
            <span class="badge badge-danger main-badge"
                  data-ng-show="taskRemainingCount > 0">{{taskRemainingCount}}</span>
        </a>
    </li>
    <li>
        <a href="#/charts"><i class="fa fa-bar-chart-o"></i><span data-i18n="Charts"></span></a>
        <ul>
            <li><a href="#/charts/morris"><i class="fa fa-caret-right"></i>Morris</a></li>
            <li><a href="#/charts/flot"><i class="fa fa-caret-right"></i>Flot <span data-i18n="Charts"></span></a></li>
            <li><a href="#/charts/others"><i class="fa fa-caret-right"></i>Other <span data-i18n="Charts"></span></a></li>
        </ul>
    </li>
    <li>
        <a href="#/pages"><i class="fa fa-file-text-o"></i><span data-i18n="Pages"></span></a>
        <ul>
            <li><a href="#/pages/signin"><i class="fa fa-caret-right"></i><span data-i18n="Sign in"></span></a></li>
            <li><a href="#/pages/signup"><i class="fa fa-caret-right"></i><span data-i18n="Sign Up"></span></a></li>
            <li><a href="#/pages/profile"><i class="fa fa-caret-right"></i><span data-i18n="User Profile"></span></a></li>
            <li><a href="#/404"><i class="fa fa-caret-right"></i>404 <span data-i18n="Error"></span></a></li>
            <li><a href="#/pages/500"><i class="fa fa-caret-right"></i>500 <span data-i18n="Error"></span></a></li>
        </ul>
    </li>
</ul>