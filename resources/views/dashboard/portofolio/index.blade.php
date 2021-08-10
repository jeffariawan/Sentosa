@extends('layouts.dashboard')

@section('dashboard')

                    <!-- Project Anda -->
                    <article class="entry entry-single">
                        <div class="entry-meta">
                            <h4 class="h4-sentosa">Project Anda</h4>
                            <p class="lead"><a href="{{ route('dashboard.portofolio.create') }}">Tambah Article</a></p>
                        </div>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">name</th>
                                    <th scope="col">description</th>
                                    <th scope="col">Service</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($workerPortofolio as $port)
                                    <tr>
                                        <th scope="row"></th>
                                        <td>{{ $port->name }}</td>
                                        <td>{{ $port->description }}</td>
                                        <td>{{ $port->refService->name }}</td>
                                        <td>
                                            <a href="#"
                                                class="btn btn-primary">
                                                <span>Lihat detail</span>
                                            </a>
                                        </td>
                                    </tr>
                                 @endforeach
                            </tbody>
                        </table>
                    </article><!-- End Project Anda -->
@endsection
