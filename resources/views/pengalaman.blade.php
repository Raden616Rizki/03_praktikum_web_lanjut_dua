@extends('layouts.app')
@section('title', 'Pengalaman Kuliah')
@section('sub-title', 'Pengalaman Kuliah')
@section('content')
<section class="content">
    <div class="container-fluid">

        <!-- Timelime example  -->
        <div class="row">
            <div class="col-md-12">
                <!-- The time line -->
                <div class="timeline">
                    <!-- timeline time label -->
                    {{-- <div class="time-label">
                        <span class="bg-red">7 Maret 2023</span>
                    </div> --}}
                    @forelse ($kuliah as $kuliahs)
                    <div class="time-label">
                        <span class="bg-red">{{$kuliahs->tanggal}}</span>
                    </div>
                        <!-- timeline item -->
                        <div>
                            <i class="fas fa-envelope bg-blue"></i>
                            <div class="timeline-item">
                                <span class="time"><i class="fas fa-clock"></i>{{$kuliahs->waktu}}</span>
                                <h3 class="timeline-header"><a href="#">{{$kuliahs->nama}}</a> create new story</h3>
                                <div class="timeline-body">
                                    {{$kuliahs->pengalaman}}
                                </div>
                                <div class="timeline-footer">
                                    <a class="btn btn-primary btn-sm">Read more</a>
                                    <a class="btn btn-danger btn-sm">Delete</a>
                                </div>
                            </div>
                        </div>
                        <!-- END timeline item -->
                    @empty
                        <div class="alert alert-danger">
                            Data Pengalaman Belum Tersedia.
                        </div>
                    @endforelse
                    <!-- /.timeline-label -->
                    {{-- <!-- timeline item -->
                    <div>
                        <i class="fas fa-envelope bg-blue"></i>
                        <div class="timeline-item">
                            <span class="time"><i class="fas fa-clock"></i> 15:00</span>
                            <h3 class="timeline-header"><a href="#">Muhamad Rafi Prabowo</a> create new story</h3>

                            <div class="timeline-body">
                               Hidup gini-gini amat yakk
                            </div>
                            <div class="timeline-footer">
                                <a class="btn btn-primary btn-sm">Read more</a>
                                <a class="btn btn-danger btn-sm">Delete</a>
                            </div>
                        </div>
                    </div>
                    <!-- END timeline item -->
                    <!-- timeline item -->
                    <div>
                        <i class="fas fa-envelope bg-blue"></i>
                        <div class="timeline-item">
                            <span class="time"><i class="fas fa-clock"></i> 12:05</span>
                            <h3 class="timeline-header"><a href="#">Raden Rizki</a> create new story</h3>

                            <div class="timeline-body">
                                Semester 4 banyak kuliah pagi dan pulang sore
                            </div>
                            <div class="timeline-footer">
                                <a class="btn btn-primary btn-sm">Read more</a>
                                <a class="btn btn-danger btn-sm">Delete</a>
                            </div>
                        </div>
                    </div>
                    <!-- END timeline item --> --}}
                    <div>
                        <i class="fas fa-clock bg-gray"></i>
                    </div>
                </div>
            </div>
            <!-- /.col -->
        </div>
    </div>
    <!-- /.timeline -->

</section>
@endsection
