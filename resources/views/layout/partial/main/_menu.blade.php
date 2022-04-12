<ul class="metismenu" id="menu-bar">
    <li>
        <a href="{{ route('home') }}">
            <i data-feather="home"></i>
            <span> Dashboard </span>
        </a>
    </li>
{{--    <li>--}}
{{--        <a href="javascript: void(0);">--}}
{{--            <i data-feather="inbox"></i>--}}
{{--            <span> Shipments </span>--}}
{{--            <span class="menu-arrow"></span>--}}
{{--        </a>--}}

{{--        <ul class="nav-second-level" aria-expanded="false">--}}
{{--            <li>--}}
{{--                <a href="{{ route('shipments.index') }}">Shipments</a>--}}
{{--            </li>--}}
{{--            <li>--}}
{{--                <a href="{{ route('sellers.index') }}">Seller</a>--}}
{{--            </li>--}}
{{--        </ul>--}}
{{--    </li>--}}
    <li>
        <a href="{{ route('customers.index') }}">
            <i data-feather="user"></i>
            <span> Customers </span>
        </a>
    </li>
</ul>
