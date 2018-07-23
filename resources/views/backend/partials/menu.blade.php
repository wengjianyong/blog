{{-- Menu --}}
<ul id="slide-out" class="sidenav sidenav-fixed">
    <li>
        <div class="user-view">
            <div class="background teal">
            </div>
            <a href="#!user"><img class="circle" src="{{ asset('images/avatar.jpg') }}"></a>
            <a href="#!name"><span class="white-text name">{{ Auth::user()->name }}</span></a>
            <a href="#!email"><span class="white-text email">{{ Auth::user()->email }}</span></a>
        </div>
    </li>

    <li>
        <a href="{{ route('backend.home') }}" class="waves-effect waves-teal">
            <i class="material-icons">home</i>主页
        </a>
    </li>



    <li>{{--{{ route('backend.users.index') }}--}}
        <a href="" class="waves-effect waves-teal">
            <i class="material-icons">people</i>
            用户
        </a>
    </li>
    <li>{{--{{ route('backend.categories.index') }}--}}
        <a href="" class="waves-effect waves-teal">
            <i class="material-icons">library_books</i>分类
        </a>
    </li>
    <li>{{--{{ route('backend.tags.index') }}--}}
        <a href="" class="waves-effect waves-teal">
            <i class="material-icons">loyalty</i>标签
        </a>
    </li>
    <li>{{--{{ route('backend.posts.index') }}--}}
        <a href="" class="waves-effect waves-teal">
            <i class="material-icons">insert_drive_file</i>文章
        </a>
    </li>
    <li>{{--{{ route('backend.pages.index') }}--}}
        <a href="" class="waves-effect waves-teal">
            <i class="material-icons">note</i>页面
        </a>
    </li>
    <li>{{--{{ route('backend.settings.index') }}--}}
        <a href="" class="waves-effect waves-teal">
            <i class="material-icons">settings</i>设置
        </a>
    </li>
</ul>

