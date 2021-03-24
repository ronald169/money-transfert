<div class="bg-primary">
    <div class="container d-flex justify-content-center">
        <ul class="nav secondary-nav">
            <li class="nav-item"> <a class="nav-link {{ currentRoute('account') }}" href="{{ route('account') }}">Compte</a></li>
            <li class="nav-item"> <a class="nav-link {{ currentRoute('security') }}" href="{{ route('security') }}">Sécurité</a></li>
            <li class="nav-item"> <a class="nav-link {{ currentRoute('payment') }}" href="{{ route('payment') }}">Methodes de paiement</a></li>
            <li class="nav-item"> <a class="nav-link {{ currentRoute('notification-change') }}" href="{{ route('notification-change') }}">Notifications</a></li>
        </ul>
    </div>
</div>
