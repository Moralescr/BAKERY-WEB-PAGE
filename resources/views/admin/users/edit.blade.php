@extends('layouts.app')
@section('content')

<!-- users edit start -->
<section class="users-edit">

    <ul class="nav nav-tabs mb-3" role="tablist">
        <li class="nav-item">
            <a class="nav-link d-flex align-items-center active" id="account-tab" data-toggle="tab" href="#account" aria-controls="account" role="tab" aria-selected="true">
                <i class="feather icon-user mr-25"></i><span class="d-none d-sm-block">Account</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link d-flex align-items-center" id="information-tab" data-toggle="tab" href="#information" aria-controls="information" role="tab" aria-selected="false">
                <i class="feather icon-info mr-25"></i><span class="d-none d-sm-block">Information</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link d-flex align-items-center" id="social-tab" data-toggle="tab" href="#social" aria-controls="social" role="tab" aria-selected="false">
                <i class="feather icon-share-2 mr-25"></i><span class="d-none d-sm-block">Social</span>
            </a>
        </li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane active" id="account" aria-labelledby="account-tab" role="tabpanel">
            <!-- users edit media object start -->
            <div class="media mb-2">
                <a class="mr-2 my-25" href="#">
                    <img src="{{$user->file}}" alt="users avatar" class="users-avatar-shadow rounded" height="90" width="90">
                </a>
                <div class="media-body mt-50">
                    <h4 class="media-heading">{{$user->name}}</h4>
                    <div class="col-12 d-flex mt-1 px-0">
                        <a href="#" class="btn btn-danger">Fundadora Ale's Cake</a>
                    </div>
                </div>
            </div>
            <!-- users edit media object ends -->
            <form role="form" method="PUT" action="{{ route('users.update', $user->id) }}" enctype="multipart/form-data">
            @csrf
            <!-- users edit account form start -->
                <div class="row">
                    <div class="col-12 col-sm-6">
                        <div class="form-group">
                           <div class="controls">
                               <label>Imagen</label>
                               <input id="image" name="image" type="file">
                           </div>
                        </div>
                      <!--  <div class="form-group">
                            <div class="controls">
                                <label>Usuario</label>
                                <input type="text" class="form-control" placeholder="Username" value="Administradora" required data-validation-required-message="This username field is required">
                            </div>
                        </div>-->
                        <div class="form-group">
                            <div class="controls">
                                <label>Nombre</label>
                                <input id="name" name="name" type="text" class="form-control" placeholder="Name" value="{{$user->name}}" required data-validation-required-message="This name field is required">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="controls">
                                <label>E-mail</label>
                                <input id="email" name="email"  type="email" class="form-control" placeholder="Email" value="{{$user->email}}" required data-validation-required-message="This email field is required">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="controls">
                                <label>Contraseña</label>
                                <input id="password" name="password"  type="password" class="form-control" placeholder="Contraseña" value="{{$user->password}}" required data-validation-required-message="This email field is required">
                            </div>
                        </div>
                    </div>
                    <div class="col-12 d-flex flex-sm-row flex-column justify-content-start mt-1">
                        <button class="btn btn-outline-warning" name="submit" type="submit">Actualizar</button>
                    </div>
                </div>
            </form>
            <!-- users edit account form ends -->
        </div>
    </div>
</section>
<!-- users edit ends -->

@endsection