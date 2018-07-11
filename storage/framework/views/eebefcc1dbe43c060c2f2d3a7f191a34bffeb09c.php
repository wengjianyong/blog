
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

    <li><a href="<?php echo e(route('backend.home')); ?>" class="waves-effect waves-teal"><i class="material-icons">home</i><?php echo app('translator')->getFromJson('menus.home'); ?></a></li>

</ul>
