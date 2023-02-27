@auth
<div class="an-user">
<div class="panel">
    <div class="user-avatar">
        <div class="avatar-picture">
            {!!Avatar::create(Auth::user()->username)->toSvg();!!}
            <span class="green-dot"></span>
        </div>
        <p class="user-info">{{Auth::user()->username}}</p>
    </div>
    @php
$user = App\Models\User::find(auth()->user()->id); // reemplazar con el ID del usuario deseado
$unreadNotificationCount = $user->notifications->where('read_at', null)->count();
    @endphp
    <div class="notifications noti-in md-ripples ripples-bg" tabindex="0" id="noti-info" aria-disabled="false">
        <div class="noti-icon"><i class="fa-solid fa-bell"></i><span class="notifications-count" style="display: {{($unreadNotificationCount > 0) ? 'block' : 'none'}};">{{$unreadNotificationCount}}</span></div>
        <div class="info-noti"><span style="display: block;">Notificaciones</span></div>
        <div class="dropdown"><i class="fa-solid fa-magnifying-glass-arrow-right"></i></div>
    </div>
</div>
</div>

<div class="an-notifications">
    <div class="panel-notifications">
        <i class="fa-solid fa-circle-arrow-left" id="return-noti"></i>
        <i class="fa-solid fa-circle-xmark" id="close-noti"></i>
        <div class="notifications_cont">

            <div class="titulo-cont cont_2"><span class="titulo">Notificaciones</span></div>
            <span class="link_read_all" id="read_all_link"></span>
            <div class="notifications_info">
                <div class="notification-item">
                <div class="lds-ripple"><div></div><div></div></div>
                <div><p>Buscando notificaciones...</p></div>
                </div>
            </div>
        </div>
    </div>

</div>

@endauth
