@extends('layouts.app')
@section('title', "{{$profil->title}}")
@section('sub-title', "{{$profil->title}}")
@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">

                <!-- Profile Image -->
                <div class="card card-primary card-outline">
                    <div class="card-body box-profile">
                        <div class="text-center">
                            <img class="profile-user-img img-fluid " src="{{$profil->foto_profil}}"
                                alt="User profile picture">
                        </div>

                        <h3 class="profile-username text-center">{{$profil->title}}</h3>

                        <p class="text-muted text-center">{{$profil->title}}</p>

                        {{-- <ul class="list-group list-group-unbordered mb-3">
                            <li class="list-group-item">
                                <b>Followers</b> <a class="float-right">1,322</a>
                            </li>
                            <li class="list-group-item">
                                <b>Following</b> <a class="float-right">543</a>
                            </li>
                            <li class="list-group-item">
                                <b>Friends</b> <a class="float-right">13,287</a>
                            </li>
                        </ul>

                        <a href="#" class="btn btn-primary btn-block"><b>Follow</b></a> --}}
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->

                <!-- About Me Box -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Tentang Saya</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <strong><i class="fas fa-book mr-1"></i> Pendidikan</strong>

                        <p class="text-muted">
                            SMKN 1 DOKO
                        </p>

                        <hr>

                        <strong><i class="fas fa-map-marker-alt mr-1"></i> Alamat</strong>

                        <p class="text-muted">Doko, Kab Blitar Jawa Timur</p>

                        {{-- <strong><i class="fas fa-pencil-alt mr-1"></i> Skills</strong> --}}
                        {{--
                        <p class="text-muted">
                            <span class="tag tag-danger">UI Design</span>
                            <span class="tag tag-success">Coding</span>
                            <span class="tag tag-info">Javascript</span>
                            <span class="tag tag-warning">PHP</span>
                            <span class="tag tag-primary">Node.js</span>
                        </p> --}}

                        {{-- <hr>

                        <strong><i class="far fa-file-alt mr-1"></i> </strong> --}}

                        {{-- <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam fermentum
                            enim neque.</p> --}}
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
            <div class="col-md-9">
                <div class="card">
                    <div class="card-body">
                        <div class="tab-content">
                            <div class="active tab-pane" id="activity">


                                <h1>Hobi</h1>
                                <div id="cards-box" class="row justify-content-start">
                                    <div class="col-4">
                                        <div class="card">
                                            <img src="https://lzd-img-global.slatic.net/g/p/378984c6a3a18e2cc8894357c746a81e.jpg_720x720q80.jpg_.webp" class="card-img-top" alt="Bermain Kalimba">
                                            <div class="card-body">
                                                <h6 class="card-subtitle mb-2 text-muted">Bermain Kalimba</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="card">
                                            <img src="https://cdn.eraspace.com/pub/media/wysiwyg/artikel/Tahun_2022/Juli/menggambaripad-2.jpg" class="card-img-top" alt="Menggambar">
                                            <div class="card-body">
                                                <h6 class="card-subtitle mb-2 text-muted">Menggambar</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="card">
                                            <img src="https://images.tokopedia.net/blog-tokopedia-com/uploads/2021/01/Minecraft.jpg" class="card-img-top" alt="Game">
                                            <div class="card-body">
                                                <h6 class="card-subtitle mb-2 text-muted">Game</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- <div class="row mb-3">
                                    <div class="col-sm-6">
                                        <img class="img-fluid"
                                            src="https://lzd-img-global.slatic.net/g/p/378984c6a3a18e2cc8894357c746a81e.jpg_720x720q80.jpg_.webp"
                                            alt="Bermain Kalimba">
                                    </div>
                                    <!-- /.col -->
                                    <div class="col-sm-6">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <img class="img-fluid mb-3"
                                                    src="https://cdn.eraspace.com/pub/media/wysiwyg/artikel/Tahun_2022/Juli/menggambaripad-2.jpg"
                                                    alt="Menggambar">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <img class="img-fluid mb-3"
                                                    src="https://images.tokopedia.net/blog-tokopedia-com/uploads/2021/01/Minecraft.jpg"
                                                    alt="Game">
                                            </div>
                                        </div>
                                        <!-- /.row -->
                                    </div>
                                    <!-- /.col -->
                                </div> --}}
                            </div>
                        </div>
                        <!-- /.tab-content -->
                    </div><!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
</section>
@endsection
