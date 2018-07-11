
<ul id="slide-out" class="sidenav sidenav-fixed">
    <li>
        <div class="user-view">
            <div class="background teal">
            </div>
            <a href="#!user"><img class="circle" src="<?php echo e(asset('images/avatar.jpg')); ?>"></a>
            <a href="#!name"><span class="white-text name"><?php echo e(Auth::user()->name); ?></span></a>
            <a href="#!email"><span class="white-text email"><?php echo e(Auth::user()->email); ?></span></a>
        </div>
    </li>

    <li>
        <a href="<?php echo e(route('backend.home')); ?>" class="waves-effect waves-teal">
            <i class="material-icons">home</i>主页
        </a>
    </li>

    <li class="no-padding">
        <ul class="collapsible collapsible-accordion">
            <li>
                <a class="collapsible-header waves-effect waves-teal">
                    <i class="material-icons">security</i>RBAC
                </a>
                <div class="collapsible-body">
                    <ul>
                        <li>
                            
                                
                            
                        </li>
                        <li>
                            
                                
                            
                        </li>
                    </ul>
                </div>
            </li>
        </ul>
    </li>

    <li>
        <a href="" class="waves-effect waves-teal">
            <i class="material-icons">people</i>
            用户
        </a>
    </li>
    <li>
        <a href="" class="waves-effect waves-teal">
            <i class="material-icons">library_books</i>分类
        </a>
    </li>
    <li>
        <a href="" class="waves-effect waves-teal">
            <i class="material-icons">loyalty</i>标签
        </a>
    </li>
    <li>
        <a href="" class="waves-effect waves-teal">
            <i class="material-icons">insert_drive_file</i>文章
        </a>
    </li>
    <li>
        <a href="" class="waves-effect waves-teal">
            <i class="material-icons">note</i>页面
        </a>
    </li>
    <li>
        <a href="" class="waves-effect waves-teal">
            <i class="material-icons">settings</i>设置
        </a>
    </li>
</ul>

