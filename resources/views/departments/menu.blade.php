

<li class="has-submenu"><a href="#" id="current"><span>{{__('departments')}}</span></a>
    <ul class="left-submenu">
        <li class="back"><a href="#">{{__('Back')}}</a></li>

        {{--@can('options_add')--}}
        <li><a href="{{route('departments.create')}}" id="current"> <span>{{__('Add department')}}</span></a></li>
        {{--@endcan--}}

{{--        @can('options_view')--}}
        <li><a href="{{route('departments.index')}}" id="current"> <span>{{__('View departments')}}</span></a></li>
        {{--@endcan--}}

    </ul>
</li>

