<aside class="col-lg-3">

    <!-- Profile Details
    =============================== -->
    <div class="bg-white shadow-sm rounded text-center p-3 mb-4">
        <div class="profile-thumb mt-3 mb-4"> <img class="rounded-circle" src="{{ asset('images/profile-thumb.jpg') }}" alt="">
            <div class="profile-thumb-edit custom-file bg-primary text-white" data-toggle="tooltip" title="Change Profile Picture"> <i class="fas fa-camera position-absolute"></i>
                <input type="file" class="custom-file-input" id="customFile">
            </div>
        </div>
        <p class="text-3 font-weight-500 mb-2">Salut, {{ auth()->user()->name }}</p>
        <p class="mb-2"><a href="{{ route('profile.show') }}" class="text-5 text-light" data-toggle="tooltip" title="Edit Profile"><i class="fas fa-edit"></i></a></p>
    </div>
    <!-- Profile Details End -->

    <!-- Available Balance
    =============================== -->
    <div class="bg-white shadow-sm rounded text-center p-3 mb-4">
        <div class="text-17 text-light my-3"><i class="fas fa-wallet"></i></div>
        <h3 class="text-9 font-weight-400">$2956.00</h3>
        <p class="mb-2 text-muted opacity-8">Solde disponible</p>
        <hr class="mx-n3">
        <div class="d-flex"><a href="#" class="btn-link mr-auto">Retrait</a> <a href="#" class="btn-link ml-auto">Dépot</a></div>
    </div>
    <!-- Available Balance End -->

    <!-- Need Help?
    =============================== -->
    <div class="bg-white shadow-sm rounded text-center p-3 mb-4">
        <div class="text-17 text-light my-3"><i class="fas fa-comments"></i></div>
        <h3 class="text-5 font-weight-400 my-4">Besoin d'aide?</h3>
        <p class="text-muted opacity-8 mb-4">Vous avez des questions ou des préoccupations concernant votre compte?<br>
            Nos experts sont là pour aider!</p>
        <a href="#" class="btn btn-primary btn-block">Discutez avec nous</a> </div>
    <!-- Need Help? End -->

</aside>
