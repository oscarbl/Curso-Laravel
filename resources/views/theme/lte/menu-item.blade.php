@if ($item["submenu"] == [])
<li class="nav-item has-treeview menu-open">
    <a href="{{url($item['url'])}}" class="nav-link active">
        <i class="fa {{$item["icono"]}} nav-icon fas fa-copy"></i>
        <span>{{$item["nombre"]}}</span>
    </a>
</li>
@else
<li class="nav-item has-treeview menu-open">
    <a href="{{url($item['url'])}}" class="nav-link">
        <i class="fa {{$item["icono"]}} right fas fa-angle-left"></i>
        <span>{{$item["nombre"]}}</span>
        <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
        </span>
    </a>
    <ul class="nav nav-treeview" style="display: block;">
        <li class="nav-item">
            @foreach ($item["submenu"] as $submenu)
            @include("theme.$theme.menu-item", ["item" => $submenu])
            @endforeach
        </li>
    </ul>
</li>
@endif