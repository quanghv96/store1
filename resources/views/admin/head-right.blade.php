<div class="topNav">
    <div class="wrapper">
        <div class="userNav">
            <ul>
                <li class="dd"><a title=""><img src="{{ asset('source/bower_components/library/backend/admin/images/icons/topnav/messages.png') }}" alt=""><span>{{ __('Thông báo') }}</span><span class="numberTop">{{ $total_not or 0 }}</span></a>
                    <ul class="userDropdown">
                        <div class="result">
                        @foreach($notification as $row)
                            <li>
                                @if($row->status == 0)
                                    <a id="{{ __('new_') }}{{ $row->id }}" href="{{ $row->link }}" title="" class="sAdd not_view new">
                                @else
                                    <a id="{{ __('new_') }}{{ $row->id }}" href="{{ $row->link }}" title="" class="sAdd not_view">
                                @endif
                                    {{ $row->title }}
                                <br>{{ date('d/m H:i:s', strtotime($row->date)) }}
                                </a>
                            </li>
                        @endforeach
                        </div>
                        @if(count($notification) > 0)
                        <li class="all">{{ __('Xem tất cả') }}</li>
                        @endif
                    </ul>
                </li>
                <li>
                    <a href="{{ route('site.home.index') }}" target="_blank">
                        <img id="head-right-img" src="{{ asset('source/bower_components/library/backend/admin/images/icons/light/home.png') }}" />
                        <span>{{ trans('common.head.trang_chu') }}</span>
                    </a>
                </li>
                <!-- Logout -->
                <li>
                    <a href="{{ route('admin.logout') }}">
                        <img src="{{ asset('source/bower_components/library/backend/admin/images/icons/topnav/logout.png') }}" alt="" />
                        <span>{{ trans('common.head.dang_xuat') }}</span>
                    </a>
                </li>
            </ul>
        </div>
        <div class="clear"></div>
    </div>
</div>
<!-- Main content -->
